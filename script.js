
document.addEventListener("DOMContentLoaded", function () {
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
