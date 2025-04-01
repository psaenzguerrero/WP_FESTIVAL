<?php get_header(); ?>
    <main class="main">

            <?php 
                $presentacionboll = get_field('page_options_presentacion_mostrar_seccion', 'option'); 
                if($presentacionboll == 1) {
            ?>
                        <section class="presentations section sectionBorder " 
                            <?php if ( get_field('page_options_presentaciones_fondo', 'option') ) : ?>
                                style="background-image: url('<?php echo get_field('page_options_presentaciones_fondo','option'); ?>');"
                            <?php endif; ?>
                        >
                            <article class="container">
                                <?php if ( get_field('page_options_presentaciones_titulo', 'option') ) : ?>
                                    <h2 class="title"><?php echo get_field('page_options_presentaciones_titulo', 'option'); ?></h2>
                                <?php endif; ?>
                                
                                <?php if ( get_field('page_options_presentaciones_descripcion', 'option') ) : ?>
                                    <p><?php echo get_field('page_options_presentaciones_descripcion', 'option'); ?></p>
                                <?php endif; ?>

                                <div class="row presentations__details mt-5">
                                    <div class="presentations__details--title col col-md-2">Hora</div>
                                    <div class="presentations__details--title col col-md-2">DJs</div>
                                    <div class="presentations__details--title col col-md-3 d-none"></div>
                                    <div class="presentations__details--title col col-md-2 d-none">Escenario</div>
                                    <div class="presentations__details--title col col-md-3">Ticket</div>
                                </div>
                                
                                <?php 
                                    $args = array( 'post_type' => 'presentaciones', 'posts_per_page' => 5); 
                                    $the_query = new WP_Query( $args );
                                    
                                    if ( $the_query->have_posts() ) {
                                        while ( $the_query->have_posts() ) {
                                            $the_query->the_post(); 
                                            ?>
                                            <div class="row presentations__details mt-3 align-items-center">
                                                <div class="col col-md-2 presentations__details--information">
                                                   <?php if ( get_field('presentaciones_hora') ) : ?>
                                                    <?php echo get_field('presentaciones_hora'); ?>
                                                    <?php else : echo 'Pendiente';?>
                                                   <?php endif; ?>
                                                   
                                                </div>
                                                <div class="col col-md-2 presentations__details--information"><?php the_title(); ?></div>
                                                <div class="col col-md-3 presentations__details--information d-none d-lg-block">

                                                    <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-5.jpg" alt="" class="img-fluid"> -->
                                                    <?php
                                                    if (has_post_thumbnail()) {
                                                        the_post_thumbnail('full', array('class' => 'img-fluid'));
                                                    } else {
                                                    ?>
                                                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/icon_instagram.png" alt="Logo Default" width="130px" height="144px">
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col col-md-2 presentations__details--information d-none d-lg-block">
                                                <?php if ( get_field('presentaciones_escenario') ) : ?>
                                                    <?php echo get_field('presentaciones_escenario'); ?>
                                                    <?php else : echo 'Pendiente';?>
                                                   <?php endif; ?>
                                                </div>
                                                <div class="col col-md-3 presentations__details--information d-flex">
                                                    <a target="_blank" href="

                                                    <?php if ( get_field('presentaciones_link_detalles') ) : ?>
                                                        <?php echo get_field('presentaciones_link_detalles'); ?>
                                                        <?php else : echo '#';?>
                                                    <?php endif; ?>
                                                    
                                                    " class="btn btn-primary d-none d-lg-block">Detalles</a>
                                                    <a target="_blank" href="
                                                    
                                                    <?php if ( get_field('presentaciones_link_tickets') ) : ?>
                                                        <?php echo get_field('presentaciones_link_tickets'); ?>
                                                        <?php else : echo '#';?>
                                                    <?php endif; ?>
                                                    
                                                    " class="btn btn-primary">Tickets</a>
                                                </div>
                                            </div>
                                            <?php
                                        }        
                                        wp_reset_postdata();
                                    }else{
                                        
                                    }
                                
                                ?>
                                <!-- <div class="row presentations__details mt-3 align-items-center">
                                    <div class="col col-md-2 presentations__details--information">22:00</div>
                                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-5.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                                    <div class="col col-md-3 presentations__details--information d-flex">
                                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                                        <a href="#" class="btn btn-primary">Tickets</a>
                                    </div>
                                </div> -->
                                <!-- <div class="row presentations__details mt-3 align-items-center">
                                    <div class="col col-md-2 presentations__details--information">22:00</div>
                                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-6.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                                    <div class="col col-md-3 presentations__details--information d-flex">
                                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                                        <a href="#" class="btn btn-primary">Tickets</a>
                                    </div>
                                </div>
                                <div class="row presentations__details mt-3 align-items-center">
                                    <div class="col col-md-2 presentations__details--information">22:00</div>
                                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                                    <div class="col col-md-3 presentations__details--information d-flex">
                                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                                        <a href="#" class="btn btn-primary">Tickets</a>
                                    </div>
                                </div>
                                <div class="row presentations__details mt-3 align-items-center">
                                    <div class="col col-md-2 presentations__details--information">22:00</div>
                                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj1.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                                    <div class="col col-md-3 presentations__details--information d-flex">
                                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                                        <a href="#" class="btn btn-primary">Tickets</a>
                                    </div>
                                </div>
                                <div class="row presentations__details mt-3 align-items-center">
                                    <div class="col col-md-2 presentations__details--information">22:00</div>
                                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                                    <div class="col col-md-3 presentations__details--information d-flex">
                                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                                        <a href="#" class="btn btn-primary">Tickets</a>
                                    </div>
                                </div> -->

                                <div class="row mt-5 d-flex justify-content-center ">
                                    <a href="#" class="btn btn-primary botonV">Ver Todos</a>
                                </div>
                            </article>
                        </section>
            <?php
                }
            ?>

            <?php
            
                $estadisticas = get_field('page_options_estadisticas_mostrar_seccion', 'option');

                if ($estadisticas == 1) {
            ?>

                <section class="numberEvents d-none d-lg-block">
                    <div class="container">
                        <div class="row flex-row  justify-content-around align-items-center text-center">

                    <?php
                        if ( have_rows('page_options_estadisticas_item', 'option') ) :

                            while ( have_rows('page_options_estadisticas_item', 'option') ) : the_row();
                    ?>

                            <div class="numberEvents__item">
                                <?php if ( get_sub_field('page_options_estadistica_img', 'option') ) : ?>
                                    <img src="<?php echo get_sub_field('page_options_estadistica_img', 'option'); ?>" alt="">                                   
                                <?php endif; ?>
                                


                                <?php if ( get_sub_field('page_options_estadistica_valor', 'option') ) : ?>
                                    <h6><?php the_sub_field('page_options_estadistica_valor', 'option'); ?></h6>
                                <?php endif; ?>
                                
                                <?php if ( get_sub_field('page_options_estadistica_titulo', 'option') ) : ?>
                                    <h5><?php the_sub_field('page_options_estadistica_titulo', 'option'); ?></h5>
                                <?php endif; ?>
                                
                                
                            </div>

                    <?php
                            endwhile;

                        endif;
                    ?>


                        </div>
                </section>

            <?php
                }
            ?>

            <?php
                $djs = get_field('page_options_djs_mostrar_seccion', 'option');

                if ($djs == 1) {
            ?>
                <section class="djs  sectionBorder--top sectionBorder--bottom">
                    <article class="container">
                        <div class="row">
                            <div class="col-md-9 pl-0 order-1 order-md-0">
                                <ul class="list-unstyled djs__gallery">

                                    <?php
                                        $args = array( 'post_type' => 'djs');
                                        $the_query = new WP_Query( $args );

                                        if ( $the_query->have_posts() ) {

                                            while ( $the_query->have_posts() ) {
                                                $the_query->the_post();
                                    ?>

                                                <li>
                                                    <figure>
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid ']); ?>
                                                    <?php endif; ?>
                                                        
                                                        <figcaption>
                                                            <h5 class="djs__name"><?php the_title(); ?></h5>
                                                            <?php if ( get_field('djs_genero') ) : ?>
                                                                <h6 class="djs__type"> <?php echo get_field('djs_genero'); ?></h6>
                                                            <?php endif; ?>
                                                            
                                                            
                                                        </figcaption>
                                                    </figure>
                                                </li>

                                    <?php
                                            }
                                            wp_reset_postdata();
                                        }else{
                                            echo 'No hay djs';
                                        }
                                    ?>

                                    
                                    
                                </ul>
                            </div>
                            <div class="col-md-3 text-center text-md-end order-0 djs__information">
                                <?php if ( get_field('page_options_djs_titulo', 'option') ) : ?>
                                    <h2 class="title title--black"><?php echo get_field('page_options_djs_titulo', 'option'); ?></h2>
                                <?php endif; ?>
                                <?php if ( get_field('page_options_djs_descripcion', 'option') ) : ?>
                                    <p><?php echo get_field('page_options_djs_descripcion', 'option'); ?></p>
                                <?php endif; ?>
                                
                                <!-- <p>Ellos son el verdadero foco de atención de nuestro evento</p> -->
                                <ul class="list-unstyled d-flex justify-content-center justify-content-md-end">
                                    <li class="mr-2">
                                        <a href="javascript:void(0)" class="JS-slick-prev"><img src="<?php bloginfo('template_directory'); ?>/assets/img/flechaZ.png" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="JS-slick-next"><img src="<?php bloginfo('template_directory'); ?>/assets/img/flechaD.png" alt=""></a>
                                    </li>
                                </ul>
                                <a href="<?php echo esc_url(home_url('/')); ?>djs.html" class="btn btn-primary d-none d-md-inline-block btn-lg mt-5">Ver Todos </a>
                            </div>
                        </div>
                    </article>
                </section>

            <?php
                }
            ?>
        
        <!-- <section class="presentations section sectionBorder " 
            <?php if ( get_field('page_options_presentaciones_fondo', 'option') ) : ?>
                style="background-image: url('<?php echo get_field('page_options_presentaciones_fondo','option'); ?>');"
            <?php endif; ?>
        >
            <article class="container">
                <?php if ( get_field('page_options_presentaciones_titulo', 'option') ) : ?>
                    <h2 class="title"><?php echo get_field('page_options_presentaciones_titulo', 'option'); ?></h2>
                <?php endif; ?>
                
                <?php if ( get_field('page_options_presentaciones_descripcion', 'option') ) : ?>
                    <p><?php echo get_field('page_options_presentaciones_descripcion', 'option'); ?></p>
                <?php endif; ?>

                <div class="row presentations__details mt-5">
                    <div class="presentations__details--title col col-md-2">Hora</div>
                    <div class="presentations__details--title col col-md-2">DJs</div>
                    <div class="presentations__details--title col col-md-3 d-none"></div>
                    <div class="presentations__details--title col col-md-2 d-none">Escenario</div>
                    <div class="presentations__details--title col col-md-3">Ticket</div>
                </div>
                <div class="row presentations__details mt-3 align-items-center">
                    <div class="col col-md-2 presentations__details--information">22:00</div>
                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-5.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                    <div class="col col-md-3 presentations__details--information d-flex">
                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                        <a href="#" class="btn btn-primary">Tickets</a>
                    </div>
                </div>
                <div class="row presentations__details mt-3 align-items-center">
                    <div class="col col-md-2 presentations__details--information">22:00</div>
                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-6.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                    <div class="col col-md-3 presentations__details--information d-flex">
                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                        <a href="#" class="btn btn-primary">Tickets</a>
                    </div>
                </div>
                <div class="row presentations__details mt-3 align-items-center">
                    <div class="col col-md-2 presentations__details--information">22:00</div>
                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                    <div class="col col-md-3 presentations__details--information d-flex">
                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                        <a href="#" class="btn btn-primary">Tickets</a>
                    </div>
                </div>
                <div class="row presentations__details mt-3 align-items-center">
                    <div class="col col-md-2 presentations__details--information">22:00</div>
                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj1.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                    <div class="col col-md-3 presentations__details--information d-flex">
                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                        <a href="#" class="btn btn-primary">Tickets</a>
                    </div>
                </div>
                <div class="row presentations__details mt-3 align-items-center">
                    <div class="col col-md-2 presentations__details--information">22:00</div>
                    <div class="col col-md-2 presentations__details--information">DJ Monza</div>
                    <div class="col col-md-3 presentations__details--information d-none d-lg-block">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-3.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col col-md-2 presentations__details--information d-none d-lg-block">Principal</div>
                    <div class="col col-md-3 presentations__details--information d-flex">
                        <a href="#" class="btn btn-primary d-none d-lg-block">Detalles</a>
                        <a href="#" class="btn btn-primary">Tickets</a>
                    </div>
                </div>
                <div class="row mt-5 d-flex justify-content-center ">
                    <a href="#" class="btn btn-primary botonV">Ver Todos</a>
                </div>
            </article>
        </section> -->
        <!-- <section class="numberEvents d-none d-lg-block">
            <div class="container">
                <div class="row flex-row  justify-content-around align-items-center text-center">
                    <div class="numberEvents__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/lights.png" alt="">
                        <h6>2000</h6>
                        <h5>Luces Increibles</h5>
                    </div>
                    <div class="numberEvents__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/djs.png" alt="">
                        <h6>12</h6>
                        <h5>Djs Top Mundial</h5>
                    </div>
                    <div class="numberEvents__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/musica.png" alt="">
                        <h6>1000</h6>
                        <h5>Horas de Música</h5>
                    </div>
                    <div class="numberEvents__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/people.png" alt="">
                        <h6>10000</h6>
                        <h5>Asistentes</h5>
                    </div>
                </div>
        </section> -->
        <!-- <section class="djs  sectionBorder--top sectionBorder--bottom">
            <article class="container">
                <div class="row">
                    <div class="col-md-9 pl-0 order-1 order-md-0">
                        <ul class="list-unstyled djs__gallery">
                            <li>
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-5.jpg" class="img-fluid" alt="">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro Hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-6.jpg" class="img-fluid" alt="">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro Hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-2.jpg" class="img-fluid" alt="">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro Hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj1.jpeg" class="img-fluid" alt="">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro Hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj1.jpeg" class="img-fluid" alt="">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro Hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-3.jpg" class="img-fluid" alt="">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro Hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj1.jpeg" class="img-fluid" alt="">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro Hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/dj1.jpeg" class="img-fluid" alt="">
                                    <figcaption>
                                        <h5 class="djs__name">DJ Alexio</h5>
                                        <h6 class="djs__type">Electro Hop</h6>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-center text-md-end order-0 order-md-1 djs__information">
                        <h2 class="title title--black">
                            djs
                        </h2>
                        <p>Ellos son el verdadero foco de atención de nuestro evento</p>
                        <ul class="list-unstyled d-flex justify-content-center justify-content-md-end">
                            <li class="mr-2">
                                <a href="javascript:void(0)" class="JS-slick-prev"><img src="<?php bloginfo('template_directory'); ?>/assets/img/flechaZ.png" alt=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="JS-slick-next"><img src="<?php bloginfo('template_directory'); ?>/assets/img/flechaD.png" alt=""></a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary d-none d-md-inline-block btn-lg mt-5">Ver Todos </a>
                    </div>
                </div>
            </article>
        </section> -->
        <section class="tickets">
            <article class="container">
                <h2 class="title">Tickets</h2>
                <p class="subtitle">Tenemos varias opciones para todos los gustos, consigue una que se adapte a ti.</p>
                <div class="row">
                    <div class="col tickets__price">
                        <ul class="list-unstyled d-flex justify-content-center tickets__value">
                            <li class="tickets__value--only"><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                        </ul>
                        <h4 class="text-uppercase text--red">bpm</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quia facere quas accusantium
                            architecto.</p>
                        <span class="tickets__number">40</span>
                        <ul class="list-unstyled list-square text-left">
                            <li>Escenario Principal</li>
                            <li>Camiseta - 1 Bebida</li>
                            <li>Acceso Zonas Comunes</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                    <div class="col tickets__price">
                        <ul class="list-unstyled d-flex justify-content-center tickets__value">
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                        </ul>
                        <h4 class="text-uppercase text--pink">echo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quia facere quas accusantium
                            architecto.</p>
                        <span class="tickets__number">40</span>
                        <ul class="list-unstyled list-square text-left">
                            <li>Escenario Principal</li>
                            <li>Camiseta - 1 Bebida</li>
                            <li>Acceso Zonas Comunes</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                    <div class="col tickets__price">
                        <ul class="list-unstyled d-flex justify-content-center tickets__value">
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/vip-pass 1.png" alt="l"></li>
                        </ul>
                        <h4 class="text-uppercase text--purple">loop</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quia facere quas accusantium
                            architecto.</p>
                        <span class="tickets__number">40</span>
                        <ul class="list-unstyled list-square text-left">
                            <li>Escenario Principal</li>
                            <li>Camiseta - 1 Bebida</li>
                            <li>Acceso Zonas Comunes</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </article>
        </section>
        <section class="sponsors">
            <article class="container">
                <h2 class="title text-md-end">Patrocinadores</h2>
                <div class="row">
                    <div class="col-md-10 order-1 order-md-0">
                        <div class="sponsors__gallery">
                            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsor_logo_01.png" alt="" class="img-fluid"></div>
                            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsor_logo_02.png" alt="" class="img-fluid"></div>
                            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsor_logo_03.png" alt="" class="img-fluid"></div>
                            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsor_logo_04.png" alt="" class="img-fluid"></div>
                            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsor_logo_05.png" alt="" class="img-fluid"></div>
                            <div><img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsor_logo_06.png" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <ul class="d-flex list-unstyled justify-content-center justify-content-md-end mb-4">
                            <li class="mr-2">
                                <a href="javascript:void(0);" class="JS-slickSponsor-prev">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/flechaZ.png" alt="" class=""></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="JS-slickSponsor-next">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/flechaD.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
            </article>
        </section>
        <section class="gallery sectionBorder--top sectionBorder--bottom">
            <header class="container ">
                <h2 class="title title--black">Galeria de imagenes</h2>
                <p>Fotografias evento del año anterior Medellín 2017</p>
            </header>
            <article class="container-fluid">
                <div class="row mt-5">
                    <div class="col-6 col-md-4 p-0">
                        <figure class="gallery__animation">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/Galeria6.png" class="img-fluid" alt="Brasil"> 
                            <figcaption>
                                <h4>Wp Festival Music</h4>
                                <h6>Headless·2017</h6>
                            </figcaption>
                        </figure>
                    </div> 
                    <div class="col-6 col-md-4 p-0">
                            <figure class="gallery__animation">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/fondoFueguitos.png" class="img-fluid" alt="Brasil"> 
                                <figcaption>
                                    <h4>Wp Festival Music</h4>
                                    <h6>Headless·2017</h6>
                                </figcaption>
                            </figure>
                    </div> 
                    <div class="col-6 col-md-4 p-0">

                            <figure class="gallery__animation">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/Galeria2.png" class="img-fluid" alt="Brasil"> 
                                <figcaption>
                                    <h4>Wp Festival Music</h4>
                                    <h6>Headless·2017</h6>
                                </figcaption>
                            </figure>

                    </div>
                    <div class="col-6 col-md-4 p-0">

                            <figure class="gallery__animation">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/fondoPres.png" class="img-fluid" alt="Brasil"> 
                                <figcaption>
                                    <h4>Wp Festival Music</h4>
                                    <h6>Headless·2017</h6>
                                </figcaption>
                            </figure>

                    </div>
                    <div class="col-6 col-md-4 p-0">

                            <figure class="gallery__animation">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/Galeria6.png" class="img-fluid" alt="Brasil"> 
                                <figcaption>
                                    <h4>Wp Festival Music</h4>
                                    <h6>Headless·2017</h6>
                                </figcaption>
                            </figure>

                    </div> 
                    <div class="col-6 col-md-4 p-0">

                            <figure class="gallery__animation">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/Galeria5.png" class="img-fluid" alt="Brasil"> 
                                <figcaption>
                                    <h4>Wp Festival Music</h4>
                                    <h6>Headless·2017</h6>
                                </figcaption>
                            </figure>
 
                    </div>
                </div>
        </section>
        <section class="news d-none d-md-block"> 
            <div class="container">
                <h2 class="title title--white title--small text-md-end">Noticias</h2>
                <div class="row">
                    <div class="col-6">
                        <article class="news__item">
                            <figure>
                                <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/img/fondoPres.png" alt="" class="img-fluid w-100"></a>
                                
                                <figcaption>
                                    <span>Categoria</span> - <span>Sep 5</span>
                                </figcaption>
                            </figure>
                            <a href="" ><h2 class="fs-1 lh-lg">Disponible la primera preventa</h2></a> 
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam explicabo optio dolorem voluptas a ab repellat magni ipsum itaque nam debitis, delectus totam aut dicta? Eaque cupiditate quasi et.</p>
                        </article>
                    </div>
                    <div class="col-5 offset-1 news__right">
                        <article class="news__item">
                            <figure>
                                <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/img/header.jpg" alt="" class="img-fluid"></a>
                                <figcaption>
                                    <span>Categoria</span> - <span>Sep 5</span>
                                </figcaption>
                            </figure>
                            <a href=""><h2>Disponible la primera preventa</h2></a>   
                        </article>
                        <article class="news__item">
                            <figure>
                                <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/img/dj-5.jpg" alt="" class="img-fluid"></a>  
                                <figcaption>
                                    <span>Categoria</span> - <span>Sep 5</span>
                                </figcaption>
                            </figure>
                            <a href=""><h2>Disponible la primera preventa</h2></a>
                        </article>
                    </div>
                </div>
            </div>    
        </section>
    </main>
<?php get_footer(); ?>
    