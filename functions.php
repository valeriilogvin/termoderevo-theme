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

function wood_scripts() {
//	wp_enqueue_style(
//		'wood-libsCSS',
//		get_stylesheet_directory_uri() . '/css/libs.min.css',
//		array(),
//		'1.0'
//	);
	wp_enqueue_style(
		'wood-lightgallery',
		'https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css',
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'wood-style',
		get_stylesheet_directory_uri() . '/css/main.min.css',
		array(),
		'1.0'
	);

//	wp_enqueue_script(
//		'wood-libs',
//		get_template_directory_uri() . '/js/libs.min.js',
//		array(),
//		'1.1',
//		true
//	);
	wp_enqueue_script(
		'wood-slick',
		get_template_directory_uri() . '/js/slick.min.js',
		array(),
		'1.0',
		true
	);
	wp_enqueue_script(
		'wood-lg-zoom',
		get_template_directory_uri() . '/js/lg-zoom.min.js',
		array(),
		'1.0',
		true
	);
	wp_enqueue_script(
		'wood-lg-inputmask',
		get_template_directory_uri() . '/js/jquery.inputmask.min.js',
		array(),
		'1.0',
		true
	);
    wp_enqueue_script(
        'wood-lg-lightgallery-migrate',
        '//code.jquery.com/jquery-migrate-1.2.1.min.js',
        array(),
        '1.0',
        true
    );
	wp_enqueue_script(
		'wood-lg-lightgallery',
		'https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js',
		array(),
		'1.0',
		true
	);
	wp_enqueue_script(
		'wood-classie',
        get_template_directory_uri() . '/js/classie.js',
        array(),
        '1.0',
        true
	);
	wp_enqueue_script(
		'wood-modal',
        get_template_directory_uri() . '/js/modalEffects.js',
        array(),
        '1.0',
        true
	);
	wp_enqueue_script(
		'wood-mainJs',
		get_template_directory_uri() . '/js/main.js',
		array(),
		'1.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'wood_scripts' );


function the_acf_loop(){
	get_template_part('template-parts/loop/acf-blocks','loop');
}

function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/* Callback-функция для фильтрации параметров MCE */
function my_mce_before_init_insert_formats( $init_array ) {

// Определяем массив style_formats
	$style_formats = array(

// Каждый дочерний массив – это формат со своими собственными настройками
// Каждый массив имеет аргументы title, block, classes и wrapper
// 'title' - название, которое будет отображаться в меню Formats
// 'block' - тип блока (span, div, переключатель или внутриблочный)
// 'classes' добавляет CSS класс элементу
// 'wrapper' – добавлять/не добавлять новый эл-т к любому из выбранных эл-тов
		array(
			'title' => 'Заголовок',
			'block' => 'span',
			'wrapper' => false,
		),
	);
	// Внутри массива, JSON закодирован в 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;
}
// Добавляем обратный вызов 'tiny_mce_before_init'
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');
