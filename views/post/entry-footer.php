<footer class="entry-footer">

    <div class="o-layout">

        <div class="o-layout__item u-1/1">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 68, null, null, array ( 'class' => array( 'author-avatar', 'u-double-border' ) ) ); ?>
        </div>

        <div class="author-wrap o-layout__item u-1/1 u-3/4@tablet u-margin-bottom">

            <h4 class="author-link u-margin-bottom">
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a>
            </h4>

            <?php if ( get_the_author_meta( 'description' ) ) : ?>
                <p class="author-bio u-margin-bottom">
                    <?php echo esc_html( get_the_author_meta( 'description' ) ) ?>
                </p>
            <?php endif; ?>

            <?php if ( get_the_author_meta( 'location' ) || get_the_author_meta( 'url' ) ) : ?>
                <div class="author-links u-padding-bottom-small">
                    <?php if ( get_the_author_meta( 'location' ) ) : ?>
                        <em class="author-location icon-location u-margin-bottom-small"><?php echo esc_html( get_the_author_meta( 'location' ) ) ?></em>
                    <?php endif ; ?>

                    <?php if ( get_the_author_meta( 'url' ) ) : ?>
                        <em class="author-web icon-link u-margin-bottom-small">
                            <a href="<?php echo esc_url( get_the_author_meta( 'url' ) ) ?>"><?php echo esc_html( get_the_author_meta( 'url' ) ) ?></a>
                        </em>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>

        <?php
        if ( get_the_author_meta( 'twitter' ) || get_the_author_meta( 'facebook' ) || get_the_author_meta( 'googleplus' ) ) : ?>

        <div class="social-contact o-layout__item u-1/1 u-1/4@tablet u-margin-bottom">
            <h4 class="social-contact-title">

                <?php esc_attr_e( 'Contact', 'teruterubozu' ) ?>

            </h4>

            <?php get_template_part( 'views/header/author-socialcontact' ) ?>

        </div>

        <?php endif; ?>

    </div>

</footer>
