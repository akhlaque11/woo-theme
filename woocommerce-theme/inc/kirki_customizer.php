<?php
// kirki configuarion

Kirki::add_config( 'customhtml', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );




// add panel with name Header Setting
Kirki::add_panel( 'header_settings', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Background', 'kirki' ),
    'description' => esc_html__( 'Modify header & Menu layout', 'kirki' ),
    'icon'        => 'dashicons-embed-photo'
    
) );
// add panel with name Typography
Kirki::add_panel( 'typography_settings', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Typography', 'kirki' ),
    'description' => esc_html__( 'Modify typography for heading and parapgraph', 'kirki' ),
    'icon'        => 'dashicons-html'
) );
// add section with name Header Layout which is in Header Setting panel
Kirki::add_section( 'header_layout_settings', array(
    'title'          => esc_html__( 'Header layout', 'kirki' ),
    'description'    => esc_html__( 'Manage header layout', 'kirki' ),
    'panel'          => 'header_settings',
    'priority'       => 160,
) );
// add section with name Hero section which is in Header Setting panel
Kirki::add_section( 'hero_layout_settings', array(
    'title'          => esc_html__( 'Hero section', 'kirki' ),
    'description'    => esc_html__( 'Manage header layout', 'kirki' ),
    'panel'          => 'header_settings',
    'priority'       => 160,
) );
// add section with name Menu Settings which is also in Header Setting panel
Kirki::add_section( 'foooter_settings', array(
    'title'          => esc_html__( 'Footer layout', 'kirki' ),
    'description'    => esc_html__( 'Manage menu settings', 'kirki' ),
    'panel'          => 'header_settings',
    'priority'       => 160,
) );
// add section with name Headings Typography 
Kirki::add_section( 'typography_heading_setting', array(
    'title'          => esc_html__( 'Heading Typography', 'kirki' ),
    'description'    => esc_html__( 'Modify typography', 'kirki' ),
    'panel'          => 'typography_settings',
    'priority'       => 160,
) );
// add section with name layout which is in Header Setting panel
Kirki::add_section( 'typography_paragraph_setting', array(
    'title'          => esc_html__( 'Paragraph Typography', 'kirki' ),
    'description'    => esc_html__( 'Modify typography', 'kirki' ),
    'panel'        => 'typography_settings',
    'priority'       => 160,
) );
// add section with name layout which is in Header Setting panel
Kirki::add_section( 'change_text', array(
    'title'          => esc_html__( 'Change/Hide heading', 'kirki' ),
    'description'    => esc_html__( 'change headings', 'kirki' ),
    'panel'        => 'typography_settings',
    'priority'       => 160,
) );
// add control with name Header Background which is in Layout section
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'header_background_setting',
	'label'       => esc_html__( 'Header Background', 'kirki' ),
	'description' => esc_html__( 'Background color of header', 'kirki' ),
	'section'     => 'header_layout_settings',
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
			'element' => '#header',
		],
	],
] );
// add control with name Header Background which is in Layout section
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'hero_layout_settings',
	'label'       => esc_html__( 'Hero Section Background', 'kirki' ),
	'description' => esc_html__( 'Background color of header', 'kirki' ),
	'section'     => 'hero_layout_settings',
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
			'element' => '#hero',
		],
	],
] );
// add control for footer sections
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'Footer_search_setting',
	'label'       => esc_html__( 'Footer search section', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'foooter_settings',
	'default'     => [
		'background-color'      => '#fff',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#footer .footer-newsletter',
		],
	],
] );
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'Footer_main_setting',
	'label'       => esc_html__( 'Footer search section', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'foooter_settings',
	'default'     => [
		'background-color'      => '#fff',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#footer .footer-top',
		],
	],
] );
Kirki::add_field( 'customhtml', [
	'type'        => 'background',
	'settings'    => 'Footer_copyright_setting',
	'label'       => esc_html__( 'Footer search section', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'foooter_settings',
	'default'     => [
		'background-color'      => '#fff',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#footer',
		],
	],
] );

// add typography for headings
Kirki::add_field( 'customhtml', [
	'type'        => 'typography',
	'settings'    => 'heading_setting',
	'label'       => esc_html__( 'Typography', 'kirki' ),
	'section'     => 'typography_heading_setting',
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
			'element' => 'h1,h2,h3',
		],
	],
] );
// add typography for paragraph
Kirki::add_field( 'customhtml', [
	'type'        => 'typography',
	'settings'    => 'typography_pragraph_setting',
	'label'       => esc_html__( 'Typography Pragraph', 'kirki' ),
	'section'     => 'typography_paragraph_setting',
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
			'element' => 'p',
		],
	],
] );

// editing on 10/6/2021
Kirki::add_field( 'customhtml', [
	'type'     => 'text',
	'settings' => 'text_setting',
	'label'    => esc_html__( 'Heading Control', 'kirki' ),
	'section'  => 'change_text',
	'default'  => esc_html__( 'This is default heaings', 'kirki' ),
	'priority' => 10,
] );
Kirki::add_field( 'customhtml', [
	'type'     => 'text',
	'settings' => 'text_setting_p',
	'label'    => esc_html__( 'Pragraph Control', 'kirki' ),
	'section'  => 'change_text',
	'default'  => esc_html__( 'This is default pragraph', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'toggle',
	'settings'    => 'toggle_setting',
	'label'       => esc_html__( 'This is the label', 'kirki' ),
	'section'     => 'change_text',
	'default'     => '1',
	'priority'    => 10,
] );


// wordpress customier


// function mysite_customize_register( $wp_customize ){
// $wp_customize->add_panel( 'my_site_setting', array(
//     'title' => __( 'Wordpress Customizer' ),
//     'description' => '', // Include html tags such as <p>.
//     'priority' => 10, // Mixed with top-level-section hierarchy.
//   ) );

// //   Text Label sections
// $wp_customize->add_section( 'mysite_label' , array(
//     'title' => 'Change headings or pragraph',
//     'panel' => 'my_site_setting',
// 	'icon'        => 'dashicons-html'
//   ) );
// // change headings

// $wp_customize->add_setting('change_headings', array(
//     'type' => 'theme_mod',
//     'default' => 'This is default headings',
//   ) );
//   $wp_customize->add_control('change_headings', array(
//     'label' => __('Hero section headings' ),
//     'type'  => 'text',
//     'section' => 'mysite_label',
//   ) );
// // changed pragraph
// $wp_customize->add_setting('change_pragraph', array(
//     'type' => 'theme_mod',
//     'default' => 'This is default headings',
//   ) );
//   $wp_customize->add_control('change_pragraph', array(
//     'label' => __('Hero section pragraph' ),
//     'type'  => 'text',
//     'section' => 'mysite_label',
//   ) );


// };

// add_action( 'customize_register', 'mysite_customize_register');

