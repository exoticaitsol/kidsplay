<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
        
        
    
</head>
    <?php wp_head(); ?>
<body <?php body_class(); ?>>



   <!-- top-header section start -->
        <div class="topbar">
            <div class="container">
                <div class="top-bar-main">
                    <div class="top-bar-left-content">
                        <a href><i class="ri-map-pin-line"></i>256, abc street.
                            XYZ
                            Lorem City, Country</a>
                    </div>
                    <div class="top-bar-left-content">
                        <a href><i class="ri-phone-fill"></i>123-492-7890</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- top-header section end -->
        <!-- header main section -->
        <section class="header">
            <div class="container">
                <div class="main-header">
                    <div class="header-logo">
                        <a href="/">
                        <?php dynamic_sidebar( 'custom-logo-header' ); ?>
                        </a>
                    </div>
                    <div class="navbar">
                       
                    <?php
    wp_nav_menu(array(
        'menu'              => "header menu",
        'container'         => "ul",
        'container_class'   => "menu_navbar_set",
        'menu_class'        => "menu_navbar_set"
    ));
?>

                    </div>
                    <div class="header-btn">
                        <a href="/contact-us/">Contact Us</a>
                    </div>
                </div>

                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </section>
        <!-- header main section end -->


<div id="content" class="site-content">
