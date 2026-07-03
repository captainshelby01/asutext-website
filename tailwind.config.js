/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          red:   '#CC0000',
          blue:  '#003580',
          green: '#1A6B2F',
          dark:  '#0D0D0D',
          mid:   '#1A1A1A',
          light: '#F6F6F6',
        }
      },
      fontFamily: {
        display: ['Montserrat', 'sans-serif'],
        body:    ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
