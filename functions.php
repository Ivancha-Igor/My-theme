<?php
/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
	wp_enqueue_style( 'mytheme', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

register_nav_menus(array(
  'header_menu' => 'Header Menu'
  ));
