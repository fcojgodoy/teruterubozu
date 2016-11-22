<?php
function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 95,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


/**
 * Output custom logo
 */
// function theme_prefix_the_custom_logo() {
// 	if ( function_exists( 'the_custom_logo' ) ) {
// 		the_custom_logo();
// 	}
// }
