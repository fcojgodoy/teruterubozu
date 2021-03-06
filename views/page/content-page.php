<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teruterubozu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'u-margin-bottom-large u-margin-bottom-huge@tablet' ); ?>>

	<?php if ( ! is_front_page() ): ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">

		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'teruterubozu' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>

		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'teruterubozu' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->

	<?php endif; ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>

</article><!-- #post-<?php the_ID(); ?> -->
