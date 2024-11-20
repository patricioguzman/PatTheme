<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="<?php echo home_url(); ?>" class="text-xl font-bold">ByPat</a>
        <button id="menu-toggle" class="block lg:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <nav id="menu" class="hidden lg:flex space-x-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'flex space-x-4',
                'container' => false,
            ));
            ?>
        </nav>
    </div>
</header>
