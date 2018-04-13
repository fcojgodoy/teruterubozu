<?php
/**
* Short description
*
* Long description
*
* @package teruterubozu
*/

?>

<div class="social-contact-inner o-pack">

    <?php if ( get_the_author_meta( 'twitter' ) ) : ?>

        <div class="o-pack__item">
            <a class="icon-twitter" title="<?php esc_attr_e( 'Twitter', 'teruterubozu' ) ?>" href="https://twitter.com/<?php echo esc_html( get_the_author_meta( 'twitter' ) ) ?>" target="blank"></a>
        </div>

    <?php endif; ?>

    <?php if ( get_the_author_meta( 'facebook' ) ) : ?>

        <div class="o-pack__item">
            <a class="icon-facebook" title="<?php esc_attr_e( 'Facebook', 'teruterubozu' ) ?>" href="https://facebook.com/profile.php?id=<?php echo esc_html( get_the_author_meta( 'facebook' ) ) ?>" target="blank"></a>
        </div>

    <?php endif; ?>

    <?php if ( get_the_author_meta( 'googleplus' ) ) : ?>

        <div class="o-pack__item">
            <a class="icon-google-plus" title="<?php esc_attr_e( 'Google +', 'teruterubozu' ) ?>" href="https://plus.google.com/<?php echo esc_html( get_the_author_meta( 'googleplus' ) ) ?>" target="blank"></a>
        </div>

    <?php endif; ?>

</div>
