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

  <a href="<?php echo site_url('rss'); ?>" type="button" class="subscribe-button"><?php echo __('Subscribe', 'sage') ?></a>

</nav>
