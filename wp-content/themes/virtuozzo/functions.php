<?php
//enqueue scripts & styles
add_action( 'wp_enqueue_scripts', 'virt_enqueueu' );




if (!function_exists('virt_enqueueu')) {
function virt_enqueueu(){
	wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/style.css' );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css' );

	wp_enqueue_script( 'jquery' );
}}


?>