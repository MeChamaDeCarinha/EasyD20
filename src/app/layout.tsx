import type { Metadata } from "next";
import "./globals.css";
import Providers from "./components/providers";

export const metadata: Metadata = {
    title: "EasyD20",
    description: "Your digital RPG adventure",
};

export default function RootLayout({ children }: { children: React.ReactNode }) {
    return (
        <html lang="en">
            <body className="w-screen h-[100dvh] bg-base-100 overflow-x-hidden">
                <Providers>{children}</Providers>
            </body>
        </html>
    );
}
