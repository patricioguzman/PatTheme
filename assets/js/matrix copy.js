document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("matrix");
    const ctx = canvas.getContext("2d");

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVXYZ@#$%^&*()";
    const fontSize = 16;
    const columns = canvas.width / fontSize;

    // Array para almacenar la posición Y de cada columna
    const drops = Array(Math.floor(columns)).fill(0);

    function draw() {
        // Fondo negro translúcido para el efecto "fade"
        ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Configuración del texto
        ctx.fillStyle = "#0F0"; // Verde estilo Matrix
        ctx.font = `${fontSize}px monospace`;

        drops.forEach((y, i) => {
            const text = characters[Math.floor(Math.random() * characters.length)];
            const x = i * fontSize;
            ctx.fillText(text, x, y * fontSize);

            // Reiniciar columna si se sale de pantalla o al azar
            if (y * fontSize > canvas.height || Math.random() > 0.975) {
                drops[i] = 0;
            }

            drops[i]++;
        });
    }

    setInterval(draw, 50);

    // Actualizar tamaño del lienzo al redimensionar la ventana
    window.addEventListener("resize", () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });
});
