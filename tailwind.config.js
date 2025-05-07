/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  'node_modules/preline/dist/*.js',
],
  darkMode:'false',
  theme: {
    extend: {
      colors: {
        custom: '#403c47',
        categories:'#fafcfb',
        brands:'#f4ecf7',
        letter: '#696580'
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}


