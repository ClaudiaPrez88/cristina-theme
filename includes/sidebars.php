<?php

/*Registro de sidebars*/

function cristina_sidebars(){
    register_sidebar(array(
        'name'          => __( 'blog', 'cristina' ),
    	'id'            => 'main-blog',
    	'description'   => __( 'Widget de blog', 'cristina' ),
            'class'         => '',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widget-title">',
    	'after_title'   => '</h2>'
        ));
        
        register_sidebar(array(
        'name'          => __( 'sidebar-footer-izq', 'cristina' ),
    	'id'            => 'sidebar-footer-izq',
    	'description'   => __( 'Widget de blog', 'cristina' ),
            'class'         => '',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widget-title">',
    	'after_title'   => '</h2>'
        ));
        
        register_sidebar(array(
        'name'          => __( 'sidebar-footer-cent', 'cristina' ),
    	'id'            => 'sidebar-footer-cent',
    	'description'   => __( 'Widget de blog', 'cristina' ),
            'class'         => '',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widget-title">',
    	'after_title'   => '</h2>'
        ));
        
         register_sidebar(array(
        'name'          => __( 'sidebar-footer-der', 'cristina' ),
    	'id'            => 'sidebar-footer-der',
    	'description'   => __( 'Widget de blog', 'cristina' ),
            'class'         => '',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widget-title">',
    	'after_title'   => '</h2>'
        ));
    
}
add_action('widgets_init','cristina_sidebars');