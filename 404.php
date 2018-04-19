<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package teruterubozu
 */

get_header(); ?>

<div id="container" class="site-content o-wrapper u-margin-bottom-large u-margin-bottom-huge@tablet">

    <div class="o-layout">

		<main id="primary" class="site-main">

            <main id="primary" class="site-main error-404 not-found o-layout__item u-1/1">

				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'teruterubozu' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'teruterubozu' ); ?></p>

                    <div class="u-margin-bottom-large">
                        <?php get_search_form() ?>
                    </div>

					<?php
						the_widget( 'WP_Widget_Recent_Posts', array(), 'before_title=<h3 class="widget-title">' );
					?>

					<div class="widget widget_categories">
						<h3 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'teruterubozu' ); ?></h3>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'teruterubozu' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', 'before_title=<h3 class="widget-title">', "after_title=</h3>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud', array(), 'before_title=<h3 class="widget-title">' );
					?>

				</div><!-- .page-content -->

			</section><!-- .error-404 -->

        </main><!-- #primary -->

	</div><!-- .content-area -->

</div><!-- #content -->

<?php get_footer();
