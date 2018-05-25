<div class="visual-post-navigation">

<?php if ( get_next_post() ) :

    $teruterubozu_next_post = get_next_post(); ?>
    
    <div class="visual-post-navigation-newer">
        <a class="visual-post-navigation-link" href="<?php echo esc_url( get_permalink( get_adjacent_post( false, '', false ) ) ) ?>">
            <?php
            if ( has_post_thumbnail( $teruterubozu_next_post->ID ) ) :
                echo get_the_post_thumbnail( $teruterubozu_next_post->ID, '', [ 'class' => 'visual-post-navigation-image'] );
            endif;
            ?> 
            <div class="visual-post-navigation-wrap u-padding">
                <span class="visual-post-navigation-button c-btn c-btn--small u-margin-bottom-small"><?php esc_html_e( 'Read this next', 'teruterubozu' ) ?></span>
                <h2 class="visual-post-navigation-title u-margin-bottom-none"><?php echo get_the_title( $teruterubozu_next_post->ID ) ?></h2>
            </div>
        </a>
    </div>

<?php endif; ?>

<?php if ( get_previous_post() ) :

    $teruterubozu_prev_post = get_previous_post(); ?>
    
    <div class="visual-post-navigation-newer">
        <a class="visual-post-navigation-link" href="<?php echo esc_url( get_permalink( get_adjacent_post( false, '', true ) ) ) ?>">
            <?php
            if ( has_post_thumbnail( $teruterubozu_prev_post->ID ) ) :
                echo get_the_post_thumbnail( $teruterubozu_prev_post->ID, '', [ 'class' => 'visual-post-navigation-image']  );
            endif;
            ?>            
            <div class="visual-post-navigation-wrap u-padding">
                <span class="visual-post-navigation-button c-btn c-btn--small u-margin-bottom-small"><?php esc_html_e( 'You might enjoy', 'teruterubozu' ) ?></span>
                <h2 class="visual-post-navigation-title u-margin-bottom-none"><?php echo get_the_title( $teruterubozu_prev_post->ID ) ?></h2>
            </div>
        </a>
    </div>

<?php endif; ?>

</div>
