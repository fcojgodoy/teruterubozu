<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Add <body> class if post haven't thumbnail
 */
 function add_no_featured_image_body_class( $classes ) {
   global $post;

   if ( isset ( $post->ID ) && !get_the_post_thumbnail($post->ID)) {
     $classes[] = 'no-featured-image';
   }

   return $classes;
}
add_filter( 'body_class', __NAMESPACE__ . '\\add_no_featured_image_body_class' );

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' <a class="excerpt-more" href="' . get_permalink() . '">»</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Create numeric pagination
 * http://www.hudku.com/blog/add-numbered-page-navigation-wordpress-plugin/
 * http://codex.wordpress.org/Function_Reference/paginate_links
 */
function wp_pagination() {
  global $wp_query;
  $big = 12345678;
  $page_format = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array',
    'prev_next' => false
  ) );
  if (is_array($page_format) ) {
  $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
    echo '<div><ul>';
    echo '<li><span>'. $paged . ' ' . __('of', 'sage') . ' ' . $wp_query->max_num_pages .'</span></li>';
    // foreach ( $page_format as $page ) {
    //         echo "<li>$page</li>";
    // }
    echo '</ul></div>';
  }
}

/**
 * Change excerpt lenght
 * https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length
 */
function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length',  __NAMESPACE__ . '\\custom_excerpt_length', 999 );
