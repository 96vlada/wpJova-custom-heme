<?php

/* Activate Nav Menu Option */
function jovadev_register_nav_menu()
{
    register_nav_menu('primary', 'Header Navigation Menu');
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'jovadev_register_nav_menu');
