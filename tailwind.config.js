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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                utama: 'rgb(236, 136, 53)', // Warna utama
                secondary: 'rgb(255, 179, 102)', // Warna pudar untuk sekunder
                gray: {
                    900: '#1a1a1a', 
                    800: '#2a2a2a',
                }
            },
            backdropBlur: {
                'lg': '10px',
              },
              backgroundColor: {
                // 'blurred': 'rgba(255, 255, 255, 0.5)',
                'blurred': 'rgba(0, 0, 0, 0.5)',
              }
        },
    },

    plugins: [forms],
};
