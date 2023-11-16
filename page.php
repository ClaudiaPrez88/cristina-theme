<?php
get_header(); // Incluye el encabezado del tema
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        
   

        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', 'page');

            // Si deseas mostrar los comentarios, puedes usar la siguiente línea:
            // if (comments_open() || get_comments_number()) :
            //    comments_template();
            // endif;

        endwhile;
        ?>
        
        <?php the_content(); ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar(); // Incluye la barra lateral del tema
get_footer(); // Incluye el pie de página del tema
?>
