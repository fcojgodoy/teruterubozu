<?php
/**
 * Numeric pagination
 *
 * @package teruterubozu
 **/

?>

<nav class="numeric-pagination o-layout o-layout--middle u-margin-bottom u-margin-bottom-large@tablet">
	<div class="nav-page-link nav-previous o-layout__item u-1/1 u-1/3@tablet u-margin-bottom-small u-margin-bottom-none@tablet">

		<?php previous_posts_link( __( 'Newer Posts', 'teruterubozu' ) ) ?>

	</div>
	<div class="navigation-pages o-layout__item u-1/1 u-1/3@tablet u-margin-bottom-small u-margin-bottom-none@tablet">

		<?php teruterubozu_numeric_posts_pagination(); ?>

	</div>
	<div class="nav-page-link nav-next  o-layout__item u-1/1 u-1/3@tablet u-margin-bottom-small u-margin-bottom-none@tablet">

		<?php next_posts_link( __( 'Older Posts', 'teruterubozu' ) )  ?>

	</div>
</nav>
