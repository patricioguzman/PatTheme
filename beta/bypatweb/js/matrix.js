document.addEventListener("DOMContentLoaded", function () {
    // === Menú Hamburguesa ===
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    if (menuToggle && menu) {
        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }

    // === Efecto Matrix ===
    const canvas = document.getElementById("matrixCanvas");
    if (canvas) {
        const ctx = canvas.getContext("2d");

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVXYZ@#$%^&*()";
        const fontSize = 16;
        const columns = canvas.width / fontSize;

        const drops = Array(Math.floor(columns)).fill(0);

        function draw() {
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            ctx.fillStyle = "#0F0"; // Verde estilo Matrix
            ctx.font = `${fontSize}px monospace`;

            drops.forEach((y, i) => {
                const text = characters[Math.floor(Math.random() * characters.length)];
                const x = i * fontSize;
                ctx.fillText(text, x, y * fontSize);

                if (y * fontSize > canvas.height || Math.random() > 0.975) {
                    drops[i] = 0;
                }

                drops[i]++;
            });
        }

        setInterval(draw, 50);

        // Redimensionar canvas al cambiar el tamaño de la ventana
        window.addEventListener("resize", () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    }

    // === Animación de Texto Dinámico en el Hero ===
    const roles = [
        "💻 Full Stack Web Developer",
        "🖥️ System and Server Administrator",
        "🌐 Network and Telecommunications Specialist",
        "📱 Community Manager",
        "📂 IT Project Manager",
        "🎨 UX/UI Designer",
        "📐 3D Modeler",
        "🚁 Drone Operator and Aerial Data Analyst",
        "🔒 Cybersecurity Consultant",
        "👨‍💻 Software Engineer"
    ];
    let roleIndex = 0;

    function typeRole() {
        const roleElement = document.getElementById("dynamic-role");
        if (!roleElement) return;
        const currentRole = roles[roleIndex];
        roleElement.textContent = "";
        let charIndex = 0;

        function typeChar() {
            if (charIndex < currentRole.length) {
                roleElement.textContent += currentRole[charIndex];
                charIndex++;
                setTimeout(typeChar, 100);
            } else {
                roleIndex = (roleIndex + 1) % roles.length;
                setTimeout(() => eraseRole(roleElement), 2000);
            }
        }

        typeChar();
    }

    function eraseRole(element) {
        const currentText = element.textContent;
        if (currentText.length > 0) {
            element.textContent = currentText.slice(0, -1);
            setTimeout(() => eraseRole(element), 100);
        } else {
            typeRole();
        }
    }

    typeRole();
});
