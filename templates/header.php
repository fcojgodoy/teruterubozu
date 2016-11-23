  <?php if (is_front_page()) : ?>

  <!-- Atom: front-page-banner (Add background-image style if is_front_page) -->
  <header class="banner front-page-banner" style="background-image: url('http://demo.ghost.io/content/images/2014/09/testimg-home-1.jpg')">

  <?php else: ?>

  <!-- Atom: page-banner (Select thumbnail size according to wp_is_mobile) -->
  <header class="banner" style="background-image: url('<?php if (wp_is_mobile()) {the_post_thumbnail_url('medium');}
        else {the_post_thumbnail_url('');}
      ?>
      ')">

  <?php endif; ?>

    <nav class="main-nav navbar">

      <!-- Atom: custom-logo-link -->
      <?php the_custom_logo() ?>
      <?php if (!has_custom_logo()) : ?>
      <!-- No Custom Logo, just display the site's name -->
      <a class="navbar-brand a2" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php endif; ?>

      <!-- Molecule: menu-button -->
      <a class="btn menu-btn icon-menu" href="#"> <span class="word">Menu</span> </a>

    </nav>


    <!-- Molecule: banner-texts (Add content if is_front_page) -->
    <?php if (is_front_page()) : ?>

    <div class="vertical">
      <hgroup class="banner-texts">

        <!-- Atom: banner-title -->
        <h1 class="banner-title">Finding The Way Home</h1>

        <!-- Atom: banner-description -->
        <h2 class="banner-description">A beautiful narrative written with the world's most elegant publishing platform. The story begins here.</h2>

      </hgroup>
      </div>

      <?php else: ?>
      <?php endif; ?>

      <!-- first page of pagination -->
      <?php if ( !is_paged() ) : ?>

      <!-- Atom: scroll-down-arrow -->
      <a class="scroll-down-arrow icon-arrow-left js-scrolltoid radial-gradient" href="#js-scrollto" data-offset="45"><span hidden="true">Scroll Down</span></a>

      <?php else: ?>
      <?php endif; ?>

    <!-- </div> -->

  </header>
