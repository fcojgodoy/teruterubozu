<?php
/**
 * Add theme mods.
 *
 * @package teruterubozu
 * @since 0.2.2
 */

function teruterubozu_customize_register( $wp_customize ) {

    // Change 'Header Image' section name
    $wp_customize -> get_section( 'header_image' ) -> title = __( 'Header', 'teruterubozu' );

    $wp_customize -> add_setting(
        'header-main-text',
        array(
            'default' => __( 'Teruterubozu', 'teruterubozu' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    
    $wp_customize -> add_control(
        'header-main-text',
        array(
            'section' => 'header_image',
            'label' => __( 'Header main text', 'teruterubozu' ),
            'description' => __( 'This is the main text in home page header section.', 'teruterubozu' ),
            'active_callback' => 'is_front_page',
        )
    );

    $wp_customize -> add_setting(
        'header-secondary-text',
        array(
            'default' => __( 'Beautiful and simple theme prepared for readability', 'teruterubozu' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    
    $wp_customize -> add_control(
        'header-secondary-text',
        array(
            'section' => 'header_image',
            'label' => __( 'Header secondary text', 'teruterubozu' ),
            'description' => __( 'This is the secondary text in home page header section.', 'teruterubozu' ),
            'active_callback' => 'is_front_page',
        )
    );

    
    $wp_customize -> add_setting(
        'hero-text-color',
        array(
            // 'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    
    $wp_customize -> add_control(
        'hero-text-color',
        array(
            'type' => 'color',
            'section' => 'colors',
            'label' => __( 'Hero header text color', 'teruterubozu' ),
            'description' => __( 'This is the hero header text color.', 'teruterubozu' ),
        )
    );

    
    $wp_customize -> add_setting(
        'blog-header-text-color',
        array(
            // 'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    
    $wp_customize -> add_control(
        'blog-header-text-color',
        array(
            'type' => 'color',
            'section' => 'colors',
            'label' => __( 'Blog page header text color', 'teruterubozu' ),
            'description' => __( 'This is the blog header text color.', 'teruterubozu' ),
        )
    );

}

add_action( 'customize_register', 'teruterubozu_customize_register' );


/**
 * Output CSS for blog page header text color with wp_add_inline_style
 */
function mytheme_customizer_css() {

	// wp_enqueue_style( 'theme-mod-text-color', get_template_directory_uri() . '/assets/styles/theme.min.css' ); //Enqueue your main stylesheet
	$handle = 'teruterubozu-style';  // Swap in your CSS Stylesheet ID
	//$css = '';
	$hero_text_color = get_theme_mod( 'hero-text-color' ); // Assigning it to a variable to keep the markup clean.
	$blog_header_text_color = get_theme_mod( 'blog-header-text-color' ); // Assigning it to a variable to keep the markup clean.
	$css = ( $blog_header_text_color !== '') ? sprintf('
    	.blog-page-title,
        .blog-page-subtitle {
    		color : %s;
    	}
	', $blog_header_text_color ) : '';
	if ( $css ) {
	    wp_add_inline_style( $handle  , $css );
	}
	$css2 = ( $hero_text_color !== '') ? sprintf('
    	.hero-title,
        .hero-description {
    		color : %s !important;
    	}
	', $hero_text_color ) : '';
	if ( $css2 ) {
	    wp_add_inline_style( $handle  , $css2 );
	}

}

add_action( 'wp_enqueue_scripts', 'mytheme_customizer_css' );


?>
