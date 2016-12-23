<!-- Molecule: Pagination -->
<nav class="page-navigation">
  <!-- Atom: Button -->
  <div class="nav-page-link nav-previous">
    <?php previous_posts_link( __('Newer Posts', 'Sage') )  ?>
  </div>
  <!-- Atom: Navigation pages -->
  <div class="navigation-pages">
    <span>
      <?php echo __('Page', 'Sage') . ' ' . $paged . ' ' . __('of', 'Sage') . ' ' . $wp_query -> max_num_pages; ?>
    </span>
  </div>
  <!-- Atom: Button -->
  <div class="nav-page-link nav-next">
    <?php next_posts_link( __('Older Posts', 'Sage') )  ?>
  </div>
</nav>
