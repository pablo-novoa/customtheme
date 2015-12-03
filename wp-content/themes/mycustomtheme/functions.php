<?php
add_action( 'wp_enqueue_scripts', 'stenqueueu' );
function stenqueueu(){
	wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/style.css' );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css' );
}
?>