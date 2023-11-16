<?php
/*
* Archivo de registro y carga de scripts y estilos
*
*
*
*
* @package cristina
* @subpackage cristina importaciones
* @since 1.0
*/

/*
* Registrando y cargando estilos
*/

function cristina_theme_styles(){


	// Registrar los estilos
	wp_register_style('fontawesome', THEMEROOT . '/css/font-awesome.min.css', '', '4.7.0', 'all');
	wp_register_style('cristina-styles', get_stylesheet_uri(), array('fontawesome'), '1.0', 'all');
	wp_register_style('bootstrap', THEMEROOT . '/css/bootstrap.min.css', '', '4.7.0', 'all');
	wp_register_style('elegant-icons', THEMEROOT . '/css/elegant-icons.css', '', '4.7.0', 'all');
	wp_register_style('nice-select', THEMEROOT . '/css/nice-select.css', '', '4.7.0', 'all');
    wp_register_style('jquery-u', THEMEROOT . '/css/jquery-ui.min.css', '', '4.7.0', 'all');
    wp_register_style('carousel', THEMEROOT . '/css/owl.carousel.min.css', '', '4.7.0', 'all');
    wp_register_style('slicknav', THEMEROOT . '/css/slicknav.min.css', '', '4.7.0', 'all');
	


	// Cargar estilos
	wp_enqueue_style('cristina-styles');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('elegant-icons');
	wp_enqueue_style('nice-select');
	wp_enqueue_style('jquery-u');
	wp_enqueue_style('carousel');
	wp_enqueue_style('slicknav');


}
add_action('wp_enqueue_scripts', 'cristina_theme_styles');


/*
* Registrando y cargando scripts
*/

function cristina_theme_scripts(){
    

	// Registrar scripts
	
	wp_register_script('bootstrap', THEMEROOT . '/js/bootstrap.min.js',array('jquery'), true);
	wp_register_script('owl.carousel', THEMEROOT . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
	wp_register_script('bootstrap', THEMEROOT . '/js/bootstrap.min.js', array('jquery'), '4.4.1', true);
	wp_register_script('jquery.nice', THEMEROOT . '/js/jquery.nice-select.min.js',array('jquery'), '1.0', true);
	wp_register_script('jquery.slicknav', THEMEROOT . '/js/jquery.slicknav.js', array('jquery'),'1.0', true);
	wp_register_script('mixitup.min', THEMEROOT . '/js/mixitup.min.js',array('jquery'), '3.3.1', true);
	wp_register_script('jquery-ui', THEMEROOT . '/js/jquery-ui.min.js',array('jquery'), '3.3.1', true);
	

	// Cargar scripts
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('owl.carousel');
	wp_enqueue_script('jquery.nice');
	wp_enqueue_script('jquery.slicknavs');
	wp_enqueue_script('mixitup.min');
	wp_enqueue_script('jquery-ui');

}
add_action('wp_enqueue_scripts', 'cristina_theme_scripts');