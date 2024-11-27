<?php
require_once get_template_directory() . '/inc/tgm-plugin-activation/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'pattheme_register_required_plugins');

function pattheme_register_required_plugins() {
    $plugins = [
        [
            'name'      => 'PHP Intelephense',
            'slug'      => 'php-intelephense',
            'required'  => false,
        ],
        [
            'name'      => 'WordPress Snippets',
            'slug'      => 'wordpress-snippets',
            'required'  => false,
        ],
        [
            'name'      => 'Prettier',
            'slug'      => 'prettier',
            'required'  => false,
        ],
        [
            'name'      => 'GitLens',
            'slug'      => 'gitlens',
            'required'  => false,
        ]
    ];

    $config = [
        'id'           => 'pattheme',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => false,
    ];

    tgmpa($plugins, $config);
}
