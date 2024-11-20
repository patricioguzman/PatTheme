/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php", // Asegúrate de incluir archivos PHP
    "./assets/js/**/*.js", // Incluye tus scripts personalizados
    "./assets/css/**/*.css", // Incluye estilos adicionales
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};

