<!-- Organism: main-menu (Pushy) -->
<nav class="main-menu pushy pushy-right">

  <!-- Atom: menu-title -->
  <h3 class="menu-title"> <?php echo __("MENU", "sage") ?> </h3>

  <!-- Atom: menu-close -->
  <a href="#" class="menu-close pushy-link">
    <span hidden="true">Close</span>
  </a>

  <?php
  if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
  endif;
  ?>

  <a href="<?php echo site_url('rss'); ?>" type="button" class="subscribe-button"><?php echo __('Subscribe', 'sage') ?></a>

</nav>
