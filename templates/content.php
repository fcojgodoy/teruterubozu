<article <?php post_class("entry-resume"); ?>>
  <header>

    <!-- Atom: entry-title-link -->
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  </header>

  <!-- Molecule: entry-summary -->
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

  <!-- Molecule: entry-meta -->
  <?php get_template_part('templates/entry-meta'); ?>

</article>
