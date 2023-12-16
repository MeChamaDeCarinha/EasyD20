import type { Config } from "tailwindcss";

const config: Config = {
    content: ["./src/pages/**/*.{js,ts,jsx,tsx,mdx}", "./src/components/**/*.{js,ts,jsx,tsx,mdx}", "./src/app/**/*.{js,ts,jsx,tsx,mdx}"],
    theme: {
        extend: {
            colors: {
                base: {
                    100: "#101010",
                    200: "#202020",
                    300: "#303030",
                    400: "#404040",
                },
                primary: "#8147FF"
            },
        },
    },
    plugins: [],
};

export default config;
