<?php
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/#content-width
 *
 * @global int $content_width
 */

function teruterubozu_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'teruterubozu_content_width', 810 );
}
add_action( 'after_setup_theme', 'teruterubozu_content_width', 0 );
