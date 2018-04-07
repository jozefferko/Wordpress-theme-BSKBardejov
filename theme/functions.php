<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}
add_action('wp_enqueue_scripts', 'learningWordPress_resources');

function themeslug_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'themeslug_logo_section' , array(
		'title'       => __( 'Logo', 'themeslug' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
		) );
	$wp_customize->add_setting( 'themeslug_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
		'label'    => __( 'Logo', 'themeslug' ),
		'section'  => 'themeslug_logo_section',
		'settings' => 'themeslug_logo',
		) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );


function add_theme_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bigslide', get_template_directory_uri() . '/Scripts/bigSlide.min.js', array ( 'jquery' ));
	wp_enqueue_script( 'script', get_template_directory_uri() . '/Scripts/script.js', array ( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );





$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
	);
add_theme_support( 'custom-background', $defaults );


function learningWordPress_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'mainNav' => __( 'Hlavne menu'),
		'linksNav' => __( 'Linky'),
		));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
	
	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'learningWordPress_setup');

function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
		));
}

add_action('widgets_init', 'ourWidgetsInit');

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
	return '<a class="more-link" href="' . get_permalink() . '">viac</a>';
}