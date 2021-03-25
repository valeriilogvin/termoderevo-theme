<?php

/**
 * Deregister JQery
 */
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );

function korea_scripts() {
	wp_enqueue_style(
		'korea-libsCSS',
		get_stylesheet_directory_uri() . '/css/libs.min.css',
		array(),
		'1.0'
	);
	wp_enqueue_style(
		'korea-style',
		get_stylesheet_directory_uri() . '/css/main.min.css',
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'korea-theme-style',
		get_stylesheet_directory_uri() . '/css/theme-style.css',
		array(),
		'1.0'
	);

	wp_enqueue_script(
		'korea-libs',
		get_template_directory_uri() . '/js/libs.min.js',
		array(),
		'1.1',
		true
	);
	wp_enqueue_script(
		'korea-mainJs',
		get_template_directory_uri() . '/js/main.js',
		array(),
		'1.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'korea_scripts' );


