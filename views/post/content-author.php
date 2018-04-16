<?php
/**
* Template part for displaying author page content.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#author-display
*
* @package teruterubozu
*/

get_template_part( 'views/header/author', 'header' ); ?>

<?php
if ( is_paged() ):

	get_template_part( 'views/navigation/numeric-pagination' );

endif; ?>

<?php
if ( have_posts() ) :

    /* Start the Loop */
    while ( have_posts() ) : the_post();

        get_template_part('views/post/content', get_post_type() );

    endwhile;

else : ?>

    <div class="alert alert-warning u-margin-bottom u-margin-bottom-large@tablet">

        <?php
            $author = get_user_by( 'slug', get_query_var( 'author_name' ) );
            esc_html_e( 'This author has not posts yet.', 'teruterubozu' );

        ?>

    </div>

    <?php get_search_form();

endif; ?>

<?php
if ( is_paged() ):

	get_template_part( 'views/navigation/numeric-pagination' );

endif; ?>
