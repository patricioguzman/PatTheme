document.addEventListener("DOMContentLoaded", function () {
    // Dynamic Role Text
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
                setTimeout(() => eraseRole
::contentReference[oaicite:1]{index=1}