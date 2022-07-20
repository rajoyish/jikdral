const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Hind", ...defaultTheme.fontFamily.sans],
                hind: ["Hind", "sans-serif"],
                bo: ["Jomolhari", "serif"],
            },

            colors: {
                primary: "#790B18",
                accent: "#BFAA5B",
                "prime-dark": "#332313",
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require("@tailwindcss/typography")
    ],
};
