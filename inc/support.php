<?php
    add_theme_support( 'post-thumbnails' );

    //Logo
    function wpfestival_custom_logo() {
        add_theme_support( 'custom-logo', array(
            'height' => 126,
            'width' => 272,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ));
    }
    add_action( 'after_setup_theme', 'wpfestival_custom_logo' );

    //HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    //Title Tag
    add_theme_support( 'title-tag' );

    // add_image_size( 'wpfestival-300x300', 300, 300, true );
?>