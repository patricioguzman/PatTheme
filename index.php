<?php get_header(); ?>

<!-- Contenedor de carga con efecto Matrix -->
<div id="loading" class="fixed top-0 left-0 w-full h-full bg-black flex items-center justify-center z-50">
    <canvas id="matrixCanvas" class="absolute top-0 left-0 w-full h-full"></canvas>
</div>

<!-- Contenido principal -->
<div id="main-content" class="flex flex-col" style="height: 70vh;">
    <section class="flex-1 flex items-center justify-center text-center text-white">
        <!-- Video de fondo -->
        <video
            class="absolute top-0 left-0 w-full h-full object-cover"
            autoplay
            muted
            loop
            playsinline
            poster="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/screenshot.png"
        >
            <source src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/video/bypat.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <!-- Contenido del Hero -->
        <div id="post-<?php the_ID(); ?>" <?php post_class('relative z-10'); ?>>
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Hi, I’m Pat</h1>
            <p id="dynamic-role" class="text-xl md:text-2xl font-light">Loading...</p>
            <a href="https://calendar.google.com/calendar/u/0/appointments/AcZssZ2CUI1w3KR1fj23HGfkEklPPagJ5ySlYm_ocOM=" class="mt-4 px-6 py-2 bg-black text-white rounded hover:bg-gray-800">
                Schedule Appointment
            </a>
        </div>
    </section>
    <?php
    // Ensure wp_link_pages is included for paginated posts
    wp_link_pages(array(
        'before' => '<div class="page-links">' . __('Pages:', 'bypat'),
        'after'  => '</div>',
    ));
    ?>
</div>

<?php get_footer(); ?>
