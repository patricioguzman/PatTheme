<?php
function bypat_theme_setup() {
    add_theme_support('menus');
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
}
add_action('after_setup_theme', 'bypat_theme_setup');

function bypat_enqueue_scripts() {
    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    wp_enqueue_script(
        'matrix-script',
        get_template_directory_uri() . '/assets/js/matrix.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/matrix.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'bypat_enqueue_scripts');
