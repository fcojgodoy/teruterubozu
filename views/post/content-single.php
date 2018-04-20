<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teruterubozu
 */

?>

<?php while ( have_posts() ) : the_post() ?>

	<article <?php post_class() ?>>

		<header class="entry-header">

			<h1 class="entry-title"><?php the_title() ?></h1>

			<?php get_template_part( 'views/post/entry-meta' ) ?>

		</header>

		<div class="entry-content u-margin-bottom u-margin-bottom-large@tablet">
			<?php the_content() ?>
		</div>

		<!-- Page Links -->
		<?php teruterubozu_link_pages(); ?>

		<?php get_template_part( '/views/post/entry-footer' ) ?>

    	<?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>

  	</article><!-- #post-<?php the_ID(); ?> -->


<?php endwhile; ?>
