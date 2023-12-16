import { URL } from "@/lib/general";
import { getServerSession } from "next-auth";
import { authOptions } from "./api/auth/[...nextauth]/route";

export default async function Home() {
    const session = await getServerSession(authOptions())

    return (
        <div className="flex flex-col">
            <div className="w-screen h-14 fixed bg-base-200 box-content border-b border-b-primary"></div>
            <div className="w-screen h-screen pt-14 text-white flex flex-col items-center justify-center gap-y-4">
                <p className="text-6xl">Welcome</p>
                <a href={ URL + (!session ? "/sing-in" : "/dashboard") } className="w-32 h-8 bg-base-300 hover:bg-base-400 rounded flex items-center justify-center duration-300">Start</a>
            </div>
        </div>
    );
}
