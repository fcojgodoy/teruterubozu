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
			// 'flex-width'  => true,
			// 'flex-height' => true,
		) );

        // Define and register starter content to showcase the theme on new sites.
    	$starter_content = array(
    		'widgets'     => array(
    			// Place three core-defined widgets in the sidebar area.
    			'sidebar-1' => array(
    				'text_business_info',
    				'search',
    				'text_about',
    			),

    			// Add the core-defined business info widget to the footer 1 area.
    			'sidebar-2' => array(
    				'text_business_info',
    			),

    			// Put two core-defined widgets in the footer 2 area.
    			'sidebar-3' => array(
    				'text_about',
    				'search',
    			),
    		),

    		// Specify the core-defined pages to create and add custom thumbnails to some of them.
    		'posts'       => array(
    			'home',
    			'about'            => array(
    				'thumbnail' => '{{image-sandwich}}',
    			),
    			'contact'          => array(
    				'thumbnail' => '{{image-espresso}}',
    			),
    			'blog'             => array(
    				'thumbnail' => '{{image-coffee}}',
    			),
    			'homepage-section' => array(
    				'thumbnail' => '{{image-espresso}}',
    			),
    		),

    		// Create the custom image attachments used as post thumbnails for pages.
    		'attachments' => array(
    			'image-espresso' => array(
    				'post_title' => _x( 'Espresso', 'Theme starter content', 'teruterubozu' ),
    				'file'       => 'assets/images/espresso.jpg', // URL relative to the template directory.
    			),
    			'image-sandwich' => array(
    				'post_title' => _x( 'Sandwich', 'Theme starter content', 'teruterubozu' ),
    				'file'       => 'assets/images/sandwich.jpg',
    			),
    			'image-coffee'   => array(
    				'post_title' => _x( 'Coffee', 'Theme starter content', 'teruterubozu' ),
    				'file'       => 'assets/images/coffee.jpg',
    			),
    		),

    		// Default to a static front page and assign the front and posts pages.
    		'options'     => array(
    			'show_on_front'  => 'page',
    			'page_on_front'  => '{{home}}',
    			'page_for_posts' => '{{blog}}',
    		),

    		// Set the front page section theme mods to the IDs of the core-registered pages.
    		'theme_mods'  => array(
    			'panel_1' => '{{homepage-section}}',
    			'panel_2' => '{{about}}',
    			'panel_3' => '{{blog}}',
    			'panel_4' => '{{contact}}',
    		),

    		// Set up nav menus for each of the two areas registered in the theme.
    		'nav_menus'   => array(
    			// Assign a menu to the "primary_navigation" location.
    			'primary_navigation'    => array(
    				'name'  => __( 'Primary navigation', 'teruterubozu' ),
    				'items' => array(
    					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
    					'page_about',
    					'page_blog',
    					'page_contact',
    				),
    			),

    			// Assign a menu to the "social" location.
    			'social' => array(
    				'name'  => __( 'Social Links Menu', 'teruterubozu' ),
    				'items' => array(
    					'link_yelp',
    					'link_facebook',
    					'link_twitter',
    					'link_instagram',
    					'link_email',
    				),
    			),
    		),
    	);

        /**
    	 * Filters Teruterubozu array of starter content.
    	 *
    	 * @since Teruterubozu 0.2.7
    	 *
    	 * @param array $starter_content Array of starter content.
    	 */
    	$starter_content = apply_filters( 'teruterubozu_starter_content', $starter_content );

    	add_theme_support( 'starter-content', $starter_content );

    }
endif;
add_action( 'after_setup_theme', 'teruterubozu_setup' );
