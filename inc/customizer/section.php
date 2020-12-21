<?php
// main section
$wp_customize->add_section('jova_main',  array(
  'title' => 'Main section',
  'panel' => 'jova_main_panel',
  'prirority' => 10,
) );
// about section
$wp_customize->add_section('jova_about',  array(
  'title' => 'About section',
  'panel' => 'jova_main_panel',
  'prirority' => 20,
) );

// offer section
$wp_customize->add_section('jova_offer',  array(
  'title' => 'Offer section',
  'panel' => 'jova_main_panel',
  'prirority' => 30,
) );

// porfolio section
$wp_customize->add_section('jova_portfolio',  array(
  'title' => 'Portfolio section',
  'panel' => 'jova_main_panel',
  'prirority' => 40,
) );

// blog section
$wp_customize->add_section('jova_blog',  array(
  'title' => 'Blog section',
  'panel' => 'jova_main_panel',
  'prirority' => 50,
) );

// testimonial section
$wp_customize->add_section('jova_testimonial',  array(
  'title' => 'Testimonial section',
  'panel' => 'jova_main_panel',
  'prirority' => 60,
) );

// contact section
$wp_customize->add_section('jova_contact',  array(
  'title' => 'Contact section',
  'panel' => 'jova_main_panel',
  'prirority' => 70,
) );
