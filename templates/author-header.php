<!-- Atom: avatar -->
<?php echo get_avatar( get_the_author_meta('ID'), 114 ); ?>

<?php use Roots\Sage\Titles; ?>

<div class="page-header">

  <h1><?= Titles\title(); ?></h1>

  <!-- Atom: author-bio -->
  <p class="author-bio">
    <?php echo get_the_author_meta( 'description' ); ?>
  </p>

  <!-- Atom: author-location -->
  <?php if (get_the_author_meta('city')) : ?>
    <em class="author-location icon-location"><?php echo get_the_author_meta( 'city' ); ?></em>
  <?php endif ; ?>

  <!-- Atom: author-web -->
  <?php if (get_the_author_meta( 'url' )) : ?>
    <em>
      <a class="author-web icon-link" href="<?php echo get_the_author_meta( 'url' ); ?>"><?php echo get_the_author_meta( 'url' ); ?></a>
    </em>
  <?php endif; ?>

  <?php if (get_the_author_posts()) : ?>
    <em class="author-stats icon-stats"><?php echo get_the_author_posts() . " " . __('posts', 'sage'); ?> </em>
  <?php endif; ?>

</div>
