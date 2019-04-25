<?php
/**
 * Enqueue style
 */
function my_style() {
    $file = PRODUCTION ? 'app.min.css' : 'app.css';
    wp_enqueue_style( 'style-main', CSS_URL . '/' . $file );
}
add_action( 'wp_enqueue_scripts',  'my_style' );
