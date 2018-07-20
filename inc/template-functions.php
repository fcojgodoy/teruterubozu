<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package teruterubozu
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function teruterubozu_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
		$classes[] = 'is-archive';
	}

	if ( 
        is_home() && has_post_thumbnail( get_queried_object_id() ) ||
        is_front_page() && get_header_image() ||
        is_tag() && get_term_meta( get_queried_object()->term_id, 'term_cover_image', true) ||
        is_author() && get_the_author_meta( 'author_cover_image' ) ||
        ( is_single() || is_page() ) && get_the_post_thumbnail()
         ) :
		$classes[] = 'has-thumbnail';
	endif;

	return $classes;
}
add_filter( 'body_class', 'teruterubozu_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function teruterubozu_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'teruterubozu_pingback_header' );
