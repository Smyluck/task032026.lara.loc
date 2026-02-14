import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Mulish", ...defaultTheme.fontFamily.serif],
                serif:["Inter", ...defaultTheme.fontFamily.serif],
            },
            colors: {
                "custom-gray-6C757D": "#6C757D",
                "custom-gray-F6F8FA": "#F6F8FA",
                "custom-gray-363740": "#363740",
                "custom-gray-252733": "#252733",
                "custom-gray-DCE4EA": "#DCE4EA",
                "custom-gray-788397": "#788397",

                "custom-blue-339AF0": "#339AF0",
                "custom-white-ffffff": "#ffffff",
            },
            lineHeight: {
                "20px": "20px",
            },
            fontSize: {
                "16px": "16px",
            },
            boxShadow: {
                custom: "0 2px 1px rgba(0, 0, 0, 0.2)",
            },
            borderRadius: {
                "6px": "6px",
                "12px": "12px",
            },
            margin: {
                "6px": "6px",
                "8px": "8px",
                "9px": "9px",
                "15px": "15px",
                "18px": "18px",
            },
            padding: {
                "4px": "4px",
                "5px": "5px",
                "6px": "6px",
                "12px": "12px",
                "14px": "14px",
                "15px": "15px",
                "16px": "16px",
                "35px": "35px",
                "48px": "48px",
                "50px": "50px",
            },
            height: {
                "24px": "24px",
                "75px": "75px",
            },
            width: {
                "480px": "480px",
            },
            letterSpacing: {
                "0.2px": "0.2px",
            },
        },
    },

    plugins: [forms],
};
