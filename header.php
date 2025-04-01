<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>   
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,700|Saira:300,400,500,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header" 
    <?php if ( get_field('page_option_imagen_principal', 'option') ) : ?>
        style="background-image: url('<?php echo get_field('page_option_imagen_principal', 'option'); ?>')"
    <?php endif; ?>
    >
        <div class="container pt-1 pt-md-4 header__top">
            <nav class="navbar navbar-expand-lg navbar-dark js-navbar">
                <a href="index.html" class="navbar-brand">
                    <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/logoWpFestival.png" alt="WP Music Festival" class="img-fluid"> -->
                     <?php 
                        if (function_exists('the_custom_logo')) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            if ($custom_logo_id) {            
                                $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                                echo '<img class="img-fluid" src="' . esc_url($custom_logo_url) . '" alt="Logo">';
                            }else{
                                ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/logoWpFestival.png" alt="logo default">
                                <?php
                            }

                            
                        }
                     ?>
                </a>
                <button class="navbar-toggler js-custom-toggler custom-toggler collapsed" type="button"
                    data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                    aria-expanded="false" aria-label="Toggle Navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end js-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center">
                        <a class="nav-item nav-link" href="wp-festival.html">Wp Festival</a>
                        <a class="nav-item nav-link" href="djs.html">DJS</a>
                        <a class="nav-item nav-link" href="presentaciones.html">Presentaciones</a>
                        <a class="nav-item nav-link" href="#">Contacto</a>
                        <a class="nav-item nav-link" href="blog.html">Blog</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container header__bottom pt-5">
            <ul class="list_inline d-flex header__meta">
                <?php if(get_field('page_options_fecha_del_evento', 'option')) :?>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/time 1.png" alt="Icon Date">
                        <span><?php echo the_field('page_options_fecha_del_evento', 'option'); ?></span>
                    </li>
                <?php endif; ?>
                <?php if(get_field('page_options_cantidad_djs', 'option')) :?>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/headphones 1.png" alt="Icon Headphones">
                        <span><?php echo the_field('page_options_cantidad_djs', 'option'); ?>DJS</span>
                    </li>
                <?php endif; ?>
                <?php if(get_field('page_options_entradas_disponibles', 'option')) :?>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/ticket 1.png" alt="Icon Map">
                        <span><?php echo the_field('page_options_entradas_disponibles', 'option'); ?>Entradas</span>
                    </li>
                <?php endif; ?>
                <!-- <li>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/ticket 1.png" alt="Icon Ticket">
                    <span>21 Sept 2018</span>
                </li> -->
            </ul>
            <div class="header__information">
                <?php if(get_field('page_options_titulo_evento', 'option')) :?>
                <h2 class="mb-4 mt-2">
                    <!-- <strong>WP</strong> Festival Music <strong>Bogotá</strong> 2018 -->
                    <?php echo the_field('page_options_titulo_evento', 'option'); ?>
                </h2>
                <?php endif; ?>
                <!-- <p>Bogotá <strong>MP Festival Music</strong> es un evento de música electrónica con DJs que están dentro
                    del <strong>Top 20</strong> en el mundo.</p> -->
                    <?php if(get_field('page_options_descripcion', 'option')) :?>
                        <p>  
                            <?php echo the_field('page_options_descripcion', 'option'); ?>
                        </p>
                    <?php endif; ?>
                <div class="header__btn">
                    <a href="<?php if(get_field('page_options_link_compra', 'option')) : echo the_field('page_options_link_compra', 'option'); endif; ?>" class="btn btn-primary">Comprar Tickets</a>
                </div>
            </div>
        </div>
    </header>