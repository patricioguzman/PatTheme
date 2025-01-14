document.addEventListener("DOMContentLoaded", function () {
    const loading = document.getElementById("loading");
    const mainContent = document.getElementById("main-content");
    const canvas = document.getElementById("matrixCanvas");

    if (canvas) {
        const ctx = canvas.getContext("2d");
        canvas.width = window.innerWidth;
        canvas.height = document.documentElement.clientHeight; // Use clientHeight

        const characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVXYZ@#$%^&*()";
        const fontSize = 16;
        const columns = canvas.width / fontSize;
        const drops = Array(Math.floor(columns)).fill(0);

        function draw() {
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = "#0F0";
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

        const matrixInterval = setInterval(draw, 50);

        setTimeout(() => {
            clearInterval(matrixInterval);
            if (loading) {
                loading.style.display = "none"; // Hide loading container
                loading.remove(); // Remove loading container
            }
            document.body.classList.add("loaded");
            mainContent.classList.remove("hidden");
        }, 3000);

        window.addEventListener("resize", () => {
            canvas.width = window.innerWidth;
            canvas.height = document.documentElement.clientHeight; // Use clientHeight
        });
    }

    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    if (menuToggle && menu) {
        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }

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

        roleElement.style.height = "2em"; // Fix height
        roleElement.style.overflow = "hidden"; // Prevent reflow

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

        function eraseRole(element) {
            const currentText = element.textContent;
            if (currentText.length > 0) {
                element.textContent = currentText.slice(0, -1);
                setTimeout(() => eraseRole(element), 100);
            } else {
                typeRole();
            }
        }

        typeChar();
    }

    typeRole();

    // Add hover effect for "Schedule Appointment" button
    const scheduleButton = document.querySelector('a[href*="calendar.google.com"]');
    if (scheduleButton) {
        let hoverTimeout;
        scheduleButton.addEventListener('mouseenter', () => {
            const loadingSymbol = document.createElement('div');
            loadingSymbol.classList.add('loading-symbol');
            loadingSymbol.style.display = 'inline-block';
            loadingSymbol.style.marginLeft = '10px';
            loadingSymbol.style.border = '4px solid #00ff00';
            loadingSymbol.style.borderTop = '4px solid transparent';
            loadingSymbol.style.borderRadius = '50%';
            loadingSymbol.style.width = '24px';
            loadingSymbol.style.height = '24px';
            loadingSymbol.style.verticalAlign = 'middle'; // Center vertically
            loadingSymbol.style.animation = 'spin 1s linear infinite';
            scheduleButton.appendChild(loadingSymbol);

            hoverTimeout = setTimeout(() => {
                scheduleButton.click();
            }, 3000);

            // Apply transition effect
            scheduleButton.style.transition = 'background-color 0.3s, color 0.3s';
            scheduleButton.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
            scheduleButton.style.color = '#00ff00';
        });

        scheduleButton.addEventListener('mouseleave', () => {
            clearTimeout(hoverTimeout);
            const loadingSymbol = scheduleButton.querySelector('.loading-symbol');
            if (loadingSymbol) {
                scheduleButton.removeChild(loadingSymbol);
            }

            // Revert transition effect
            scheduleButton.style.backgroundColor = '';
            scheduleButton.style.color = '';
        });

        // Ensure loading symbol remains until the next page is fully loaded
        scheduleButton.addEventListener('click', (event) => {
            event.preventDefault();
            const loadingOverlay = document.createElement('div');
            loadingOverlay.classList.add('loading-overlay');
            loadingOverlay.style.position = 'fixed';
            loadingOverlay.style.top = '0';
            loadingOverlay.style.left = '0';
            loadingOverlay.style.width = '100%';
            loadingOverlay.style.height = '100%';
            loadingOverlay.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
            loadingOverlay.style.display = 'flex';
            loadingOverlay.style.alignItems = 'center';
            loadingOverlay.style.justifyContent = 'center';
            loadingOverlay.style.zIndex = '9999';
            document.body.appendChild(loadingOverlay);

            const loadingSymbol = document.createElement('div');
            loadingSymbol.classList.add('loading-symbol');
            loadingSymbol.style.border = '4px solid #00ff00';
            loadingSymbol.style.borderTop = '4px solid transparent';
            loadingSymbol.style.borderRadius = '50%';
            loadingSymbol.style.width = '48px';
            loadingSymbol.style.height = '48px';
            loadingSymbol.style.animation = 'spin 1s linear infinite';
            loadingOverlay.appendChild(loadingSymbol);

            window.location.href = scheduleButton.href;
        });
    }
});

// Add CSS for loading symbol animation
const style = document.createElement('style');
style.innerHTML = `
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
`;
document.head.appendChild(style);

document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('a .mt-4');
    if (button) {
        button.style.width = "200px"; // Fix button width
        button.style.height = "50px"; // Fix button height
        button.style.position = "relative";
    }
});
