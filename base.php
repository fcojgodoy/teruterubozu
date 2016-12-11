<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>

    <!-- Molecule: nav-primary (Pushy) -->
    <nav class="nav-primary pushy pushy-right">

      <!-- Atom: menu-title -->
      <h3 class="nav-title"> <?php echo __("MENU", "sage") ?> </h3>

      <!-- Atom: menu-close -->
      <a href="#" class="nav-close pushy-link">
        <span hidden="true">Close</span>
      </a>

      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>

      <a href="<?php echo site_url('rss'); ?>" type="button" class="btn btn-secondary btn-block">Block level button</a>

    </nav>

    <!-- Site Overlay (Pushy) -->
    <div class="site-overlay"></div>

    <!-- Container for (Pushy) -->
    <div id="container">
      <!-- FIXME: colocar #container en su sitio y usar
      este tip: https://github.com/christophery/pushy#tips -->

      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>

      <div class="wrap container" id="js-scrollto" role="document">
        <div class="content row">
          <main class="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>

    </div>
  </body>
</html>
