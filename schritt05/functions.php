<?php
/*
Diese Funktion bindet die Stylesheets (inklusive Google Fonts) korrekt in das WP System ein. 
*/
function my_style() {
    wp_enqueue_style(  'style', get_stylesheet_uri()); 
        wp_enqueue_style(  'gfonts-style', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;1,300&display=swap');
}
add_action( 'wp_enqueue_scripts', 'my_style' );


/*
Mit dieser Funktion werden Menüs registriert.
Ohne dieses Registrieren existieren nicht einmal die Menübereiche
im WP Backend. 
*/
function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Haupt Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

?>