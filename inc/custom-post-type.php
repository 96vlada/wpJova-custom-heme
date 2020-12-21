<?php
// portfolio
function jova_custom_post_portfolio() {

  $labels = array(
    'name'               => _x( 'Portfolios', 'post type general name' ),
    'singular_name'      => _x( 'Portfolio', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'portfolio' ),
    'add_new_item'       => __( 'Add New Portfolio' ),
    'edit_item'          => __( 'Edit Portfolio' ),
    'new_item'           => __( 'New Portfolio' ),
    'all_items'          => __( 'All Portfolios' ),
    'view_item'          => __( 'View Portfolio' ),
    'search_items'       => __( 'Search Portfolios' ),
    'not_found'          => __( 'No portfolios found' ),
    'not_found_in_trash' => __( 'No portfolios found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolios',
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our portfolios and portfolio specific data',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-open-folder',
    'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'portfolio', $args );
}
add_action( 'init', 'jova_custom_post_portfolio' );

// ################
// testimonial
// ################

function jova_custom_post_testimonials() {

  $labels = array(
    'name'               => _x( 'Testimonials', 'post type general name' ),
    'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'testimonial' ),
    'add_new_item'       => __( 'Add New Testimonial' ),
    'edit_item'          => __( 'Edit Testimonial' ),
    'new_item'           => __( 'New Testimonial' ),
    'all_items'          => __( 'All Testimonials' ),
    'view_item'          => __( 'View Testimonial' ),
    'search_items'       => __( 'Search Testimonials' ),
    'not_found'          => __( 'No Testimonial found' ),
    'not_found_in_trash' => __( 'No testimonials found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Testimonials',
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our testimonials and testimonial specific data',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-format-quote',
    'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'testimonial', $args );
}

function jova_set_testimonial_columns()
{
  $newColumns = array();
  $newColumns['cb'] = '<input type="checkbox" />';
	$newColumns['title'] = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['profession'] = 'profession';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

function jova_testimonial_custom_column($column, $post_id)
{
  switch( $column ){

		case 'message' :
			echo get_the_excerpt();
			break;

		case 'profession' :
			//email column
      $profession = get_post_meta( $post_id, '_testimonial_profession_value_key', true );
			echo '<p><b>'.$profession.'</b></p>';
			break;
	}
}

add_action( 'manage_testimonial_posts_custom_column', 'jova_testimonial_custom_column', 10, 2 );
add_filter( 'manage_testimonial_posts_columns', 'jova_set_testimonial_columns' );
add_action( 'init', 'jova_custom_post_testimonials' );


/* TESTIMONIAL META BOXES */

function jova_testimonial_add_meta_box() {
	add_meta_box( 'testimonial_profession', 'Testimonial', 'jova_testimonial_profession_callback', 'testimonial', 'side' );
}

function jova_testimonial_profession_callback( $post ) {
	wp_nonce_field( 'jova_save_testimonial_profession_data', 'jova_testimonial_profession_meta_box_nonce' );

	$value = get_post_meta( $post->ID, '_testimonial_profession_value_key', true );

	echo '<label for="jova_testimonial_profession_field">User profession: </lable>';
	echo '<input type="text" id="jova_testimonial_profession_field" name="jova_testimonial_profession_field" value="' . esc_attr( $value ) . '" size="25" />';
}

function jova_save_testimonial_profession_data( $post_id ) {

	if( ! isset( $_POST['jova_testimonial_profession_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['jova_testimonial_profession_meta_box_nonce'], 'jova_save_testimonial_profession_data') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['jova_testimonial_profession_field'] ) ) {
		return;
	}

	$my_data = sanitize_text_field( $_POST['jova_testimonial_profession_field'] );

	update_post_meta( $post_id, '_testimonial_profession_value_key', $my_data );

}

add_action( 'add_meta_boxes', 'jova_testimonial_add_meta_box' );
add_action( 'save_post', 'jova_save_testimonial_profession_data' );

// ################
// contact
// ################

function jova_custom_post_messages() {

  $labels = array(
    'name'               => _x( 'Messages', 'post type general name' ),
    'singular_name'      => _x( 'Message', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'message' ),
    'add_new_item'       => __( 'Add New Message' ),
    'edit_item'          => __( 'Edit Message' ),
    'new_item'           => __( 'New Message' ),
    'all_items'          => __( 'All Messages' ),
    'view_item'          => __( 'View Message' ),
    'search_items'       => __( 'Search Messages' ),
    'not_found'          => __( 'No Message found' ),
    'not_found_in_trash' => __( 'No messages found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Messages',
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our messages and message specific data',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-email-alt',
    'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'message', $args );
}

function jova_set_message_columns()
{
  $newColumns = array();
  $newColumns['cb'] = '<input type="checkbox" />';
	$newColumns['title'] = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['email'] = 'Email';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

function jova_message_custom_column($column, $post_id)
{
  switch( $column ){

		case 'message' :
			echo get_the_excerpt();
			break;

		case 'email' :
			//email column
      $email = get_post_meta( $post_id, '_contact_email_value_key', true );
			echo '<p><b>'.$email.'</b></p>';
			break;
	}
}

add_action( 'manage_message_posts_custom_column', 'jova_message_custom_column', 10, 2 );
add_filter( 'manage_message_posts_columns', 'jova_set_message_columns' );
add_action( 'init', 'jova_custom_post_messages' );

/* CONTACT META BOXES */

function jova_contact_add_meta_box() {
	add_meta_box( 'contact_email', 'Contact', 'jova_contact_email_callback', 'message', 'side' );
}

function jova_contact_email_callback( $post ) {
	wp_nonce_field( 'jova_save_contact_email_data', 'jova_contact_email_meta_box_nonce' );


	$email_meta_field_value = get_post_meta( $post->ID, '_contact_email_value_key', true );
//
	echo '<label for="jova_contact_email_field">User email: </lable>';
	echo '<input type="email" id="jova_contact_email_field" name="jova_contact_email_field" value="' . esc_attr( $email_meta_field_value ) . '" size="25" />';
}

function jova_save_contact_email_data( $post_id ) {

	if( ! isset( $_POST['jova_contact_email_meta_box_nonce'] ) ){
		return;
	}

	if( ! wp_verify_nonce( $_POST['jova_contact_email_meta_box_nonce'], 'jova_save_contact_email_data') ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}

	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['jova_contact_email_field'] ) ) {
		return;
	}

	$contact_email_my_data = sanitize_text_field( $_POST['jova_contact_email_field'] );

	update_post_meta( $post_id, '_contact_email_value_key', $contact_email_my_data );

}

add_action( 'add_meta_boxes', 'jova_contact_add_meta_box' );
add_action( 'save_post', 'jova_save_contact_email_data' );
