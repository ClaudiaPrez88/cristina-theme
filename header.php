<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="description" content="Cristina Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('_','true','right'); ?><?php bloginfo('name'); ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    
    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
</head>

<body <?php body_class(); ?>>
    
     <?php 

        $options = get_theme_mod('cristina_settings');


        // Facebook url
        if ( ! empty($options['top_header_facebook_link']) ) {
            $facebook_url = $options['top_header_facebook_link'];
        }

        // youtube url
        if ( ! empty($options['top_header_youtube_link']) ) {
            $youtube_url = $options['top_header_youtube_link'];
        }

        // Instagram url
        if ( ! empty($options['top_header_instagram_link']) ) {
            $instagram_url = $options['top_header_instagram_link'];
        }

        // Logo
        if ( ! empty($options['logo']) ) {
            $logo = $options['logo'];
        } else{
            $logo ='https://claudialatam.com/cristina/wp-content/uploads/2023/11/cristina.png';
        }


     ?>
    <!-- Page Preloder
    <div id="preloder">
        <div class="loader"></div>
    </div>-->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>"></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="<?php echo IMAGES; ?>/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <!--<div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>-->
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <?php wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'theme_class' => 'main_menu',
            'menu_id' => 'main_menu'
            )); ?>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
             <?php if ( isset($facebook_url) ): ?>
            <a href="<?php echo esc_url($facebook_url); ?>"><i class="fa fa-facebook"></i></a>
            <?php endif ?>
            <?php if ( isset($instagram_url) ): ?>
            <a href="<?php echo esc_url($instagram_url); ?>"><i class="fa fa-instagram"></i></a>
            <?php endif ?>
            <?php if ( isset($youtube_url) ): ?>
            <a href="<?php echo esc_url($youtube_url); ?>"><i class="fa fa-youtube"></i></a>
            <?php endif ?>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> gerencia@cristinaimportaciones.cl</li>
                                <li><i class="fa fa-whatsapp fa-inverse"></i> +5622758035</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                 <?php if ( isset($facebook_url) ): ?>
                                <a href="<?php echo esc_url($facebook_url); ?>"><i class="fa fa-facebook"></i></a>
                                <?php endif ?>
                                <?php if ( isset($instagram_url) ): ?>
                                <a href="<?php echo esc_url($instagram_url); ?>"><i class="fa fa-instagram"></i></a>
                                <?php endif ?>
                                <?php if ( isset($youtube_url) ): ?>
                                <a href="<?php echo esc_url($youtube_url); ?>"><i class="fa fa-youtube"></i></a>
                                <?php endif ?>
                            </div>
                           
                            <!--<div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>"  <?php post_class('logo-head'); ?>></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <nav class="header__menu">
                         <nav class="main-menu-container container">
                                <?php wp_nav_menu(array(
                
                                    'theme_location' => 'main-menu',
                                    'menu_class' => 'main-menu',
                                    'menu_id' => 'mainMenu'
                
                                )); ?>
                
                
                                <?php // get_search_form(); ?>
                
                                
                        </nav>
                    </nav>
                </div>
                <div class="col-lg-4">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                       
                    </div>
                    <!--<div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>-->
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->