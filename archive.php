<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teruterubozu
 */

get_header(); ?>

<div id="content" class="content o-wrapper u-margin-bottom-large u-margin-bottom-huge@tablet">

	<div class="o-layout">

		<main id="primary" class="site-main o-layout__item u-1/1">

			<?php
			if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'views/post/content', get_post_type() );

				endwhile;

				get_template_part( 'views/navigation/numeric-pagination' );

			else :

				get_template_part( 'views/post/content', 'none' );

			endif; ?>

		</main><!-- #primary -->

	</div><!-- .content-area -->

</div><!-- #content -->

<?php

get_footer();
