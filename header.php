<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 75%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            transition: transform 0.3s ease;
            transform: translateX(100%);
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
            transform: translateX(0);
        }
        .menu-button {
            margin-right: 20px;
        }
    </style>
</head>
<body <?php body_class(); ?>>
<header class="bg-gray-900 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="<?php echo home_url(); ?>" class="text-2xl font-bold">ByPat.com.au</a>
        <div class="flex-grow"></div>
        <div class="dropdown" style="margin-left: auto;">
            <button class="text-white menu-button">☰</button>
            <div class="dropdown-content">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex flex-col space-y-4',
                    'container' => false,
                ));
                ?>
            </div>
        </div>
    </div>
</header>
