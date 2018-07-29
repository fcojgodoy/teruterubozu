<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teruterubozu
 */
?>

<?php
    /*
     * If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments.
     */
    if ( post_password_required() ) {
    	return;
    }
?>

<section class="comments">

    <?php if ( have_comments() ) : ?>

        <div class="comment-respond-wrap u-margin-bottom-large u-margin-bottom-huge@tablet">
            <?php comment_form(); ?>
        </div>

        <!-- The ID 'comments' is linked from comments_popup_link function -->
        <div id="comments" class="comments-list-wrap">
            <h3 class="comments-title u-margin-bottom u-margin-bottom-large@tablet">

                <?php
                $comment_count = get_comments_number();
                if ( 1 === $comment_count ) {
                    printf(
                        esc_html_e( 'One comment', 'teruterubozu' )
                    );
                } else {
                    printf( // WPCS: XSS OK.
                        /* translators: 1: comment count number */
                        esc_html( _nx( '%1$s comment', '%1$s comments', $comment_count, 'comments title', 'teruterubozu' ) ),
                        number_format_i18n( $comment_count )
                    );
                }
                ?>

            </h3><!-- .comments-title -->

            <ol class="comment-list">
                <?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true ) ); ?>
            </ol>
        </div>

        <?php the_comments_navigation() ?>

    <?php endif; // have_comments() ?>

    <?php if ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <div class="alert alert-warning">
            <?php esc_attr_e( 'Comments are closed.', 'teruterubozu' ); ?>
        </div>

    <?php endif; ?>

</section>
