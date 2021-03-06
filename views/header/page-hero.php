<header class="hero u-margin-bottom-large u-margin-bottom-huge@tablet">

<?php if ( is_front_page() ) :

    the_header_image_tag( array( 'class' => 'hero-img' ) ) ?>

    <div class="hero-content">
        <div class="o-wrapper">

            <h1 class="hero-title"><?php echo esc_html( get_theme_mod( 'header-main-text', __( 'Teruterubozu', 'teruterubozu' ) ) ) ?></h1>

            <?php if ( ! is_paged() || is_customize_preview() ) : ?>
                <h2 class="hero-subtitle"><?php echo esc_html( get_theme_mod( 'header-secondary-text', __( 'Beautiful and simple theme prepared for readability', 'teruterubozu' ) ) ) ?></h2>
            <?php endif; ?>

        </div>
    </div>

    <?php if ( ! is_paged() && get_header_image() ) : ?>

        <a class="scroll-down-arrow icon-arrow-left radial-gradient" href="#content" onclick="animateScrollTo( document.querySelector( '#content' ) )"><span hidden><?php esc_html_e( 'Scroll Down', 'teruterubozu' ) ?></span></a>

    <?php endif; ?>


<?php elseif ( is_home() && ! is_front_page() ) : ?>

    <?php echo get_the_post_thumbnail( get_queried_object_id(), 'full', array( 'class' => 'hero-img' ) ); ?>

    <div class="hero-content">
        <div class="o-wrapper">
            <h1 class="blog-hero-title u-h1"><?php esc_html_e( 'Blog', 'teruterubozu' ) ?></h1>
            <h2 class="blog-hero-subtitle u-h3"><?php bloginfo( 'name' ) ?></h2>
        </div>
    </div>

<?php elseif ( is_singular() && has_post_thumbnail() ) : ?>

    <?php the_post_thumbnail( 'full',  array( 'class' => 'hero-img' ) ); ?>


<?php elseif ( is_tag() ) :

    teruterubozu_term_cover() ?>

    <div class="hero-content">
        <div class="o-wrapper">
            <h1 class="label-title"> <?php single_tag_title() ?> </h1>
            <?php if ( term_description() ) : ?>
                <h2 class="label-description"> <?php echo term_description() ?> </h2>
            <?php endif ?>
        </div>
    </div>


<?php elseif ( is_author() && get_the_author_meta( 'author_cover_image' ) ) : ?>

    <img class="hero-img" src="<?php the_author_meta( 'author_cover_image' ) ?>" alt="">

<?php endif; ?>


    <!-- Navbar -->
    <nav class="navbar">

        <!-- Site branding -->
        <div class="site-branding">

            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title u-margin-vertical-tiny"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif; ?>

        </div><!-- .site-branding -->

        <!-- Menu button -->
        <a class="menu-btn icon-menu" href="#"> <span class="word"><?php esc_html_e( 'Menu', 'teruterubozu' ) ?></span> </a>

    </nav>

</header>
