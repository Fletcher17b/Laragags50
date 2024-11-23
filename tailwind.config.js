/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"

  ],
  theme: {
    extend: {
      colors: {
        laravel: "#ef3b2d",
      },
    },
  },
  plugins: [],
}

