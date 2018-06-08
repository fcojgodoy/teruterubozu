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
            'default' => 'Modify in Header section within Customize',
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
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
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
