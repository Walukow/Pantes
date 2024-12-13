import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            keyframes: {
            kanankiri: {
                '0%': {
                top: '20px',
                right: '0px',
                opacity: '0',
                },
                '100%': {
                top: '20px',
                right: '40px',
                opacity: '1',
                }
            },
            atasbawah: {
                '0%': {
                top: '0px',
                opacity: '0',
                },
                '100%': {
                top: '20px',
                opacity: '1',
                }
            },
            },
            animation: {
            'kanan-kiri': 'kanankiri 1s',
            'atas-bawah': 'atasbawah 1s',
            },
            colors: {
                pantes: '#cfa930',
                first: {
                    50: '#e1e6ed',
                    100: '#b3bdd1',
                    200: '#8190b3',
                    300: '#4f6294',
                    400: '#29407d',
                    500: '#002147',  // Warna utama
                    600: '#001d3f',
                    700: '#001836',
                    800: '#00122d',
                    900: '#000a1f',
                },
                warm: '#f9f8f2',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
