<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raymond-voyage
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/drawer.js"></script>


    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=BenchNine|Droid+Sans" rel="stylesheet">


    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-drawer.css">
    <link type="text/css" rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/materialize/css/materialize.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/leschixx.css"
          media="screen,projection">
</head>


<div id="page" class="site ">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'leschixx'); ?></a>

    <header id="masthead" class="site-header " role="banner">
        <div class="ad-header">
            <img src="http://placehold.it/970x250">
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col s4 m4 l2">
                    <a class="brand-logo" href="<?php echo esc_url(home_url()); ?>"><img class="site-title"
                                                                                         src="<?php echo get_template_directory_uri(); ?>/images/logotest.png"</a>
                </div>
                <div class="col s4 m4 l9 nav-main">
                    <nav class="navbar navbar-default main-navigation hide-on-large-only" id="site-navigation"
                         role="navigation">
                        <div class="drawer-controls" style="margin-top:1rem;">
                            <a href="#navigationMenu" data-toggle="drawer" href="#navigationMenu"
                               aria-foldedopen="false" aria-controls="navigationMenu" class="btn btn-primary btn-sm">menu</a>
                        </div>
                        <div id="navigationMenu" class="drawer drawer-left dw-xs-10 dw-sm-6 dw-md-4 fold"
                             aria-labelledby="navigationMenu">

                            <div class="drawer-contents">
                                <div class="drawer-heading">
                                    <h2 class="drawer-title">leschixx</h2>
                                </div>

                                <?php
                                wp_nav_menu(array(
                                    'menu' => 'mobile',
                                    'theme_location' => 'mobile',
                                    'menu_class' => '',
                                    'ul_class' => 'drawer-dropdown-menu',
                                    'depth' => 3
                                ))
                                ?>
                                <div class="close-menu">
                                    <a class="close-btn"  data-toggle="drawer" href="#navigationMenu"
                                       aria-foldedopen="true" aria-controls="navigationMenu"><img src="<?php echo get_template_directory_uri(); ?>/images/cancel.png"></a>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="nav-wrapper ">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <?php
                            wp_nav_menu(array(
                                'menu_class' => 'right hide-on-med-and-down',
                                'leschixx' => 'primary',
                                'menu_id' => 'primary-menu'

                            ));

                            ?>

                    </div>
                </div>
                <div class="col s4 m4 l1">
                    <?php echo do_shortcode('[aps-social id="1"]') ?>
                </div>
                <!-- #site-navigation -->

            </div>
        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
