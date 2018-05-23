<div class="posts-navigation o-pack">

<?php $teruterubozu_next_post = get_next_post(); if( $teruterubozu_next_post ) : ?>

    <?php
    if ( has_post_thumbnail( $teruterubozu_next_post->ID ) ) :
        $teruterubozu_next_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $teruterubozu_next_post->ID ), '' );
        $teruterubozu_next_thumbnail = $teruterubozu_next_thumbnail[ 0 ];
    else :
        $teruterubozu_next_thumbnail = get_stylesheet_directory_uri() . '/images/default-featured.jpg';
    endif;
    ?>

    <div class="nav-post-newer o-pack__item">
        <a class="nav-post-link" href="<?php echo esc_url( get_permalink( get_adjacent_post( false, '', false ) ) ) ?>" style="background-image:url(<?php echo esc_url( $teruterubozu_next_thumbnail ) ?>)">
            <div class="wrap">
                <span class="nav-post-button btn"><?php esc_html_e( 'Read this next', 'teruterubozu' ) ?></span>
                <h2 class="nav-post-title"><?php echo get_the_title( $teruterubozu_next_post->ID ) ?></h2>
            </div>
        </a>
    </div>

<?php endif; ?>

<?php $teruterubozu_prev_post = get_previous_post(); if( $teruterubozu_prev_post ): ?>

    <?php
    if (has_post_thumbnail( $teruterubozu_prev_post->ID ) ):
        $teruterubozu_prev_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $teruterubozu_prev_post->ID ), '' );
        $teruterubozu_prev_thumbnail = $teruterubozu_prev_thumbnail[ 0 ];
    else :
        $teruterubozu_prev_thumbnail = get_stylesheet_directory_uri() . '/images/default-featured.jpg';
    endif;
    ?>

<div class="nav-post-older o-pack__item">

    <a class="nav-post-link" href="<?php echo esc_url( get_permalink( get_adjacent_post( false, '', true ) ) ) ?>" style="background-image:url(<?php echo esc_url( $teruterubozu_prev_thumbnail ) ?>)">
        <div class="wrap">
            <span class="nav-post-button btn"><?php esc_html_e( 'You might enjoy', 'teruterubozu' ) ?></span>
            <h2 class="nav-post-title"><?php echo get_the_title( $teruterubozu_prev_post->ID ) ?></h2>
        </div>
    </a>

</div>

<?php endif; ?>

</div>
