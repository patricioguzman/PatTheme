<?php
require_once get_template_directory() . '/inc/register-plugins.php';
if (defined('WP_ENVIRONMENT_TYPE') && WP_ENVIRONMENT_TYPE === 'local') {
    add_filter('https_ssl_verify', '__return_false');
}

// === CONFIGURACIÓN DEL TEMA === //
function bypat_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bypat'),
        'footer' => __('Footer Menu', 'bypat'),
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('custom-line-height');
    add_theme_support('custom-spacing');
    add_theme_support('automatic-feed-links'); // Add support for automatic feed links
    add_theme_support('responsive-embeds'); // Add support for responsive embeds
    add_theme_support('custom-header'); // Add support for custom header
    add_theme_support('custom-background'); // Add support for custom background
}
add_action('after_setup_theme', 'bypat_theme_setup');

// === Cargar Estilos y Scripts === //
function bypat_enqueue_assets() {
    // 1. Estilos
    // Estilos de Tailwind (local)
    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/dist/style.css',
        array(), // Sin dependencias
        filemtime(get_template_directory() . '/dist/style.css') // Forzar recarga con la versión del archivo
    );

    // Estilos del tema principal
    wp_enqueue_style(
        'bypat-style',
        get_stylesheet_uri(),
        array('tailwind-style'), // Dependencia: Tailwind debe cargarse primero
        wp_get_theme()->get('Version') // Usa la versión del tema
    );

    // Font Awesome (local)
    wp_enqueue_style(
        'font-awesome',
        get_template_directory_uri() . '/assets/css/fontawesome.min.css',
        array(), // Sin dependencias
        '6.0.0-beta3' // Versión de la librería
    );

    // Font Awesome All (local)
    wp_enqueue_style(
        'font-awesome-all',
        get_template_directory_uri() . '/assets/css/all.min.css',
        array('font-awesome'), // Dependencia: Font Awesome debe cargarse primero
        '6.0.0-beta3' // Versión de la librería
    );

    // 2. Scripts
    // Asegurar que jQuery esté disponible
    wp_enqueue_script('jquery'); 

    // Script personalizado del tema (local)
    wp_enqueue_script(
        'custom-script',
        get_template_directory_uri() . '/assets/js/custom.js',
        array('jquery'), // Dependencia de jQuery
        filemtime(get_template_directory() . '/assets/js/custom.js'), // Forzar recarga
        true // Cargar en el footer
    );

    // GSAP (local)
    wp_enqueue_script(
        'gsap',
        get_template_directory_uri() . '/assets/js/gsap.min.js',
        array(), // Sin dependencias
        '3.12.2', // Versión de la librería
        true // Cargar en el footer
    );
}
add_action('wp_enqueue_scripts', 'bypat_enqueue_assets');

// === CONFIGURACIÓN DE PÁGINAS Y BLOQUES === //
function bypat_after_theme_activation() {
    // Crear Header
    $header_id = wp_insert_post(array(
        'post_title'    => 'Header',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'wp_block',
    ));

    // Crear Hero Section
    $hero_id = wp_insert_post(array(
        'post_title'    => 'Hero Section',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'wp_block',
    ));

    // Crear Footer
    $footer_id = wp_insert_post(array(
        'post_title'    => 'Footer',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'wp_block',
    ));

    // Crear Página de Blog
    $blog_page_id = wp_insert_post(array(
        'post_title'    => 'Blog',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
    ));

    // Crear Página de Tienda (WooCommerce)
    $shop_page_id = wp_insert_post(array(
        'post_title'    => 'Tienda',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
    ));

    // Set Blog and Shop Pages
    update_option('page_for_posts', $blog_page_id);
    update_option('woocommerce_shop_page_id', $shop_page_id);
}
add_action('after_switch_theme', 'bypat_after_theme_activation');

// === CAMPOS PERSONALIZABLES CON ACF === //
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_hero_section',
        'title' => 'Hero Section Settings',
        'fields' => array(
            array(
                'key' => 'field_hero_video_url',
                'label' => 'Hero Video URL',
                'name' => 'hero_video_url',
                'type' => 'url',
                'instructions' => 'Agrega la URL del video para la sección hero.',
                'default_value' => '',
                'placeholder' => 'https://',
            ),
            // Otros campos personalizables para la sección Hero
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
    ));
}

// === RECOMENDACIÓN DE PLUGINS === //
function bypat_register_recommended_plugins() {
    $plugins = array(
        array(
            'name'      => 'Advanced Custom Fields',
            'slug'      => 'advanced-custom-fields',
            'required'  => true,
        ),
        array(
            'name'      => 'WooCommerce',
            'slug'      => 'woocommerce',
            'required'  => true,
        ),
        // Añadir otros plugins necesarios aquí
    );

    $config = array(
        'id'           => 'bypat',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
    );

    tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'bypat_register_recommended_plugins' );

// Remove WordPress Admin Bar
add_filter('show_admin_bar', '__return_false');
