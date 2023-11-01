/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ['./app/**/*.php'],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      screens: {
        '3xl': '1920px',
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [
    plugin(function ({ addComponents }) {
      addComponents({
        '.ring-b-lighter': {
          'box-shadow': `inset 0px -4px 0 0 rgb(255 255 255 / 10%)`,
        },
        '.ring-b-light': {
          'box-shadow': `inset 0px -4px 0 0 rgb(255 255 255 / 40%)`,
        },
      })
    }),
  ],
}
