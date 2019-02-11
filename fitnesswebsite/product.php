<?php
function create_post_type() {
  register_post_type( 'product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports'  => array( 'title', 'excerpt', 'editor', 'thumbnail' )
    )
  );
}
add_action( 'init', 'create_post_type' );

function producttype_init() {
	// create a new taxonomy
	register_taxonomy(
		'product-type',
		'product',
		array(
			'label' => __( 'Product Type' ),
			'rewrite' => array( 'slug' => 'product-type' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'producttype_init' );

?>
