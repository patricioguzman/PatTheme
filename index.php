/*
Theme Name: PatTheme
Theme URI: https://bypat.com.au
Author: Patricio Guzmán
Author URI: https://bypat.com.au/
Description: A custom WordPress theme.
Version: 1.0
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: pattheme
*/

<?php get_header(); ?>

<section class="relative h-screen flex items-center justify-center text-center text-white">
    <!-- Video de fondo -->
    <video
        class="absolute top-0 left-0 w-full h-full object-cover"
        autoplay
        muted
        loop
        playsinline
        poster="<?php echo get_template_directory_uri(); ?>/assets/images/screenshot.png"
    >
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/matrixpat.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <!-- Contenido del Hero -->
    <div class="relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Hi, I'm Pat</h1>
        <p id="dynamic-role" class="text-xl md:text-2xl font-light">Loading...</p>
        <button class="mt-4 px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
            Contact
        </button>
    </div>
</section>
<canvas id="matrixCanvas" class="absolute top-0 left-0 w-full h-full"></canvas>
<?php get_footer(); ?>