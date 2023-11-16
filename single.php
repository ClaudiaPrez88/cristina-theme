<?php get_header(); ?>

<section class="main">
    <section class="page-content page-content--single">
         <!-- Blog Details Hero Begin -->
            <section class="blog-details-hero set-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__details__hero__text">
                                <div class="post-title-container">
                                            
                                            <h1 class="post-title"><?php the_title(); ?></h1>
                                           
                                        </div>
                                <ul>
                                    <li><span class="post-date"><?php the_category(', '); ?></span></li>
                                    <li class="post-date"><?php the_time( get_option('date_format') ); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Details Hero End -->
            
        <div class="container">
             <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="main-content">
                        <?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
                        
                         

                            <div class="row">
                                <div class="col post-col">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                                        <div class="post-title-container">
                                            
                                        </div>
                                        <?php if ( has_post_thumbnail() ): ?>
                                            <div class="post-thumbnail">
                                                <?php the_post_thumbnail('blog_size_image'); ?>
                                            </div>
                                        <?php endif ?>
                                        <div class="post-content">
                                            <div class="post-excerpt">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                           
                            
                        <?php endwhile; endif; ?>

                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>