<?php
/*
* Cristina Importaciones funciones y definiciones
*
*
*
*
* @package Cristina
* @subpackage Cristina Importaciones
* @since 1.0
*/

define('THEMEROOT', get_stylesheet_directory_uri());

define('IMAGES', THEMEROOT . '/img');

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1400;

if ( ! function_exists('cristina_custom_theme_features') ) {

// Register Theme Features
function cristina_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => '#ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for Translation
	load_theme_textdomain( 'cristinaimportaciones', get_template_directory() . '/languages' );
	// Añadir tamaños de imagen personalizados
	add_image_size('blog_size_image', 400, 400, true);
}
add_action( 'after_setup_theme', 'cristina_custom_theme_features' );
}

/* Registrando y cargando hojas de estilo**/
require_once('includes/scripts-styles.php');

/*Registrando Sidebar**/
require_once('includes/sidebars.php');

/*Registrando Personalizador tema**/
require_once('includes/personalizador-tema.php');

/*Registrando MENU**/
require_once('includes/menus.php');

/*Registrando imagenes destacadas**/
// Habilitar la funcionalidad de imagen destacada
add_theme_support('post-thumbnails');

// Cambiar cantidad de palabras de extracto
function cristina_custom_the_excerpt($length){
	$length = 22;
	return $length;
}
add_filter('excerpt_length', 'cristina_custom_the_excerpt');

remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

function get_ranking() {
    get_template_part('ranking');
}

function get_galeria() {
    get_template_part('galeria');
}
function get_hero() {
    get_template_part('hero');
}


