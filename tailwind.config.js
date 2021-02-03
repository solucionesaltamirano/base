const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'bluegoo': {
                    '50': '#f6f9fe', 
                    '100': '#ecf3fe', 
                    '200': '#d0e1fc', 
                    '300': '#b3cefb', 
                    '400': '#7baaf7', 
                    '500': '#4285f4', 
                    '600': '#3b78dc', 
                    '700': '#3264b7', 
                    '800': '#285092', 
                    '900': '#204178'
                }
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
