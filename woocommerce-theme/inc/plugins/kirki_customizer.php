<?php
// kirki configuarion

Kirki::add_config( 'customhtml', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );




// add panel with name Header Setting
Kirki::add_panel( 'background_settings', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Custom Background & Image Customizer', 'kirki' ),
    'description' => esc_html__( 'Modify header & Menu layout', 'kirki' ),
    'icon'        => 'dashicons-embed-photo'
) );
// add panel with name Typography
Kirki::add_panel( 'typography_settings', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Custom Typography Customizer', 'kirki' ),
    'description' => esc_html__( 'Modify typography for heading and parapgraph', 'kirki' ),
    'icon'        => 'dashicons-html'
) );
// add section with name layout which is in Header Setting panel
Kirki::add_section( 'layout_settings', array(
    'title'          => esc_html__( 'Header Section Layout', 'kirki' ),
    'description'    => esc_html__( 'Manage header layout', 'kirki' ),
    'panel'          => 'background_settings',
    'priority'       => 160,
) );
// add section for Hero section which is in background Setting panel
Kirki::add_section( 'hero_layout_settings', array(
    'title'          => esc_html__( 'Hero Section Layout', 'kirki' ),
    'description'    => esc_html__( 'Manage hero section slider images', 'kirki' ),
    'panel'          => 'background_settings',
    'priority'       => 160,
) );
// add section for Footer section which is in background Setting panel
Kirki::add_section( 'footer_layout_settings', array(
    'title'          => esc_html__( 'Footer Section Layout', 'kirki' ),
    'description'    => esc_html__( 'Manage footer background layout', 'kirki' ),
    'panel'          => 'background_settings',
    'priority'       => 160,
) );
// add section with name Menu Settings which is also in Header Setting panel
Kirki::add_section( 'header_typography_settings', array(
    'title'          => esc_html__( 'Header Typography Settings', 'kirki' ),
    'description'    => esc_html__( 'Manage menu settings', 'kirki' ),
    'panel'          => 'typography_settings',
    'priority'       => 160,
) );
// add several controls for header section background which is in layout_settings panel start
// top Header
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'top_header_background_setting',
	'label'       => esc_html__( 'Top Header Background', 'kirki' ),
	'description' => esc_html__( 'Background color of header', 'kirki' ),
	'section'     => 'layout_settings',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.header-area',
		],
	],
] );

// middle header
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'middle_header_background_setting',
	'label'       => esc_html__( 'Middle Header Background', 'kirki' ),
	'description' => esc_html__( 'Background color of header', 'kirki' ),
	'section'     => 'layout_settings',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.site-branding-area',
		],
	],
] );

// bottom header
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'bottom_header_background_setting',
	'label'       => esc_html__( 'Bottom Header Background', 'kirki' ),
	'description' => esc_html__( 'Background color of header', 'kirki' ),
	'section'     => 'layout_settings',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.mainmenu-area',
		],
	],
] );
// add several controls for header section background which is in layout_settings panel end

// add controls for header section typography which is in typography_setting start
// add typography for top header
Kirki::add_field( 'customhtml', [
	'type'        => 'typography',
	'settings'    => 'top_header_setting',
	'label'       => esc_html__( 'Top Header Typography', 'kirki' ),
	'section'     => 'header_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.header-area ul li a',
		],
	],
] );

// add typography for bottom header
Kirki::add_field( 'customhtml', [
	'type'        => 'typography',
	'settings'    => 'bottom_header_setting',
	'label'       => esc_html__( 'Bottom Header Typography', 'kirki' ),
	'section'     => 'header_typography_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.mainmenu-area ul.navbar-nav li a',
		],
	],
] );
// add controls for header section typography which is in typography_setting end

// hero section image sliders control
// image slider-1
Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'image_slider_1',
	'label'       => esc_html__( 'Image slider-1', 'kirki' ),
	'description' => esc_html__( 'Description Here.', 'kirki' ),
	'section'     => 'hero_layout_settings',
	'default'     => '',
] );
// image slider-2
Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'image_slider_2',
	'label'       => esc_html__( 'Image slider-2', 'kirki' ),
	'description' => esc_html__( 'Description Here.', 'kirki' ),
	'section'     => 'hero_layout_settings',
	'default'     => '',
] );
// image slider-3
Kirki::add_field( 'theme_config_id', [
	'type'        => 'image',
	'settings'    => 'image_slider_3',
	'label'       => esc_html__( 'Image slider-3', 'kirki' ),
	'description' => esc_html__( 'Description Here.', 'kirki' ),
	'section'     => 'hero_layout_settings',
	'default'     => '',
] );

// add controls for footer section
// top footer
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'top_footer_background_settings',
	'label'       => esc_html__( 'Top Footer', 'kirki' ),
	'description' => esc_html__( 'Background color of top footer', 'kirki' ),
	'section'     => 'footer_layout_settings',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.footer-top-area',
		],
	],
] );
// bottom footer
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'bottom_footer_background_settings',
	'label'       => esc_html__( 'Bottom Footer', 'kirki' ),
	'description' => esc_html__( 'Background color of bottom footer', 'kirki' ),
	'section'     => 'footer_layout_settings',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.footer-bottom-area',
		],
	],
] );
