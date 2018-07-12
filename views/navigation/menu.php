<?php
/**
* The site navigation
*
* This is the template that displays the main site navigation.
*
* @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
*
* @package teruterubozu
*/

?>

<nav class="main-menu pushy pushy-right">

    <div class="pushy-content">

        <h3 class="main-menu-title"> <?php esc_html_e('MENU', 'teruterubozu') ?> </h3>

        <a href="#" class="main-menu-close pushy-link">
            <span hidden>Close</span>
        </a>

        <?php
            if ( has_nav_menu( 'primary_navigation' ) ) :
                wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'main-menu-list' ] );
            endif;
        ?>

        <!-- <a href="<?php bloginfo( 'atom_url' ); ?>" class="subscribe-button"><?php esc_html_e( 'Subscribe', 'teruterubozu' ) ?></a> -->

    </div>

</nav>
