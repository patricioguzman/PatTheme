<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="bg-black text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="<?php echo esc_url(home_url()); ?>">ByPat.com.au</a>
        <div class="flex-grow"></div>
        <div class="dropdown" style="margin-left: auto;">
            <button class="text-white menu-button">☰</button>
            <div class="dropdown-content fixed top-0 right-0 w-full md:w-1/3 h-screen bg-black/90 text-white rounded-lg shadow-lg p-4 hidden">
                <div class="profile-section flex flex-col justify-between items-center relative h-full space-y-4">
                    <button class="close-button text-white absolute top-4 right-4">✖</button>
                    <div class="w-40 h-40 bg-gray-700 rounded-lg overflow-hidden shadow-md">
                        <img src="https://picsum.photos/200" alt="Pat Guzmán" class="w-full h-full object-cover">
                    </div>
                    <div class="text-center space-y-2 mt-4 w-full">
                        <h2 class="text-2xl font-bold text-gray-200">Pat Guzmán</h2>
                        <p class="text-gray-400 text-sm">Specialization:</p>
                        <p class="text-lg text-white">System and Server Administrator</p>
                        <p class="text-gray-400 text-sm mt-4">Based in:</p>
                        <p class="text-lg text-white">Melbourne, Australia</p>
                    </div>
                    <div class="social-icons flex space-x-4 mt-4 w-full justify-center">
                        <a href="https://www.youtube.com/channel/UCtD_B2ZV7RuS7ZO6dDRCumw" class="w-10 h-10 bg-black rounded-full flex items-center justify-center hover:bg-green-500">
                            <i class="fab fa-youtube text-white"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/patricioguzman/" class="w-10 h-10 bg-black rounded-full flex items-center justify-center hover:bg-green-500">
                            <i class="fab fa-linkedin text-white"></i>
                        </a>
                        <a href="https://soundcloud.com/patricio-guzman12/tracks" class="w-10 h-10 bg-black rounded-full flex items-center justify-center hover:bg-green-500">
                            <i class="fab fa-soundcloud text-white"></i>
                        </a>
                        <a href="https://open.spotify.com/user/12128324603?si=07ef59e5d04b4e0e" class="w-10 h-10 bg-black rounded-full flex items-center justify-center hover:bg-green-500">
                            <i class="fab fa-spotify text-white"></i>
                        </a>
                        <a href="https://www.instagram.com/patricioguzman/" class="w-10 h-10 bg-black rounded-full flex items-center justify-center hover:bg-green-500">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    </div>
                    <a href="https://calendar.google.com/calendar/u/0/appointments/AcZssZ2CUI1w3KR1fj23HGfkEklPPagJ5ySlYm_ocOM=" class="main-button w-full mt-auto bg-gradient-to-r from-purple-500 to-pink-500 text-white text-lg font-semibold py-3 px-6 rounded-lg shadow-lg hover:from-purple-600 hover:to-pink-600">
                        Let’s Work Together!
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.querySelector(".menu-button");
    const closeButton = document.querySelector(".close-button");
    const dropdownContent = document.querySelector(".dropdown-content");

    menuButton.addEventListener("click", () => {
        dropdownContent.classList.toggle("hidden");
    });

    closeButton.addEventListener("click", () => {
        dropdownContent.classList.add("hidden");
    });

    // Close menu when clicking outside of it
    document.addEventListener("click", (event) => {
        if (!dropdownContent.contains(event.target) && !menuButton.contains(event.target)) {
            dropdownContent.classList.add("hidden");
        }
    });

    // Swipe gesture to close the menu
    let touchstartX = 0;
    let touchendX = 0;

    dropdownContent.addEventListener('touchstart', function(event) {
        touchstartX = event.changedTouches[0].screenX;
    }, false);

    dropdownContent.addEventListener('touchend', function(event) {
        touchendX = event.changedTouches[0].screenX;
        handleGesture();
    }, false);

    function handleGesture() {
        if (touchendX > touchstartX) {
            dropdownContent.classList.add("hidden");
        }
    }
});
</script>
