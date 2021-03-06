<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package teruterubozu
 */





if ( ! function_exists( 'teruterubozu_term_cover' ) ) :
/**
 * Print tag cover in a img tag.
 */
function teruterubozu_term_cover() {
    $term_cover_image_url = get_term_meta( get_queried_object()->term_id, 'term_cover_image', true);
    if ( $term_cover_image_url ) :?>
        <img class="hero-img" src="<?php echo esc_url( $term_cover_image_url ) ?>" alt="">
    <?php endif;
}
endif;





/**
 * The formatted output of a list of page links with custom arguments.
 *
 * Displays page links for paginated posts (i.e. includes the . Quicktag one or
 * more times). This tag must be within The Loop.
 *
 * @return string
 *
 * @link https://developer.wordpress.org/reference/functions/wp_link_pages/
 * WordPress function: wp_link_pages.
 */


function teruterubozu_link_pages() {

    $args = array (
        'before'            => '<div class="page-links"><p class="page-links-text">' . esc_html__( 'More pages: ', 'teruterubozu' ) . '</p>',
        'after'             => '</div>',
        'link_before'       => '<span class="page-links-links">',
        'link_after'        => '</span>',
        'next_or_number'    => 'next',
        'separator'         => ' | ',
        'nextpagelink'      => esc_html__( 'Next &raquo;', 'teruterubozu' ),
        'previouspagelink'  => esc_html__( '&laquo; Previous', 'teruterubozu' ),
    );

    wp_link_pages( $args );

}
