<?php
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Configuración de WP Festival',
            'menu_title' => 'WP Festival',
            'menu_slug' => 'theme-wp-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ));
    }
?> 