/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './*.php',              // Archivos PHP en la raíz
      './**/*.php',           // Archivos PHP en subdirectorios
      './assets/js/**/*.js',  // Archivos JS
  ],
  theme: {
      extend: {},
  },
  plugins: [],
};
