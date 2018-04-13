<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teruterubozu
 */

?>

	<footer class="content-info">
		<div class="o-layout u-padding-small">
			<div class="o-layout__item u-1/2 copyright">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name') ?></a> &copy; <?php echo date('Y') ?>
			</div>
			<div class="o-layout__item u-1/2 poweredby"><?php _e( 'Proudly published with ', 'teruterubozu' ) ?>
				<a href="https://wordpress.org">WordPress</a>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
