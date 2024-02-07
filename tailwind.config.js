import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", "Sora", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#1BC35E",
                secondary: "#16a34a",
                "secondary-font": "#ECE8E8",
                info: "#3ABFF8",
                success: "#36D399",
                warning: "#FBBD23",
                error: "#F87272",
                green: "#19743b",
                accent: "#806043",
                neutral: "#3D4451",
                "base-100": "#FFFFFF",
                black: "#1E1E1E",
                "soft-green": "#F7FDF9",
                "soft-white": "#F2F2F2",
                "soft-gray": "#F8F8F8",
                "desc-font": "#A7ABB6",
                "border-color": "#EAEAEA",
            },
            borderRadius: {
                "4xl": "2rem",
                "5xl": "2.5rem",
                "6xl": "3rem",
            },
        },
    },

    plugins: [require("flowbite")],
};
