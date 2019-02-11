<?php
// stylesheet + js
function add_stylesandscripts(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script('ads', get_template_directory_uri() . '/js/ads.js');
}
add_action('wp_enqueue_scripts', 'add_stylesandscripts');

// product functionality, including: product post type
require_once 'product.php';

// images
add_theme_support( 'post-thumbnails', array( 'post', 'product' ) ); // Posts and Products
set_post_thumbnail_size(200, 200, true);
add_image_size( 'top-story', 600, 400 );

?>
