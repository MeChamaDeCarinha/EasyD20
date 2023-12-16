import { NextApiRequest, NextApiResponse } from "next";
import NextAuth, { Session } from "next-auth";
import { NextAuthOptions } from "next-auth";
import CredentialsProvider from "next-auth/providers/credentials";
import { prisma } from "@/lib/database";
import bcrypt from "bcrypt";

export { auth as GET, auth as POST };

declare module "next-auth" {
    interface Session {
        id: string;
        username: string;
        email: string;
    }
}

export function authOptions(req?: NextApiRequest): NextAuthOptions {
    return {
        session: {
            strategy: "jwt",
        },
        pages: {
            signIn: "/sing-in",
        },
        callbacks: {
            async session({ session, token }) {
                const user = await prisma.user.findUnique({
                    where: {
                        id: token.sub,
                    },
                });

                return { ...user } as Session;
            },
        },
        providers: [
            CredentialsProvider({
                name: "Credentials",
                credentials: {
                    login: { label: "login", type: "login" },
                    password: { label: "password", type: "password" },
                },
                async authorize(credentials) {
                    const { login, password } = credentials as {
                        login: string;
                        password: string;
                    };

                    const user = await prisma.user.findUnique({
                        where: { email: login },
                    });

                    if (!user) throw new Error("Invalid credentials");

                    if (await bcrypt.compare(password, user.password)) {
                        return user;
                    }

                    throw new Error("Invalid credentials");
                },
            }),
        ],
    };
}

async function auth(req: NextApiRequest, res: NextApiResponse) {
    return await NextAuth(req, res, authOptions(req));
}
