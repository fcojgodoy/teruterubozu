<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package teruterubozu
 */

get_header(); ?>

<div id="content" class="content o-wrapper u-margin-bottom-large u-margin-bottom-huge@tablet">

	<div class="o-layout">

		<main id="primary" class="site-main o-layout__item u-1/1">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'teruterubozu' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'views/post/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'views/post/content', 'none' );

			endif; ?>

		</main><!-- #primary -->

	</section><!-- .content-area -->

<?php

get_footer();
