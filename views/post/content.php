<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teruterubozu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-resume u-margin-bottom u-margin-bottom-large@tablet' ); ?>>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>

	<div class="entry-excerpt u-margin-bottom-small u-margin-bottom@tablet">

		<?php
    		// Print the_content if <!--more--> quicktag exist and the_excerpt
			// if it's not.
		    if( strpos( $post->post_content, '<!--more-->' ) ) {
				the_content( sprintf(
                    /* translators: %s: Name of current post */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'teruterubozu' ),
					get_the_title()
				) );
		    }

		    else {
		        the_excerpt();
		    }
		?>

	</div>

	<?php get_template_part( 'views/post/entry-meta' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->

<hr class="decorative-line u-margin-bottom u-margin-bottom-large@tablet">
