 <?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 */

function teruterubozu_scripts() {
	$the_theme = wp_get_theme();

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'teruterubozu-fonts', teruterubozu_fonts_url(), array(), null );

	wp_enqueue_style( 'teruterubozu-style', get_template_directory_uri() . '/assets/styles/theme.css', array(), '20180306', 'screen' );

	wp_enqueue_script( 'teruterubozu-functions', get_template_directory_uri() . '/assets/scripts/main.min.js', array( 'jquery' ), '20180307', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'teruterubozu_scripts' );
