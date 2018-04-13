<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teruterubozu
 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>

<?php get_template_part( 'views/header/head' ) ?>

<body <?php body_class(); ?>>

<!-- Pushy - menu -->
<?php get_template_part( 'views/navigation/menu' ); ?>

<!-- Pushy - Site Overlay -->
<div class="site-overlay"></div>

<div id="container" class="container" role="document">

	<!-- Screen reader text -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'teruterubozu' ); ?></a>

	<?php get_template_part( 'views/header/page', 'header' ) ?>
