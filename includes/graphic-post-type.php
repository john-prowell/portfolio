<?php

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