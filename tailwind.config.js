/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"

  ],
  theme: {
    extend: {},
      colors: {
          primary: '#FFCE08',
          secondary: '#D5B326',

          // ...
      }
  },
  plugins: [
      require('flowbite/plugin')

  ],

}

