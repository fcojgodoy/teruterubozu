<?php
/**
* Template part for displaying author page content.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#author-display
*
* @package teruterubozu
*/

?>

<?php if ( ! have_posts() ) : ?>

	<div class="alert alert-warning u-margin-bottom u-margin-bottom-large@tablet">

		<?php esc_html_e('This author has not posts yet.', 'teruterubozu'); ?>

	</div>

	<?php get_search_form(); ?>

<?php else : ?>

    <?php get_template_part( 'views/header/author', 'header' ); ?>

    <?php if ( is_paged() ): ?>

    	<?php get_template_part( 'views/navigation/numeric-pagination' ); ?>

    <?php endif; ?>

    <?php while ( have_posts() ) : the_post(); ?>

    	<?php get_template_part('views/post/content', get_post_type() ); ?>

    <?php endwhile; ?>

    <?php get_template_part( 'views/navigation/numeric-pagination' ); ?>

<?php endif; ?>
