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
<<<<<<< HEAD
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Hey, I Am Pat</h1>
        <p id="dynamic-role" class="text-xl md:text-2xl font-light">Loading...</p>
        <button class="mt-4 px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
            Register
=======
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Hi, I’m Pat</h1>
        <p id="dynamic-role" class="text-xl md:text-2xl font-light">Loading...</p>
        <button class="mt-4 px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
            Descargar Programar Cita
>>>>>>> 46292c4b67b937a29ccca39b95361b4d87d4ceb5
        </button>
    </div>
</section>

<canvas id="matrixCanvas" class="absolute top-0 left-0 w-full h-full"></canvas>

<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> 46292c4b67b937a29ccca39b95361b4d87d4ceb5
