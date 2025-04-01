<?php 

    function wpfestival_add_theme_scripts() {

        // Parte de css de enlaces esxternos
        wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.3.3', 'all' );

        wp_enqueue_style( 'Fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome.min.css', array(), '6.7.2', 'all' );

        wp_enqueue_style( 'Slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all' );

        wp_enqueue_style( 'Slick Theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1', 'all' );
        
        wp_enqueue_style( 'Main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1.3', 'all' );

        // Parte de js de enlaces externos
        wp_enqueue_script( 'Popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), "2020", true );

        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), "5.3.3", true );

        wp_enqueue_script( 'Slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), "1.8.1", true );

        wp_enqueue_script( 'Main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), 1.1, true );

    }
    add_action( 'wp_enqueue_scripts', 'wpfestival_add_theme_scripts' );
?>