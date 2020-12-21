<?php

// main control
// ####################
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_main_title', array(
  'label'      => 'Main section title',
  'section'    => 'jova_main',
  'settings'   => 'jova_main_title',
  'type'       => 'textarea'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_main_description', array(
  'label'      => 'Main section description',
  'section'    => 'jova_main',
  'settings'   => 'jova_main_description',
  'type'       => 'textarea'
) ) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jova_main_image', array(
  'label'      => 'Main section image',
  'section'    => 'jova_main',
  'settings'   => 'jova_main_image',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_main_contact_title', array(
  'label'      => 'Main section contact title',
  'section'    => 'jova_main',
  'settings'   => 'jova_main_contact_title',
  'type'       => 'textarea'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_main_box_title', array(
  'label'      => 'Main section box title',
  'section'    => 'jova_main',
  'settings'   => 'jova_main_box_title',
  'type'       => 'text'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_main_button_title', array(
  'label'      => 'Main section button title',
  'section'    => 'jova_main',
  'settings'   => 'jova_main_button_title',
  'type'       => 'text'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_main_button_url', array(
  'label'      => 'Main section button url',
  'section'    => 'jova_main',
  'settings'   => 'jova_main_button_url',
  'type'       => 'text'
) ) );

// about control
// ####################
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jova_about_icon', array(
  'label'      => 'About section icon',
  'section'    => 'jova_about',
  'settings'   => 'jova_about_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_about_mainTitle', array(
  'label'      => 'About section main title',
  'section'    => 'jova_about',
  'settings'   => 'jova_about_mainTitle',
  'type'       => 'text'
) ) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jova_about_image', array(
  'label'      => 'About section image',
  'section'    => 'jova_about',
  'settings'   => 'jova_about_image',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_about_title', array(
  'label'      => 'About section title',
  'section'    => 'jova_about',
  'settings'   => 'jova_about_title',
  'type'       => 'textarea'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_about_description', array(
  'label'      => 'About section description',
  'section'    => 'jova_about',
  'settings'   => 'jova_about_description',
  'type'       => 'textarea'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_about_btn_text', array(
  'label'      => 'About section button text',
  'section'    => 'jova_about',
  'settings'   => 'jova_about_btn_text',
  'type'       => 'text'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_about_btn_url', array(
  'label'      => 'About section button url',
  'section'    => 'jova_about',
  'settings'   => 'jova_about_btn_url',
  'type'       => 'text'
) ) );

// offer control
// ####################

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jova_offer_icon', array(
  'label'      => 'Offer section icon',
  'section'    => 'jova_offer',
  'settings'   => 'jova_offer_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_offer_mainTitle', array(
  'label'      => 'Offer section main title',
  'section'    => 'jova_offer',
  'settings'   => 'jova_offer_mainTitle',
  'type'       => 'text'
) ) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_offer_selectCat', array(
  'label'      => 'Offer section select catagory',
  'section'    => 'jova_offer',
  'settings'   => 'jova_offer_selectCat',
  'type'       => 'select',
  'choices' => get_categories_select()
) ) );

// portfolio control
// ####################

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jova_portfolio_icon', array(
  'label'      => 'Portfolio section icon',
  'section'    => 'jova_portfolio',
  'settings'   => 'jova_portfolio_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_portfolio_mainTitle', array(
  'label'      => 'Porfolio section main title',
  'section'    => 'jova_portfolio',
  'settings'   => 'jova_portfolio_mainTitle',
  'type'       => 'text'
) ) );

// blog control
// ####################

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jova_blog_icon', array(
  'label'      => 'Blog section icon',
  'section'    => 'jova_blog',
  'settings'   => 'jova_blog_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_blog_mainTitle', array(
  'label'      => 'Blog section main title',
  'section'    => 'jova_blog',
  'settings'   => 'jova_blog_mainTitle',
  'type'       => 'text'
) ) );

// testimonial control
// ####################

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jova_testimonial_icon', array(
  'label'      => 'Testimonial section icon',
  'section'    => 'jova_testimonial',
  'settings'   => 'jova_testimonial_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_testimonial_mainTitle', array(
  'label'      => 'Testimonial section main title',
  'section'    => 'jova_testimonial',
  'settings'   => 'jova_testimonial_mainTitle',
  'type'       => 'text'
) ) );

// contact control
// ####################

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'jova_contact_icon', array(
  'label'      => 'Contact section icon',
  'section'    => 'jova_contact',
  'settings'   => 'jova_contact_icon',
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_contact_mainTitle', array(
  'label'      => 'Contact section main title',
  'section'    => 'jova_contact',
  'settings'   => 'jova_contact_mainTitle',
  'type'       => 'text'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_contact_phone', array(
  'label'      => 'Phone number section',
  'section'    => 'jova_contact',
  'settings'   => 'jova_contact_phone',
  'type'       => 'text'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_contact_facebook_url', array(
  'label'      => 'Facebook url section',
  'section'    => 'jova_contact',
  'settings'   => 'jova_contact_facebook_url',
  'type'       => 'text'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_contact_gmail', array(
  'label'      => 'Gmail address section',
  'section'    => 'jova_contact',
  'settings'   => 'jova_contact_gmail',
  'type'       => 'text'
) ) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jova_contact_instagram_url', array(
  'label'      => 'Instagram url section',
  'section'    => 'jova_contact',
  'settings'   => 'jova_contact_instagram_url',
  'type'       => 'text'
) ) );
