<?php


/*

	========================
		FRONT-END ENQUEUE FUNCTIONS
	========================
*/

function jovadev_load_scripts(){

	wp_enqueue_style( 'jovadevbootstrapstyle', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.5.0', 'all' );
  wp_enqueue_style( 'jovadevtogglerstyle', get_template_directory_uri() . '/css/toggler.css', array(), '1.0', 'all' );
  wp_enqueue_style( 'jovadevcustomstyle', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all' );



	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_template_directory_uri() . '/js/jquery.js', false, '3.5.1', true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'jovadevbootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '4.5.1', true );
  wp_enqueue_script( 'jovadevcustomjs', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'jovadev_load_scripts' );
