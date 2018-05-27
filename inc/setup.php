<?php
/**
 * Theme setup
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package teruterubozu
 */

if ( ! function_exists( 'teruterubozu_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function teruterubozu_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on teruterubozu, use a find and replace
		 * to change 'teruterubozu' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'teruterubozu', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );


		/*
		 * POST THUMBNAILS.
		 *
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


		/*
		 * ADD IMAGE SIZE
		 *
		 * Create images sizes for Post Thumbnails.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_image_size/
		 */
		add_image_size(
			'teruterubozu-max-size',
			3840,
			2160,
			true
		);

		add_image_size(
			'teruterubozu-wide',
			3840,
			210,
			true
		);


		// This theme uses wp_nav_menu() in one location.
		// http://codex.wordpress.org/Function_Reference/register_nav_menus
		register_nav_menus( array(
			'primary_navigation' => esc_html__( 'Primary', 'teruterubozu' ),
		) );


        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
		) );

    }
endif;
add_action( 'after_setup_theme', 'teruterubozu_setup' );
