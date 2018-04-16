<?php if ( is_front_page() ) : ?>

    <header class="xxx u-margin-bottom-large u-margin-bottom-huge@tablet">

        <?php the_header_image_tag( array('class' => 'xxx-img', ) ) ?>

        <div class="xxx-content">
            <div class="site-hgroup">
                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div>
        </div>


<?php elseif ( is_author() ) : ?>

    <header class="xxx u-margin-bottom-large u-margin-bottom-huge@tablet">

        <img class="xxx-img" src="<?php the_author_meta( 'author_cover_image' ) ?>" alt="">




<?php elseif ( is_tag() ) :

    ?>
    <header class="xxx u-margin-bottom-large u-margin-bottom-huge@tablet">

        <?php teruterubozu_term_cover() ?>

        <div class="xxx-content">
            <div class="label-page-hgroup">
                <h1 class="label-title"> <?php single_tag_title(); ?> </h1>
                <h2 class="label-description"> <?php echo term_description(); ?> </h2>
            </div>
        </div>


<?php elseif (is_search()) : ?>

    <header class="u-margin-bottom-large u-margin-bottom-huge@tablet main-header main-header_search no-cover aligner">



<?php elseif ( is_singular() && has_post_thumbnail() ) : ?>

    <header class="u-margin-bottom-large u-margin-bottom-huge@tablet main-header main-header_entry" style="background-image: url('<?php if (wp_is_mobile()) {the_post_thumbnail_url('medium');} else {the_post_thumbnail_url('');} ?>')">



<?php elseif ( is_home() && ! is_front_page() ) : ?>

    <header class="xxx u-margin-bottom-large u-margin-bottom-huge@tablet">

        <div class="xxx-content">
            <div class="site-hgroup">
                <h1 class="blog-title"><?php esc_html_e( 'Blog', 'teruterubozu' ) ?></h1>
                <h2 class="site-title u-h4"><?php bloginfo('name') ?></h2>
            </div>
        </div>

<?php else: ?>

    <header class="u-margin-bottom-large u-margin-bottom-huge@tablet main-header main-header_entry no-cover">

<?php endif; ?>




<nav class="navbar">

    <div class="custom-logo" itemscope itemtype="http://schema.org/Organization">

        <?php the_custom_logo() ?>

    </div>

    <a class="menu-btn icon-menu" href="#"> <span class="word"><?php esc_attr_e( 'Menu', 'teruterubozu' ) ?></span> </a>

</nav>


<?php if ( !is_paged() && get_header_image() ) : ?>

    <a class="scroll-down-arrow icon-arrow-left radial-gradient" href="#content" onclick="animateScrollTo( document.querySelector( '#content' ) )"><span hidden><?php _e( 'Scroll Down', 'teruterubozu' ) ?></span></a>

<?php endif; ?>


</header>
