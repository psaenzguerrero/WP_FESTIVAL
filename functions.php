<?php 

    //Enqueue Scripts and Styles
    require get_template_directory() . '/inc/enqueue.php';

    //Admin-Page Option ACF PRO
    require get_template_directory() . '/inc/admin.php';

    //Support theme
    require get_template_directory() . '/inc/support.php';

    //Disable Gutenberg
    require get_template_directory() . '/inc/gutenberg.php';

    add_theme_support( 'post-thumbnails' );

?>