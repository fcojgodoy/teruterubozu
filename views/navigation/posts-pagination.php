<?php
/**
 * Numeric pagination
 *
 * @package teruterubozu
 **/

?>

<nav class="posts-pagination o-layout o-layout--middle u-margin-bottom u-margin-bottom-large@tablet">
	<div class="posts-pagination-link posts-pagination-prev-link o-layout__item u-1/1 u-1/2@tablet u-margin-bottom u-margin-bottom-none@tablet">

		<?php previous_posts_link( __( 'Newer Posts', 'teruterubozu' ) ) ?>

	</div>

	<div class="posts-pagination-link posts-pagination-next-link  o-layout__item u-1/1 u-1/2@tablet u-margin-bottom u-margin-bottom-none@tablet">

		<?php next_posts_link( __( 'Older Posts', 'teruterubozu' ) )  ?>

	</div>
</nav>
