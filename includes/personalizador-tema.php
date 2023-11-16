<?php
/*
* Añadiendo opciones al personalizador del tema
*
*
*
*
* @package cristina
* @subpackage cristina importaciones
* @since 1.0
*/

function cristina_customize_register($wp_customize){


	// Panel Encabezado
	$wp_customize->add_panel('cristina_header_panel', array(

		'title' => __('Encabezado', 'cristina'),
		'description' => __('Opciones del encabezado', 'cristina'),
		'priority' => 35

	));

	// Seccion encabezado superior
	$wp_customize->add_section('cristina_header_top', array(

		'title' => __('Encabezado superior', 'cristina'),
		'description' => __('Opciones del encabezado superior', 'cristina'),
		'priority' => 10,
		'panel' => 'cristina_header_panel'

	));

	// Enlace Facebook
	$wp_customize->add_setting('cristina_settings[top_header_facebook_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_facebook_link', array(
		'label' => __('Enlace de facebook', 'cristina'),
		'section' => 'cristina_header_top',
		'settings' => 'cristina_settings[top_header_facebook_link]'
	));



	// Enlace Youtube
	$wp_customize->add_setting('cristina_settings[top_header_youtube_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_youtube_link', array(
		'label' => __('Enlace de youtube', 'cristina'),
		'section' => 'cristina_header_top',
		'settings' => 'cristina_settings[top_header_youtube_link]'
	));



	// Enlace Instagram
	$wp_customize->add_setting('cristina_settings[top_header_instagram_link]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('top_header_instagram_link', array(
		'label' => __('Enlace de instagram', 'cristina'),
		'section' => 'cristina_header_top',
		'settings' => 'cristina_settings[top_header_instagram_link]'
	));




	// Seccion encabezado normal
	$wp_customize->add_section('cristina_header', array(

		'title' => __('Encabezado normal', 'cristina'),
		'description' => __('Opciones del encabezado normal', 'cristina'),
		'priority' => 20,
		'panel' => 'cristina_header_panel'

	));


	// Logo
	$wp_customize->add_setting('cristina_settings[logo]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => __('Logo', 'cristina'),
		'section' => 'cristina_header',
		'settings' => 'cristina_settings[logo]'
	)));


	// Panel Pagina de inicio
	$wp_customize->add_panel('cristina_homepage', array(

		'title' => __('Pagina de inicio', 'cristina'),
		'description' => __('Opciones de la página de inicio', 'cristina'),
		'priority' => 41

	));
	
	

	// Seccion banners
	$wp_customize->add_section('cristina_home_banners', array(

		'title' => __('banners', 'cristina'),
		'description' => __('Opciones de sección de banners', 'cristina'),
		'priority' => 10,
		'panel' => 'cristina_homepage'

	));

	// Mostrar seccion banners
	$wp_customize->add_setting('cristina_settings[show_banners_section]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('show_banners_section', array(
		'label' => __('Mostrar sección de banners', 'cristina'),
		'section' => 'cristina_home_banners',
		'settings' => 'cristina_settings[show_banners_section]',
		'type' => 'checkbox'
	));

	 //Titulo seccion banners
	$wp_customize->add_setting('cristina_settings[banners_section_title]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('banners_section_title', array(
		'label' => __('Link banner 1', 'cristina'),
		'section' => 'cristina_home_banners',
		'settings' => 'cristina_settings[banners_section_title]'
	));

 //Titulo seccion banners2
	$wp_customize->add_setting('cristina_settings[banners_section_title2]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('banners_section_title2', array(
		'label' => __('Link banner 2', 'cristina'),
		'section' => 'cristina_home_banners',
		'settings' => 'cristina_settings[banners_section_title2]'
	));





	// Seccion Ultimos articulos
	$wp_customize->add_section('cristina_last_posts', array(

		'title' => __('Ultimos artículos', 'cristina'),
		'description' => __('Opciones de sección de últimos artículos', 'cristina'),
		'priority' => 20,
		'panel' => 'cristina_homepage'

	));

	// Mostrar seccion ultimos articulos
	$wp_customize->add_setting('cristina_settings[show_last_posts_section]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('show_last_posts_section', array(
		'label' => __('Mostrar sección de últimos artículos', 'cristina'),
		'section' => 'cristina_last_posts',
		'settings' => 'cristina_settings[show_last_posts_section]',
		'type' => 'checkbox'
	));

	// Titulo seccion ultimos articulos
	$wp_customize->add_setting('cristina_settings[last_posts_section_title]', array(
		'default' => '',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('last_posts_section_title', array(
		'label' => __('Titulo de seccion ultimos articulos', 'cristina'),
		'section' => 'cristina_last_posts',
		'settings' => 'cristina_settings[last_posts_section_title]'
	));
	
	






}

add_action('customize_register', 'cristina_customize_register');