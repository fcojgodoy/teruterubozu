<?php
/**
* Template part for displaying author page content.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#author-display
*
* @package teruterubozu
*/

if ( have_posts() ) :

    get_template_part( 'views/header/author', 'header' );

    if ( is_paged() ):

    	get_template_part( 'views/navigation/posts-pagination' );

    endif;

    /* Start the Loop */
    while ( have_posts() ) : the_post();

        get_template_part('views/post/content', get_post_type() );

    endwhile;

    	get_template_part( 'views/navigation/posts-pagination' );

else : ?>

    <div class="alert alert-warning u-margin-bottom u-margin-bottom-large@tablet">

        <?php
        esc_html_e( 'This author has not posts yet.', 'teruterubozu' );
        ?>

    </div>

    <?php get_search_form();

endif; ?>
