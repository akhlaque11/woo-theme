<?php 

// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'portfolios', 'Post Type General Name', 'My custom html' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'My custom html' ),
		'menu_name' => _x( 'portfolios', 'Admin Menu text', 'My custom html' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'My custom html' ),
		'archives' => __( 'Portfolio Archives', 'My custom html' ),
		'attributes' => __( 'Portfolio Attributes', 'My custom html' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'My custom html' ),
		'all_items' => __( 'All portfolios', 'My custom html' ),
		'add_new_item' => __( 'Add New Portfolio', 'My custom html' ),
		'add_new' => __( 'Add New', 'My custom html' ),
		'new_item' => __( 'New Portfolio', 'My custom html' ),
		'edit_item' => __( 'Edit Portfolio', 'My custom html' ),
		'update_item' => __( 'Update Portfolio', 'My custom html' ),
		'view_item' => __( 'View Portfolio', 'My custom html' ),
		'view_items' => __( 'View portfolios', 'My custom html' ),
		'search_items' => __( 'Search Portfolio', 'My custom html' ),
		'not_found' => __( 'Not found', 'My custom html' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'My custom html' ),
		'featured_image' => __( 'Featured Image', 'My custom html' ),
		'set_featured_image' => __( 'Set featured image', 'My custom html' ),
		'remove_featured_image' => __( 'Remove featured image', 'My custom html' ),
		'use_featured_image' => __( 'Use as featured image', 'My custom html' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'My custom html' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'My custom html' ),
		'items_list' => __( 'portfolios list', 'My custom html' ),
		'items_list_navigation' => __( 'portfolios list navigation', 'My custom html' ),
		'filter_items_list' => __( 'Filter portfolios list', 'My custom html' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'My custom html' ),
		'description' => __( 'Custom post type of portfolio section', 'My custom html' ),
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
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );

?>