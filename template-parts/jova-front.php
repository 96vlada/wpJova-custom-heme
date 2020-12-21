<?php
// #################
// main section
get_template_part(
  'template-parts/front/jova',
  'mainSection',
  array(
  'main_section_data' => array(
    'jova_main_title' => get_theme_mod('jova_main_title', ''),
    'jova_main_description' => get_theme_mod('jova_main_description', ''),
    'jova_main_image' => get_theme_mod('jova_main_image', ''),
    'jova_main_contact_title' => get_theme_mod('jova_main_contact_title', ''),

    'jova_main_box_title' => get_theme_mod('jova_main_box_title', ''),

    'jova_main_phone_number' => get_theme_mod('jova_contact_phone', ''),
    'jova_main_facebook_url' => get_theme_mod('jova_contact_facebook_url', ''),
    'jova_main_gmail' => get_theme_mod('jova_contact_gmail', ''),
    'jova_main_instagram_url' => get_theme_mod('jova_contact_instagram_url', ''),

    'jova_main_button_title' => get_theme_mod('jova_main_button_title', ''),
    'jova_main_button_url' => get_theme_mod('jova_main_button_url', ''),

    // 'jova_main_form_name' => get_theme_mod('jova_main_form_name', ''),
    // 'jova_main_form_email' => get_theme_mod('jova_main_form_email', ''),
  )));

  // #################
  // about section
  get_template_part(
    'template-parts/front/jova',
    'aboutSection',
    array(
    'about_section_data' => array(
      'jova_about_icon' => get_theme_mod('jova_about_icon', ''),
      'jova_about_mainTitle' => get_theme_mod('jova_about_mainTitle', ''),
      'jova_about_image' => get_theme_mod('jova_about_image', ''),
      'jova_about_title' => get_theme_mod('jova_about_title', ''),
      'jova_about_description' => get_theme_mod('jova_about_description', ''),
      'jova_about_btn_text' => get_theme_mod('jova_about_btn_text', ''),
      'jova_about_btn_url' => get_theme_mod('jova_about_btn_url', ''),
    )));

    // #################
    // offer section
    get_template_part(
      'template-parts/front/jova',
      'offerSection',
      array(
      'offer_section_data' => array(
        'jova_offer_icon' => get_theme_mod('jova_offer_icon', ''),
        'jova_offer_mainTitle' => get_theme_mod('jova_offer_mainTitle', ''),
        'jova_offer_selectCat' => get_theme_mod('jova_offer_selectCat', ''),
      )));

    // #################
    // portfolio section
    get_template_part(
      'template-parts/front/jova',
      'portfolioSection',
      array(
      'portfolio_section_data' => array(
        'jova_portfolio_icon' => get_theme_mod('jova_portfolio_icon', ''),
        'jova_portfolio_mainTitle' => get_theme_mod('jova_portfolio_mainTitle', ''),
      )));


    // #################
    // blog section
    get_template_part(
      'template-parts/front/jova',
      'blogSection',
      array(
      'blog_section_data' => array(
        'jova_blog_icon' => get_theme_mod('jova_blog_icon', ''),
        'jova_blog_mainTitle' => get_theme_mod('jova_blog_mainTitle', ''),
      )));


    // #################
    // testimonial section
    get_template_part(
      'template-parts/front/jova',
      'testimonialSection',
      array(
      'testimonial_section_data' => array(
        'jova_testimonial_icon' => get_theme_mod('jova_testimonial_icon', ''),
        'jova_testimonial_mainTitle' => get_theme_mod('jova_testimonial_mainTitle', ''),
      )));

    // #################
    // contact section
    get_template_part(
      'template-parts/front/jova',
      'contactSection',
      array(
      'contact_section_data' => array(
        'jova_contact_icon' => get_theme_mod('jova_contact_icon', ''),
        'jova_contact_mainTitle' => get_theme_mod('jova_contact_mainTitle', ''),

        'jova_contact_phone' => get_theme_mod('jova_contact_phone', ''),
        'jova_contact_facebook_url' => get_theme_mod('jova_contact_facebook_url', ''),
        'jova_contact_gmail' => get_theme_mod('jova_contact_gmail', ''),
        'jova_contact_instagram_url' => get_theme_mod('jova_contact_instagram_url', ''),

        // data for contact form
        'jova_main_form_name' => get_theme_mod('jova_main_form_name', ''),
        'jova_main_form_email' => get_theme_mod('jova_main_form_email', ''),
      )));
