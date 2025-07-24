const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: '2rem',
            screens: {
                sm: '100%',
                md: '100%',
                lg: '1120px',
                xl: '1280px',
            },
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', 'Inter', 'ui-sans-serif', ...defaultTheme.fontFamily.sans],
                heading: ['Poppins', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#6366f1', // indigo-500
                    dark: '#4338ca',   // indigo-700
                    light: '#a5b4fc',  // indigo-300
                },
                accent: {
                    DEFAULT: '#f59e42', // orange-400
                    dark: '#ea580c',   // orange-600
                },
                background: {
                    DEFAULT: '#f3f4f6', // gray-100
                    dark: '#18181b',   // zinc-900
                },
            },
            borderRadius: {
                xl: '1.25rem',
                '2xl': '2rem',
            },
            boxShadow: {
                card: '0 4px 24px 0 rgba(0,0,0,0.08)',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
