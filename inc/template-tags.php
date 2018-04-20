<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package teruterubozu
 */





// TODO:
if ( ! function_exists( 'teruterubozu_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function teruterubozu_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			'<span class="posted-on-copy">' . esc_html_x( 'Published ', 'post date', 'teruterubozu' ) . '</span> %s',
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<div class="posted-on">' . $posted_on . '</div>'; // WPCS: XSS OK.

	}
endif;





// TODO:
if ( ! function_exists( 'teruterubozu_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function teruterubozu_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			'<span class="byeline-copy">' . esc_html_x( 'Written by ', 'post author', 'teruterubozu' ) . '</span> %s',
			'<span class="author vcard"><a class="author-link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<div class="byline"> ' . $byline . '</div>'; // WPCS: XSS OK.

	}
endif;





// TODO:
if ( ! function_exists( 'teruterubozu_entry_comment_info' ) ) :
	/**
	 * Prints HTML with comments information for the current entry.
	 */
	 function teruterubozu_entry_comment_info() {
		 if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			 echo '<div class="comments-link">';
			 comments_popup_link(
				 sprintf(
					 wp_kses(
						 /* translators: %s: post title */
						 __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'teruterubozu' ),
						 array(
							 'span' => array(
								 'class' => array(),
							 ),
						 )
					 ),
					 get_the_title()
				 )
			 );
			 echo '</div>';
		 }
	 }
endif;





// TODO:
if ( ! function_exists( 'teruterubozu_entry_tags' ) ) :
	/**
	 * Prints HTML with tags list for comments.
	 */
	function teruterubozu_entry_tags() {
		// Hide tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'teruterubozu' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'teruterubozu' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
	}
endif;





// TODO:
if ( ! function_exists( 'teruterubozu_entry_edit_post_link' ) ) :
	/**
	 * Prints HTML with link for edit comments.
	 */
	function teruterubozu_entry_edit_post_link() {
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'teruterubozu' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			false,
			false,
			false,
			'c-btn c-btn--core'
		);
	}
endif;





// TODO:
if ( ! function_exists( 'teruterubozu_entry_categories' ) ) :
	/**
	* Prints HTML with meta information for the categories.
	*/
	function teruterubozu_entry_categories() {
		// Hide categories text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'teruterubozu' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'teruterubozu' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}
		}
	}
endif;





// TODO:
if ( ! function_exists( 'teruterubozu_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 */
function teruterubozu_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail-link" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'teruterubozu-wide', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
		?>
	</a>

	<?php endif; // End is_singular().
}
endif;





if ( ! function_exists( 'teruterubozu_term_cover' ) ) :
/**
 * Print tag cover in a img tag.
 */
function teruterubozu_term_cover() {
    $term_cover_image_url = get_term_meta( get_queried_object()->term_id, 'term_cover_image', true);
    ?>
        <img class="xxx-img" src="<?php echo esc_url( $term_cover_image_url ) ?>" alt="">
    <?php
}
endif;





// TODO:
if ( ! function_exists( 'teruterubozu_post_navigation' ) ) :
/**
 * Displays a custom post navigation.
 *
 */
function teruterubozu_post_navigation() {
	the_post_navigation( array(
		'prev_text'                  =>
			'<span class="meta-nav" aria-hidden="true">' . __( 'Previous: ', 'teruterubozu' ) . '</span>' .
			'<span class="screen-reader-text">' .  __( 'Previous post', 'teruterubozu' ) . '</span>' .
			'<span class="post-title">%title</span>',
		'next_text'                  =>
			'<span class="meta-nav" aria-hidden="true">' . __( 'Next: ', 'teruterubozu' ) . '</span>' .
			'<span class="screen-reader-text">' .  __( 'Next post', 'teruterubozu' ) . '</span>' .
			'<span class="post-title">%title</span>',
	) );
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
