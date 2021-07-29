<?php 

// Register Custom Post Type service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'services', 'Post Type General Name', 'My custom html' ),
		'singular_name' => _x( 'service', 'Post Type Singular Name', 'My custom html' ),
		'menu_name' => _x( 'services', 'Admin Menu text', 'My custom html' ),
		'name_admin_bar' => _x( 'service', 'Add New on Toolbar', 'My custom html' ),
		'archives' => __( 'service Archives', 'My custom html' ),
		'attributes' => __( 'service Attributes', 'My custom html' ),
		'parent_item_colon' => __( 'Parent service:', 'My custom html' ),
		'all_items' => __( 'All services', 'My custom html' ),
		'add_new_item' => __( 'Add New service', 'My custom html' ),
		'add_new' => __( 'Add New', 'My custom html' ),
		'new_item' => __( 'New service', 'My custom html' ),
		'edit_item' => __( 'Edit service', 'My custom html' ),
		'update_item' => __( 'Update service', 'My custom html' ),
		'view_item' => __( 'View service', 'My custom html' ),
		'view_items' => __( 'View services', 'My custom html' ),
		'search_items' => __( 'Search service', 'My custom html' ),
		'not_found' => __( 'Not found', 'My custom html' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'My custom html' ),
		'featured_image' => __( 'Featured Image', 'My custom html' ),
		'set_featured_image' => __( 'Set featured image', 'My custom html' ),
		'remove_featured_image' => __( 'Remove featured image', 'My custom html' ),
		'use_featured_image' => __( 'Use as featured image', 'My custom html' ),
		'insert_into_item' => __( 'Insert into service', 'My custom html' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'My custom html' ),
		'items_list' => __( 'services list', 'My custom html' ),
		'items_list_navigation' => __( 'services list navigation', 'My custom html' ),
		'filter_items_list' => __( 'Filter services list', 'My custom html' ),
	);
	$args = array(
		'label' => __( 'service', 'My custom html' ),
		'description' => __( 'Custom post type of service section', 'My custom html' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'page-attributes', 'post-formats'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

?>