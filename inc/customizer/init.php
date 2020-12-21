<?php

function get_categories_select() {
  $args = array(
    "hide_empty" => 0,
    "type"      => "post",
    "orderby"   => "name",
    "order"     => "ASC",
    "parent" => 0
  );
 $teh_cats = get_categories($args);
    $results;
    $count = count($teh_cats);
    for ($i=0; $i < $count; $i++) {
      if (isset($teh_cats[$i]))
        $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
      else
        $count++;
    }
  return $results;
}

function jova_theme_customizer($wp_customize)
{
  require get_template_directory() . '/inc/customizer/panel.php';

  require get_template_directory() . '/inc/customizer/section.php';

  require get_template_directory() . '/inc/customizer/setting.php';

  require get_template_directory() . '/inc/customizer/control.php';

}

add_action( "customize_register", 'jova_theme_customizer' );
