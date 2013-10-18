<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="<?= get_description(); ?>">
    <meta name="keywords" content="<?= get_keywords(); ?>">
    <meta name="author" content="<?= get_author(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<div id="header" class="span1 block relative">
    <div class="wrapper center site-width">
        <header>
            <h1><span><?php bloginfo( 'name' ); ?></span></h1>
        </header>
    </div>
    <div id="navbar" class="navbar horizontal center site-width">
        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            <?php get_search_form(); ?>
        </nav><!-- #site-navigation -->
    </div><!-- #navbar -->
    <div class="clearfix"></div>
</div>