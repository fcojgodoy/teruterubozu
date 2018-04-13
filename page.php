<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
			while ( have_posts() ) : the_post();

				get_template_part( 'views/page/content', 'page' );

                comments_template( '/views/post/comments.php' );

			endwhile; // End of the loop.
			?>

		</main><!-- #primary -->

	</div><!-- .content-area -->

</div><!-- #content -->

<?php

get_footer();
