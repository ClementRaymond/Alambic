<?php
/**
 * Enqueue style
 */
function my_style() {
    wp_enqueue_style( 'style-main', CSS_URL . '/' . 'app.css' );
}
add_action( 'wp_enqueue_scripts',  'my_style' );

/**
 * Register all the menu
 */
register_nav_menus( array(
    'header' => __( 'Header main menu'),
    'footer' => __('Footer menu')
) );

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
   add_theme_support( 'post-thumbnails' );
}
