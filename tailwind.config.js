/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
        center: true
    },
    extend: {
        colors: {
            'buttercup': {
                DEFAULT: '#F1B21C',
                '50': '#FCEDC9',
                '100': '#FAE6B6',
                '200': '#F8D98F',
                '300': '#F6CC69',
                '400': '#F3BF42',
                '500': '#F1B21C',
                '600': '#C9910C',
                '700': '#946B09',
                '800': '#5F4506',
                '900': '#2A1E03'
            },
        }
    },
  },
  plugins: [],
}
