<?php
/**
 * Clean up the_excerpt()
 *
 */
function teruterubozu_excerpt_more() {
    if ( ! is_admin() ) :
        return ' <a class="excerpt-more" href="' . get_permalink() . '" title="' . esc_html__( 'Continue reading', 'teruterubozu' ) . '" rel="bookmark"><span class="screen-reader-text">' . esc_html__( 'Continue reading ', 'teruterubozu' ) . '</span>&raquo;</a>';
    endif;
}

add_filter( 'excerpt_more', 'teruterubozu_excerpt_more' );


/**
 * Change excerpt lenght
 *
 * https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length
 *
 */
function teruterubozu_custom_excerpt_length( $length ) {
    if ( is_admin() ) :
        return $length;
    else :
        return 26;
    endif;
}

add_filter( 'excerpt_length',  'teruterubozu_custom_excerpt_length', 999 );
