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
    ?>
        <img class="site-header-img" src="<?php echo esc_url( $term_cover_image_url ) ?>" alt="">
    <?php
}
endif;





if ( ! function_exists( 'teruterubozu_numeric_posts_pagination' ) ) :
/**
* Create numeric pagination
*
* http://www.hudku.com/blog/add-numbered-page-navigation-wordpress-plugin/
* http://codex.wordpress.org/Function_Reference/paginate_links
*/
function teruterubozu_numeric_posts_pagination() {

	global $wp_query;

	$big = 12345678;

	$page_format = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var( 'paged' ) ),
		'total' => $wp_query->max_num_pages,
		'type'  => 'array',
		'prev_next' => false
	) );

	if ( is_array( $page_format ) ) {
		$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		// echo '<div><ul>';
		echo '<span>' . esc_html( __( 'Page', 'teruterubozu' ) ) . ' ' . esc_html( $paged ) . ' ' . esc_html( __( 'of ', 'teruterubozu' ) ) . esc_html( $wp_query->max_num_pages ) .'</span>';
		// foreach ( $page_format as $page ) {
		//         echo "<li>$page</li>";
		// }
		// echo '</ul></div>';
	}
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
        'before'            => '<div class="page-links"><p class="page-links-text">' . __( 'More pages: ', 'teruterubozu' ) . '</p>',
        'after'             => '</div>',
        'link_before'       => '<span class="page-links-links">',
        'link_after'        => '</span>',
        'next_or_number'    => 'next',
        'separator'         => ' | ',
        'nextpagelink'      => __( 'Next &raquo', 'teruterubozu' ),
        'previouspagelink'  => __( '&laquo Previous', 'teruterubozu' ),
    );

    wp_link_pages( $args );

}
