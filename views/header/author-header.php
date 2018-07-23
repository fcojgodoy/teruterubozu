<div class="author-header u-margin-bottom-large u-margin-bottom-huge@tablet">

    <div class="author-profile u-margin-bottom u-margin-bottom-large@tablet">

        <?php echo get_avatar( get_the_author_meta( 'ID' ), 114, null, null, array ( 'class' => array ( 'author-avatar', 'border-simple') ) ); ?>

        <h1 class="author-title"><?php the_author() ?></h1>

        <?php if ( get_the_author_meta( 'description' ) ) : ?>
            <h2 class="author-bio author-bio--lg">
                <?php echo esc_html( get_the_author_meta( 'description' ) ) ?>
            </h2>
        <?php endif; ?>

        <div class="author-meta">

            <ul class="o-list-inline">

                <?php if ( get_the_author_meta( 'city' ) ) : ?>
                    <li class="author-location icon-location o-list-inline__item u-margin-bottom u-margin-bottom-large@tablet"><?php echo esc_html( get_the_author_meta( 'city' ) ) ?></li>
                <?php endif ; ?>

                <?php if ( get_the_author_meta( 'url' ) ) : ?>
                    <li class="author-web icon-link o-list-inline__item u-margin-bottom u-margin-bottom-large@tablet">
                        <a href="<?php echo esc_url( get_the_author_meta( 'url' ) ) ?>"><?php echo esc_html( get_the_author_meta( 'url' ) ) ?></a>
                    </li>
                <?php endif; ?>

                <?php if ( get_the_author_posts() ) : ?>
                    <li class="author-stats icon-stats o-list-inline__item u-margin-bottom u-margin-bottom-large@tablet"><?php echo esc_html( get_the_author_posts() ) . " " . esc_html__( 'posts', 'teruterubozu' ); ?> </li>
                <?php endif; ?>

            </ul>

        </div>

    </div>

    <hr class="decorative-line">

</div>
