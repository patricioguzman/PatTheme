
document.addEventListener("DOMContentLoaded", () => {
    const isMobile = window.innerWidth < 768;
    if (!isMobile) {
        const videoElement = document.querySelector("video");
        if (videoElement) {
            videoElement.src = "../hero.mp4"; // Cambia por la ruta real
        }
    }

    // Manejo del menú hamburguesa
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    if (menuToggle && menu) {
        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }
});
