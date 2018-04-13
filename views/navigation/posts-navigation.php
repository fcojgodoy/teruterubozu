<div class="posts-navigation o-pack">

<?php $nextPost = get_next_post(); if( $nextPost ) : ?>

    <?php if ( has_post_thumbnail( $nextPost->ID ) ) : ?>
        <?php $nextthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($nextPost->ID), '' ); $nextthumbnail = $nextthumbnail[0]; ?>
    <?php else :
        $nextthumbnail = get_stylesheet_directory_uri() . '/images/default-featured.jpg'; ?>
    <?php endif; ?>

    <div class="nav-post-newer o-pack__item">
        <a class="nav-post-link" href="<?php echo get_permalink(get_adjacent_post( false, '', false)); ?>" style="background-image:url(<?php echo $nextthumbnail; ?>);">
            <div class="wrap">
                <span class="nav-post-button btn"><?php _e('Read this next', 'teruterubozu') ?></span>
                <h2 class="nav-post-title"><?php echo get_the_title( $nextPost->ID ) ?></h2>
            </div>
        </a>
    </div>

<?php endif; ?>

<?php $prevPost = get_previous_post(); if($prevPost): ?>

    <?php if (has_post_thumbnail( $prevPost->ID ) ): ?>
        <?php $prevthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($prevPost->ID), '' ); $prevthumbnail = $prevthumbnail[0]; ?>
    <?php else :
        $prevthumbnail = get_stylesheet_directory_uri() . '/images/default-featured.jpg'; ?>
    <?php endif; ?>

 <div class="nav-post-older o-pack__item">

    <a class="nav-post-link" href="<?php echo get_permalink(get_adjacent_post( false, '', true)); ?>" style="background-image:url(<?php echo $prevthumbnail; ?>);">
        <div class="wrap">
            <span class="nav-post-button btn"><?php _e('You might enjoy', 'teruterubozu') ?></span>
            <h2 class="nav-post-title"><?php echo get_the_title( $prevPost->ID ) ?></h2>
        </div>
    </a>

  </div>

<?php endif; ?>

</div>
