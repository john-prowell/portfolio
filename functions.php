<?php

function load_styles() {
    wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.3');
    wp_enqueue_style( 'twenty-twenty-styles', get_template_directory_uri() . '/assets/css/twentytwenty.css' , array(), '1.0.0');
    wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/assets/css/main.css' , array(), '1.0.0');
    wp_enqueue_style( 'custom-styles-map', get_template_directory_uri() . '/assets/css/main.css.map', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts() {   

		// Smooth Scroll
    //wp_enqueue_script('smooth_scroll_scripts', get_template_directory_uri() . '/assets/js/smooth-scroll.polyfills.js', array('jquery'), '16.1.4', true);
		// TwentyTwenty Image Comparison Slider		
		wp_enqueue_script('jquery-event-move_scripts', get_template_directory_uri() . '/assets/js/jquery.event.move.js', array('jquery'), '2.0', true);
		wp_enqueue_script('twentytwenty_scripts', get_template_directory_uri() . '/assets/js/jquery.twentytwenty.js', array('jquery'), '1.0', true);
		// Bootstrap
		wp_enqueue_script('bootstrap_scripts', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
		// Custom Scripts
    wp_enqueue_script('custom_scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');


// Register Custom Post Type
function website_post_type() {

	$labels = array(
		'name'                  => _x( 'Websites', 'Post Type General Name', 'my_portfolio' ),
		'singular_name'         => _x( 'Website', 'Post Type Singular Name', 'my_portfolio' ),
		'menu_name'             => __( 'Websites', 'my_portfolio' ),
		'name_admin_bar'        => __( 'Website', 'my_portfolio' ),
		'archives'              => __( 'Website Archives', 'my_portfolio' ),
		'attributes'            => __( 'Website Attributes', 'my_portfolio' ),
		'parent_item_colon'     => __( 'Parent Website:', 'my_portfolio' ),
		'all_items'             => __( 'All Websites', 'my_portfolio' ),
		'add_new_item'          => __( 'Add New Website', 'my_portfolio' ),
		'add_new'               => __( 'Add New', 'my_portfolio' ),
		'new_item'              => __( 'New Website', 'my_portfolio' ),
		'edit_item'             => __( 'Edit Website', 'my_portfolio' ),
		'update_item'           => __( 'Update Website', 'my_portfolio' ),
		'view_item'             => __( 'View Website', 'my_portfolio' ),
		'view_items'            => __( 'View Websites', 'my_portfolio' ),
		'search_items'          => __( 'Search Website', 'my_portfolio' ),
		'not_found'             => __( 'Not found', 'my_portfolio' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'my_portfolio' ),
		'featured_image'        => __( 'Featured Image', 'my_portfolio' ),
		'set_featured_image'    => __( 'Set featured image', 'my_portfolio' ),
		'remove_featured_image' => __( 'Remove featured image', 'my_portfolio' ),
		'use_featured_image'    => __( 'Use as featured image', 'my_portfolio' ),
		'insert_into_item'      => __( 'Insert into Website', 'my_portfolio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Website', 'my_portfolio' ),
		'items_list'            => __( 'Websites list', 'my_portfolio' ),
		'items_list_navigation' => __( 'Websites list navigation', 'my_portfolio' ),
		'filter_items_list'     => __( 'Filter Websites list', 'my_portfolio' ),
	);
	$args = array(
		'label'                 => __( 'Website', 'my_portfolio' ),
		'description'           => __( 'Website Portfolio', 'my_portfolio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'							=> 'dashicons-welcome-widgets-menus',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'website', $args );

}
add_action( 'init', 'website_post_type', 0 );


// Register Custom Post Type
function graphic_post_type() {

	$labels = array(
		'name'                  => _x( 'Graphics', 'Post Type General Name', 'my_portfolio' ),
		'singular_name'         => _x( 'Graphic', 'Post Type Singular Name', 'my_portfolio' ),
		'menu_name'             => __( 'Graphics', 'my_portfolio' ),
		'name_admin_bar'        => __( 'Graphic', 'my_portfolio' ),
		'archives'              => __( 'Graphic Archives', 'my_portfolio' ),
		'attributes'            => __( 'Graphic Attributes', 'my_portfolio' ),
		'parent_item_colon'     => __( 'Parent Graphic:', 'my_portfolio' ),
		'all_items'             => __( 'All Graphics', 'my_portfolio' ),
		'add_new_item'          => __( 'Add New Graphic', 'my_portfolio' ),
		'add_new'               => __( 'Add New', 'my_portfolio' ),
		'new_item'              => __( 'New Graphic', 'my_portfolio' ),
		'edit_item'             => __( 'Edit Graphic', 'my_portfolio' ),
		'update_item'           => __( 'Update Graphic', 'my_portfolio' ),
		'view_item'             => __( 'View Graphic', 'my_portfolio' ),
		'view_items'            => __( 'View Graphics', 'my_portfolio' ),
		'search_items'          => __( 'Search Graphic', 'my_portfolio' ),
		'not_found'             => __( 'Not found', 'my_portfolio' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'my_portfolio' ),
		'featured_image'        => __( 'Featured Image', 'my_portfolio' ),
		'set_featured_image'    => __( 'Set featured image', 'my_portfolio' ),
		'remove_featured_image' => __( 'Remove featured image', 'my_portfolio' ),
		'use_featured_image'    => __( 'Use as featured image', 'my_portfolio' ),
		'insert_into_item'      => __( 'Insert into Graphic', 'my_portfolio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Graphic', 'my_portfolio' ),
		'items_list'            => __( 'Graphics list', 'my_portfolio' ),
		'items_list_navigation' => __( 'Graphics list navigation', 'my_portfolio' ),
		'filter_items_list'     => __( 'Filter Graphics list', 'my_portfolio' ),
	);
	$args = array(
		'label'                 => __( 'Graphic', 'my_portfolio' ),
		'description'           => __( 'Graphic Portfolio', 'my_portfolio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'graphic', $args );

}
add_action( 'init', 'graphic_post_type', 0 );


/* Removes Wordpress Upload Image Scaling */
add_filter( 'big_image_size_threshold', '__return_false' );


/* Displays template name on bottom of page for dev purposes */

// function which_template_is_loaded() {
// 	if ( is_super_admin() ) {
// 		global $template;
// 		print_r( $template );
// 	}
// }
    
// add_action( 'wp_footer', 'which_template_is_loaded' );