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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                sky: {
                    '50': '#fdf2f2',
                    '100': '#fde8e8',
                    '200': '#fbd5d5',
                    '300': '#f9b8b8',
                    '400': '#f86a6a',
                    '500': '#ef4e4e',
                    '600': '#e33434',
                    '700': '#cc1f1a',
                    '800': '#b91c1c',
                    '900': '#7f1d1d',
                },
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
