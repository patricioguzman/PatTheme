<section class="relative h-screen flex items-center justify-center text-center text-white">
    <!-- Video de fondo -->
    <video
        class="absolute top-0 left-0 w-full h-full object-cover"
        autoplay
        muted
        loop
        playsinline
        poster="<?php echo get_template_directory_uri(); ?>screenshot.png"
    >
        <source src="<?php echo get_template_directory_uri(); ?>/matrixpat.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>

    <!-- Contenido del Hero -->
    <div class="relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Hey, I Am Pat</h1>
        <p id="dynamic-role" class="text-xl md:text-2xl font-light">Loading...</p>
        <button class="mt-4 px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
            Register
        </button>
    </div>
</section>

<video
    class="absolute top-0 left-0 w-full h-full object-cover"
    autoplay
    muted
    loop
    playsinline
    
>
    <source src="<?php echo get_template_directory_uri(); ?>/matrixpat.mp4" type="video/mp4">
    Tu navegador no soporta videos HTML5.
</video>
