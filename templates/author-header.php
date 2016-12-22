<!-- Atom: avatar -->
<div class="page-header">

  <div class="author-profile">

    <?php echo get_avatar( get_the_author_meta('ID'), 114, null, null, array ( 'class' => array ( 'author-avatar', 'border-simple') ) ); ?>

    <?php use Roots\Sage\Titles; ?>


    <h1 class="author-title"><?= Titles\title(); ?></h1>

    <!-- Atom: author-bio -->
    <h2 class="author-bio author-bio--lg">
      <?php echo get_the_author_meta( 'description' ); ?>
    </h2>

    <div class="author-meta">

      <!-- Atom: author-location -->
      <?php if (get_the_author_meta('city')) : ?>
        <em class="author-location icon-location"><?php echo get_the_author_meta( 'city' ); ?></em>
      <?php endif ; ?>

      <!-- Atom: author-web -->
      <?php if (get_the_author_meta( 'url' )) : ?>
        <em class="author-web icon-link">
          <a href="<?php echo get_the_author_meta( 'url' ); ?>"><?php echo get_the_author_meta( 'url' ); ?></a>
        </em>
      <?php endif; ?>

      <?php if (get_the_author_posts()) : ?>
        <em class="author-stats icon-stats"><?php echo get_the_author_posts() . " " . __('posts', 'sage'); ?> </em>
      <?php endif; ?>

    </div>

  </div>

  <hr class="decorative-line">

</div>
