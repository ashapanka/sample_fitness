<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );

// product functionality, including: product post type
require_once 'product.php';

add_theme_support( 'post-thumbnails', array( 'post', 'product' ) ); // Posts and Products

//custom taxonomy for Top Story on home
function topstory_init() {
	// create a new taxonomy
	register_taxonomy(
		'post',
		array(
			'label' => __( 'Top Story' ),
			'rewrite' => array( 'slug' => 'top-story' ),
		)
	);
}
add_action( 'init', 'topstory_init' );


?>