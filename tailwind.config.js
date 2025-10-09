import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import aspectRatio from '@tailwindcss/aspect-ratio';

export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],

  theme: {
    container: {
      center: true,
      padding: '1rem',
      screens: {
        lg: '1120px',
        xl: '1280px',
      },
    },
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: '#4f46e5', // Indigo (for buttons, links)
        secondary: '#f43f5e', // Pinkish red (for sale badges)
        accent: '#22c55e', // Green accent
      },
      boxShadow: {
        card: '0 4px 20px rgba(0, 0, 0, 0.1)',
      },
    },
  },

  plugins: [forms, typography, aspectRatio],
};
