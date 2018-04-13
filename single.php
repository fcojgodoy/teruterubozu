<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package teruterubozu
 */

get_header(); ?>

<div id="content" class="content o-wrapper u-margin-bottom-large u-margin-bottom-huge@tablet">

	<div class="o-layout">

		<main id="primary" class="site-main o-layout__item u-1/1">

			<?php get_template_part( 'views/post/content', 'single' ); ?>

		</main><!-- #primary -->

	</div><!-- .content-area -->

</div><!-- #content -->

<?php get_template_part( 'views/navigation/posts-navigation' ) ?>

<?php

get_footer();
