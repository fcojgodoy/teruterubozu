<?php
/**
 * teruterubozu functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package teruterubozu
 */


/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/setup.php';


/**
 * Set content width.
 */
require get_template_directory() . '/inc/content-width.php';


/**
 * Enqueue scripts and styles..
 */
require get_template_directory() . '/inc/enqueue.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Add theme modifications
 */
require get_template_directory() . '/inc/theme-mods.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Google Fonts.
 */
require get_template_directory() . '/inc/googlefonts.php';


/**
 * Custom `the excerpt`.
 */
require get_template_directory() . '/inc/the-excerpt.php';


/**
 * Modify editor.
 */
require get_template_directory() . '/inc/editor.php';


/**
 * Add classes to `li` elements in menu.
 */
require get_template_directory() . '/inc/add-classes-menu-items.php';


/**
 * Add user contact methods
 */
require get_template_directory() . '/inc/user-contactmethods.php';


/**
 * Required plugins activation.
 */
require get_template_directory() . '/inc/plugins-activation/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/plugins-activation/tgm-plugins-activation.php';
