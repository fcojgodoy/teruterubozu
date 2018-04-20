
<?php if ( ! is_single() ) : ?>

    <div class="entry-meta o-media o-media--tiny">

        <div class="o-media__img">

            <!-- Author Avatar -->
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 24, null, null, array( 'class' => 'author-avatar' ) ) ?>

        </div>

        <div class="o-media__body">

            <!-- Author Link -->
            <a class="author-link" rel="author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php echo get_the_author() ?></a>

            <!-- Entry Tags -->
            <?php if ( has_tag() ) : ?>

            <div class="tags">
                <?php the_tags( '<span class="tags-on">' . esc_html_e( 'on ', 'teruterubozu' ) . '</span>' ) ?>
            </div>

            <?php endif; ?>

            <!-- Entry Categories -->
            <?php if ( has_category() ) : ?>

            <div class="categories">
                <?php the_category( '<span class="category">' . esc_html_e( 'on ', 'teruterubozu' ) . '</span>' ) ?>
            </div>

            <?php endif; ?>

            <span class="vertical-separator"></span>

            <!-- Entry Date -->
            <time class="entry-date" datetime="<?php the_time( 'c' ) ?>"><?php the_time( get_option( 'date_format' ) ) ?> </time>

        </div>

    </div>

<?php else : ?>

    <div class="entry-meta u-margin-bottom-small u-margin-bottom@tablet">

        <!-- Entry Date -->
        <time class="entry-date" datetime="<?php the_time( 'c' ) ?>"><?php the_time( get_option( 'date_format' ) ) ?> </time>

        <!-- Entry Tags -->
        <?php if ( has_tag() ) : ?>

        <div class="tags">
            <?php the_tags( '<span class="tags-on">' . esc_html_e( 'on ', 'teruterubozu' ) . '</span>' ) ?>
        </div>

        <?php endif; ?>

    </div>

<?php endif; ?>
