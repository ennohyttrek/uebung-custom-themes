<?php
/*
Diese Funktion bindet das Stylesheet korrekt in das WP System ein. 
*/
function my_style() {
    wp_enqueue_style(  'style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'my_style' );

?>