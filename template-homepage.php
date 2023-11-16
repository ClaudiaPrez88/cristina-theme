<?php 
/**
* Template name: Pagina de inicio
*
* Plantilla de pagina de inicio
*
* Plantilla para mostrar la pagina de inicio
* 
* @package Cristina
* @subpackage Cristina Importaciones
* @since 1.0
*/
 ?>

<?php get_header(); ?>

   <?php 

    $options = get_theme_mod('cristina_settings');
    
     // Titulo seccion banners
        if ( ! empty($options['banners_section_title']) ) {
            $banners_section_title = $options['banners_section_title'];
        }

        if ( isset( $options['show_banners_section'] ) ) {
            $show_banners_section = $options['show_banners_section'];
        } else{
            $show_banners_section = false;
        }
        
        // Titulo seccion banners2
        if ( ! empty($options['banners_section_title2']) ) {
            $banners_section_title2 = $options['banners_section_title2'];
        }

        if ( isset( $options['show_banners_section2'] ) ) {
            $show_banners_section2 = $options['show_banners_section2'];
        } else{
            $show_banners_section2 = false;
        }


        // Titulo seccion ultimos articulos
        if ( ! empty($options['last_posts_section_title']) ) {
            $last_posts_section_title = $options['last_posts_section_title'];
        }

        if ( isset( $options['show_last_posts_section'] ) ) {
            $show_last_posts_section = $options['show_last_posts_section'];
        } else{
            $show_last_posts_section = false;
        }
       
    
    ?>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                  <?php get_hero(); ?> 
                </div>
                <div class="col-lg-9">
                    
                    <div class="hero__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/banner7.png">
                        <div class="hero__text">
                            <span>CONOCE</span>
                            <h2>Las pinturas</h2>
                            <img src="https://claudialatam.com/cristina/wp-content/uploads/2023/11/eterna.png" style="width:200px;height:auto">
                            <br>
                            <a href="#" class="primary-btn">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
     

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-12">
                    <div class="section-title">
                        <h2>Categorias</h2>
                    </div>-->
                </div>
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/tonalizadores-eterna.png">
                            <h5><a href="#">Tonalizadores</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/texturas-eterna.png">
                            <h5><a href="#">Texturas</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/pintura-sublimacion-eterna.png">
                            <h5><a href="#">Sublimación</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/plastika.png">
                            <h5><a href="#">Plastika</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/dimensional-eterna.png">
                            <h5><a href="#">Dimensionales</a></h5>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/laca-vitral-eterna.png">
                            <h5><a href="#">Laca Vitral</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/laminas.png">
                            <h5><a href="#">Laminas de seda</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/eterna-1.png">
                            <h5><a href="#">Pinturas Eterna</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/manualidades-cristina-importaciones.png">
                            <h5><a href="#">Manualidades</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/pinceles-cristina-importaciones.png">
                            <h5><a href="#">Pinceles</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/pintura-tela-eterna.png">
                            <h5><a href="#">Pinturas de tela</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="https://claudialatam.com/cristina/wp-content/uploads/2023/11/pintura-chalk-paint-tiza-eterna.png">
                            <h5><a href="#">Pinturas ChalkPaint</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    
   <!-- Ver sección de Galeria -->
    
        <?php get_galeria(); ?>
     
    <!-- End sección de Ranking -->  
    
   
    <!-- Banner Begin -->
     <?php if ( $show_banners_section == true ): ?>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo $banners_section_title; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo $banners_section_title2; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
     <?php endif ?>
                  

    <!-- Ver sección de Ranking -->
    
        <?php get_ranking(); ?>
     
    <!-- End sección de Ranking -->  
    

    <!-- Blog Section Begin -->
     <?php if ( $show_last_posts_section == true ): ?>
        <section class="from-blog spad">
        <div class="container">
            <section class="main">
                <section class="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 section-title">
                                 <?php if ( isset($last_posts_section_title) ): ?>
                                    <h2 class="">
                                        <?php echo $last_posts_section_title; ?>
                                    </h2>
                                <?php else: ?>
                                    <h2 class="">
                                    ÚLTIMOS ARTÍCULOS</h2>
                                <?php endif; ?>
                            </div>
                            <?php if (is_active_sidebar('main-sidebar')): ?>
                                <div class="col-md-9">
                                    <?php else: ?>
                                        <div class="col-md-12">
                                    <?php endif; ?>
                                        <div class="main-content">
                                            <div class="row">
                                                <?php
                                                    // WP_Query argumentos para obtener todos los posts
                                                    $args = array(
                                                        'post_type' => 'post', // Tipo de post (puede ser 'post', 'page', 'custom-post-type', etc.)
                                                        'posts_per_page' => 3, // -1 para obtener todos los posts
                                                    );
                                                    
                                                    // La consulta
                                                    $the_query = new WP_Query($args);
                                                    
                                                    // El bucle de WordPress
                                                    if ($the_query->have_posts()) :
                                                        while ($the_query->have_posts()) : $the_query->the_post();
                                                    ?>
                                                    
                                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                                <div <?php post_class('blog__item'); ?> id="post-<?php the_ID(); ?>">
                                                                    <?php if (has_post_thumbnail()) : ?>
                                                                        <div class="post-thumbnail">
                                                                            <?php the_post_thumbnail('blog_size_image'); ?>
                                                                        </div>
                                                                    <?php endif ?>
                                                    
                                                                    <div <?php post_class('blog__item__text'); ?>>
                                                                        <ul>
                                                                            <li><i class="fa fa-calendar-o"></i> <?php the_date(); ?></li>
                                                                            <li><i class="fa fa-comment-o"></i> <?php comments_number('0', '1', '%'); ?></li>
                                                                        </ul>
                                                                        <div <?php post_class('post-content'); ?>>
                                                                            <h5><?php the_title(); ?></h5>
                                                                            <div>
                                                                                <?php the_excerpt(); ?>
                                                                            </div>
                                                                            <a href="<?php the_permalink(); ?>" <?php post_class('primary-btn'); ?>><?php _e('VER MÁS', 'cristina'); ?></a>
                                                                        </div>
                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        <?php
                                                        endwhile;
                                                        wp_reset_postdata(); // Restablecer datos de la consulta
                                                    endif;
                                                    ?>
                                                
                                                
                                            </div>
                    
                                            
                                        
                                        
                                        </div>
                                    </div>
                                   
                                </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </section>
     <?php endif ?>
    <!-- Blog Section End -->
    
    
                                
                            
            
    

   <?php get_footer(); ?>