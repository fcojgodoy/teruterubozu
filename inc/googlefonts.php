<?php
/**
* Google Fonts functions
*
* You must to call to teruterubozu_fonts_url() in enqueue script and style function
* in function.php like so...
*
wp_enqueue_style( 'teruterubozu-fonts', teruterubozu_fonts_url(), array(), null );
*
* @package teruterubozu
*/


if ( ! function_exists( 'teruterubozu_fonts_url' ) ) :
	/**
	* Register Google fonts for theme use.
	*
	* Create your own teruterubozu_fonts_url() function to override in a child theme.
	*
	* @since teruterubozu 0.0.1
	*
	* @return string Google fonts URL for the theme.
	*/
	function teruterubozu_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by this font family, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'teruterubozu' ) ) {
			$fonts[] = 'Merriweather:300,300i,700,700i';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}

		return $fonts_url;
	}
endif;

/**
* Add preconnect for Google Fonts.
*
* @since teruterubozu 0.0.1
*
* @param array  $urls           URLs to print for resource hints.
* @param string $relation_type  The relation type the URLs are printed.
* @return array $urls           URLs to print for resource hints.
*/
function teruterubozu_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'teruterubozu-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'teruterubozu_resource_hints', 10, 2 );
