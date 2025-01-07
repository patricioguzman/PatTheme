<?php get_header(); ?>

<!-- Contenedor de carga con efecto Matrix -->
<div id="loading" class="fixed top-0 left-0 w-full h-full bg-black flex items-center justify-center z-50">
    <canvas id="matrixCanvas" class="absolute top-0 left-0 w-full h-full"></canvas>
</div>

<!-- Contenido principal -->
<div id="main-content">
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
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Hi, I’m Pat</h1>
            <p id="dynamic-role" class="text-xl md:text-2xl font-light">Loading...</p>
            <a href="https://calendar.google.com/calendar/u/0/appointments/AcZssZ2CUI1w3KR1fj23HGfkEklPPagJ5ySlYm_ocOM=" class="mt-4 px-6 py-2 bg-green-500 text-white rounded hover:bg-green-700">
            <button class="mt-4 px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
            Schedule Appointment
            </button>    
            
            </a>
            
        </div>
    </section>
</div>

<?php get_footer(); ?>
