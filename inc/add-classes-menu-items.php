<?php

function teruterubozu_add_class_to_nav_item( $classes, $item, $args ) {
  if( $args->theme_location == 'primary_navigation' ) {
    $classes[] = 'main-menu-item';
  }
  return $classes;
}
add_filter( 'nav_menu_css_class', 'teruterubozu_add_class_to_nav_item', 1, 3 );
