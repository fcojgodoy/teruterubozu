<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package teruterubozu
 */


/**
 * Set up the WordPress core custom header feature.
 *
 * @uses teruterubozu_header_style()
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#custom-header
 */
function teruterubozu_custom_header_setup() {

    $args = array(
        // 'default-image'          => get_template_directory_uri() . '/assets/imgs/header-cover-default.jpg',
		'default-text-color'     => '000000',
		'width'                  => 1600,
		'flex-width'             => true,
		'flex-height'            => true,
		// 'wp-head-callback'       => 'teruterubozu_header_style',
    );

	add_theme_support( 'custom-header', apply_filters( 'teruterubozu_custom_header_args', $args ) );
}
add_action( 'after_setup_theme', 'teruterubozu_custom_header_setup' );




/**
 * Register Default Headers.
 *
 * @since 0.2.1
 * @link https://developer.wordpress.org/reference/functions/register_default_headers/
 */
function teruterubozu_register_default_headers() {

	$headers = array(
		'typewriter' => array(
            'description'   => __( 'Typewriter', 'teruterubozu' ),
			'url'           => '/assets/imgs/header-cover-default.jpg',
			'thumbnail_url' => '/assets/imgs/header-cover-default-thumb.jpg',
		),
		'bench' => array(
            'description'   => __( 'Bench', 'teruterubozu' ),
			'url'           => '/assets/imgs/header-cover-default_2.jpg',
			'thumbnail_url' => '/assets/imgs/header-cover-default_2-thumb.jpg',
		),
	);
	register_default_headers( $headers );

}
add_action( 'after_setup_theme', 'teruterubozu_register_default_headers' );





if ( ! function_exists( 'teruterubozu_header_style' ) ) :

	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see teruterubozu_custom_header_setup()
	 */
	function teruterubozu_header_style() {

		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style>
			<?php
				// Has the text been hidden?
				if ( ! display_header_text() ) :
			?>
				.site-title,
				.site-description {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
				// If the user has set a custom color for the text use that.
				else :
			?>
				.site-title,
				.site-description {
					color: #<?php echo esc_attr( $header_text_color ); ?>;
				}
			<?php endif; ?>
		</style>
		<?php
	}
endif;
