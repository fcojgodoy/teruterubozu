<?php
/**
 * Add theme mods.
 *
 * @package teruterubozu
 * @since 0.2.2
 */

function themeslug_customize_register( $wp_customize ) {

    // Change 'Header Image' section name
    $wp_customize -> get_section( 'header_image' ) -> title = __( 'Header', 'teruterubozu' );

    $wp_customize -> add_setting(
        'header-main-text',
        array(
            'default' => __( 'Modify in Header section within Customize', 'teruterubozu' ),
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
            'default' => __( 'This text can also be modified within the Header section of the Customize', 'teruterubozu' ),
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

}

add_action( 'customize_register', 'themeslug_customize_register' );


?>
