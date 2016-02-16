<?php

function jabon_setup() {
	register_nav_menus(array(
		'primary' => __( 'Primary Menu', 'jabon' ),
		'social' => __( 'Social Links Menu', 'jabon' ),
	));
}

function jabon_enqueue_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/static/bootstrap/css/bootstrap.min.css', '', '3' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'base-css', get_template_directory_uri() . '/style.css', '', '0.1' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/static/bootstrap/js/bootstrap.min.js', 'jquery', '3', TRUE );
}

add_action( 'wp_enqueue_scripts', 'jabon_enqueue_scripts' );

function jabon_social_icon( $url ) {
	if ( strpos( $url, 'facebook.com' ) !== FALSE ) {
		?><i class="fa fa-facebook"></i><?php
	} else if ( strpos( $url, 'twitter.com' ) !== FALSE ) {
		?><i class="fa fa-twitter"></i><?php
	} else if ( strpos( $url, 'instagram.com' ) !== FALSE ) {
		?><i class="fa fa-instagram"></i><?php
	}
}

function jabon_active_menu_item( $menu_item_name ) {
	if ( substr( wp_title( '', FALSE ), 2 ) === $menu_item_name || ( $menu_item_name === 'Home' && wp_title( '', FALSE ) === '' ) ): ?> class="active"<?php endif;
}