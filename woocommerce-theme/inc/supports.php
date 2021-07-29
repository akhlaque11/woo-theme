<?php


function custom_theme_setup() {

add_theme_support( 'woocommerce' );
add_theme_support('menus');
add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


// custom logo
add_theme_support(
    'custom-logo',
    array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    )
);

// register some menu support
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'bottom-menu' => 'Bottom Menu',
    )
);
function wpdocs_custom_excerpt_length( $length ) {
	return 10;
 }
 add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
