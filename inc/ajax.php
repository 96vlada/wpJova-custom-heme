<?php

// testimonial
function jova_save_testimonial(){

	$title = wp_strip_all_tags($_POST["testimonialName"]);
	$prof = wp_strip_all_tags($_POST["testimonialProf"]);
	$message = wp_strip_all_tags($_POST["testimonialMessage"]);

	$args = array(
		'post_title' => $title,
		'post_content' => $message,
		'post_author' => 1,
		//'post_status' => 'publish',
		'post_type' => 'testimonial',
		'meta_input' => array(
			'_testimonial_profession_value_key' => $prof
		)
	);

	$postID = wp_insert_post( $args );

	echo $postID;

	die();

}
add_action( 'wp_ajax_nopriv_jova_save_user_testimonial_form', 'jova_save_testimonial' );
add_action( 'wp_ajax_jova_save_user_testimonial_form', 'jova_save_testimonial' );

// contact
function jova_save_contact(){

	$title = wp_strip_all_tags($_POST["contactName"]);
	$email = wp_strip_all_tags($_POST["contactEmail"]);
	$message = wp_strip_all_tags($_POST["contactMessage"]);

	$args = array(
		'post_title' => $title,
		'post_content' => $message,
		'post_author' => 1,
		'post_status' => 'publish',
		'post_type' => 'message',
		'meta_input' => array(
			'_contact_email_value_key' => $email
		)
	);

	$postID = wp_insert_post( $args );

	echo $postID;

	die();

}
add_action( 'wp_ajax_nopriv_jova_save_user_contact_form', 'jova_save_contact' );
add_action( 'wp_ajax_jova_save_user_contact_form', 'jova_save_contact' );
