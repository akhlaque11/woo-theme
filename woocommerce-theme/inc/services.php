<?php 

// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'services', 'Post Type General Name', 'Custom Theme' ),
		'singular_name' => _x( 'service', 'Post Type Singular Name', 'Custom Theme' ),
		'menu_name' => _x( 'services', 'Admin Menu text', 'Custom Theme' ),
		'name_admin_bar' => _x( 'service', 'Add New on Toolbar', 'Custom Theme' ),
		'archives' => __( 'service Archives', 'Custom Theme' ),
		'attributes' => __( 'service Attributes', 'Custom Theme' ),
		'parent_item_colon' => __( 'Parent service:', 'Custom Theme' ),
		'all_items' => __( 'All services', 'Custom Theme' ),
		'add_new_item' => __( 'Add New service', 'Custom Theme' ),
		'add_new' => __( 'Add New', 'Custom Theme' ),
		'new_item' => __( 'New service', 'Custom Theme' ),
		'edit_item' => __( 'Edit service', 'Custom Theme' ),
		'update_item' => __( 'Update service', 'Custom Theme' ),
		'view_item' => __( 'View service', 'Custom Theme' ),
		'view_items' => __( 'View services', 'Custom Theme' ),
		'search_items' => __( 'Search service', 'Custom Theme' ),
		'not_found' => __( 'Not found', 'Custom Theme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'Custom Theme' ),
		'featured_image' => __( 'Featured Image', 'Custom Theme' ),
		'set_featured_image' => __( 'Set featured image', 'Custom Theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'Custom Theme' ),
		'use_featured_image' => __( 'Use as featured image', 'Custom Theme' ),
		'insert_into_item' => __( 'Insert into service', 'Custom Theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'Custom Theme' ),
		'items_list' => __( 'services list', 'Custom Theme' ),
		'items_list_navigation' => __( 'services list navigation', 'Custom Theme' ),
		'filter_items_list' => __( 'Filter services list', 'Custom Theme' ),
	);
	$args = array(
		'label' => __( 'Service', 'Custom Theme' ),
		'description' => __( 'Custom post type of service section', 'Custom Theme' ),
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