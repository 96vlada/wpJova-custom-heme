<?php

/*
@package jovadevtheme
    ========================
        WALKER NAV CLASS
    ========================
*/

class JovaDev_Walker_Nav_Primary extends Walker_Nav_menu
{
    public function start_lvl(&$output, $depth = 0, $args = array())
    { //ul
        $indent = str_repeat("\t", $depth);
        $left_dropdown = ($depth > 0) ? ' left' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$left_dropdown depth_$depth\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    { //li a span


      $indent = ( $depth ) ? str_repeat("\t",$depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		// $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = "nav-item";
    $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		// $classes[] = 'menu-item-' . $item->ID;
		// if( $depth && $args->walker->has_children ){
		// 	$classes[] = 'dropdown-submenu';
		// }

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );

    $class_names = ' class="' . esc_attr($class_names) . '"';

    // $about_item_id = ($item->url == "#jova-about-section") ? ' id="jova-about-section"' : "" ;
		// $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		// $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $value . $class_names . $li_attributes . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

		$attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
    $a_class = ' class="nav-link"';
		$item_output = $args->before;
		$item_output .= '<a' .$a_class . " " . $attributes . '><h3>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</h3></a>';
		$item_output .= $args->after;

		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

  }
}
