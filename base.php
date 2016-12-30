<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>

    <?php
      do_action('get_nav');
      get_template_part('templates/menu');
    ?>

    <!-- Site Overlay (Pushy) -->
    <div class="site-overlay"></div>

    <!-- Container for (Pushy) -->
    <div class="site-wrapper" id="container">
      <!-- FIXME: colocar #container en su sitio y usar este tip: https://github.com/christophery/pushy#tips -->

      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->

      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>

      <div class="container" id="js-scrollto" role="document">
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
