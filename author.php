<?php if (!is_home()) : ?>
  <?php get_template_part('templates/author', 'header'); ?>
<?php endif; ?>


<?php if (is_paged()): ?>
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

  <!-- Atom: decorative-line -->
  <hr class="decorative-line">

<?php endif; ?>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<!-- <?php Roots\Sage\Extras\wp_pagination(); ?>
<?php the_posts_navigation(); ?> -->

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
