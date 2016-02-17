<?php

require 'includes/social-widget.php';
require 'includes/contact-widget.php';

function jabon_setup() {
	register_nav_menus(array(
		'primary' => __( 'Primary Menu', 'jabon' ),
	));
}

function jabon_enqueue_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/static/bootstrap/css/bootstrap.min.css', '', '3' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'base-css', get_template_directory_uri() . '/style.css', '', '0.1' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/static/bootstrap/js/bootstrap.min.js', 'jquery', '3', TRUE );
}

add_action( 'wp_enqueue_scripts', 'jabon_enqueue_scripts' );

function jabon_active_menu_item( $menu_item_name ) {
	if ( substr( wp_title( '', FALSE ), 2 ) === $menu_item_name || ( $menu_item_name === 'Home' && wp_title( '', FALSE ) === '' ) ): ?> class="active"<?php endif;
}

function jabon_widgets_init() {
	register_widget( 'JABon_Contact_Widget' );
	register_widget( 'JABon_Social_Widget' );
	
	register_sidebar( array(
		'name' => __( 'Footer Column 1', 'jabon_footer_col_1' ),
		'id' => 'footer-col-1',
		'description' => '1st footer column.',
		'before_widget' => '',
		'after_widget' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Column 2', 'jabon_footer_col_2' ),
		'id' => 'footer-col-2',
		'description' => '2nd footer column.',
		'before_widget' => '',
		'after_widget' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Column 3', 'jabon_footer_col_3' ),
		'id' => 'footer-col-3',
		'description' => '3rd footer column.',
		'before_widget' => '',
		'after_widget' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Column 4', 'jabon_footer_col_4' ),
		'id' => 'footer-col-4',
		'description' => '4th footer column.',
		'before_widget' => '',
		'after_widget' => '',
	) );
}

add_action( 'widgets_init', 'jabon_widgets_init' );