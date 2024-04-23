/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{html,js}",
    'js/*.js',
    "js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        "main_c": "#1321a1",
        // "sec_c": "#070707", doesnt't have
        "imp_c": "#f98d0f",
        "heading_c": "#000000",
        "paragraf_c": "#646464",
        "border-table_c": "#646464",
      },
    },
  },
  plugins: [
    // require('@tailwindcss/forms'),
    // require('preline/plugin'),
    // require('flowbite/plugin'),
  ]
}