<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <footer class="entry-footer">

      <!-- Molecule: author-info -->
      <!-- <div class="author-info"> -->
        <div class="avatar-wrap">
          <!-- Atom: author-avatar -->
          <?php echo get_avatar( get_the_author_meta('ID'), 68 ); ?>
        </div>

        <div class="author-wrap">

          <!-- Atom: author-link -->
          <h4>
            <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a>
          </h4>

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

        </div>
      <!-- </div> -->

      <div class="share">
        <h4 class="share-title">Share this post</h4>
        <!-- Add Twitter tweet button with Tweet Web Intent
              https://dev.twitter.com/web/tweet-button/web-intent
        -->
        <script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
        <a class="icon-twitter" href="https://twitter.com/intent/tweet?text=<?php print(urlencode(the_title())); ?>&url=<?php print(urlencode(the_permalink())); ?>">
          <!-- <span class="hidden">Share on Twitter</span> -->
        </a>

        <!-- Add Facebook share button -->
        <a class="icon-facebook" href="<?php print(urlencode(the_permalink())); ?>"
          onclick="
          window.open(
            'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
            'facebook-share-dialog',
            'width=626,height=436');
            return false;">
          <!-- <span class="hidden">Share on Facebook</span> -->
        </a>

        <!-- Add Google Plus share button -->
        <a class="icon-google-plus" href="https://plus.google.com/share?url=http://bower.io"
          onclick="
          javascript:window.open(
          this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
          return false;">
          <!-- <span class="hidden">Share on Google-Plus</span> -->
        </a>

      </div>

    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

    </footer>

    <?php comments_template('/templates/comments.php'); ?>

  </article>

  <!-- ??: Post navigation -->
  <div class="posts-navigation">


    <!-- Molecule: nav-post-newer -->
    <?php $nextPost = get_next_post(); if($nextPost): ?>
      <?php if (has_post_thumbnail( $nextPost->ID ) ): ?>
        <?php $nextthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($nextPost->ID), '' ); $nextthumbnail = $nextthumbnail[0]; ?>
      <?php else :
        $nextthumbnail = get_stylesheet_directory_uri() . '/images/default-featured.jpg'; ?>
      <?php endif; ?>

      <div class="nav-post-newer">

        <a class="nav-post-link" href="<?php echo get_permalink(get_adjacent_post( false, '', false)); ?>" style="background-image:url(<?php echo $nextthumbnail; ?>);">
          <div class="wrap">

            <!-- Atom: nav-post-button -->
            <span class="nav-post-button btn"><?php echo __('Read this next', 'sage') ?></span>
            <!-- Atom: nav-post-title -->
            <h2 class="nav-post-title"><?php echo get_the_title( $nextPost->ID ) ?></h2>
            <!-- <?php setup_postdata( $nextPost ); the_excerpt(); wp_reset_postdata(); ?> -->
          </div>
        </a>

      </div>

    <?php endif; ?>


    <!-- Molecule: nav-post-older -->
    <?php $prevPost = get_previous_post(); if($prevPost): ?>
      <?php if (has_post_thumbnail( $prevPost->ID ) ): ?>
        <?php $prevthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($prevPost->ID), '' ); $prevthumbnail = $prevthumbnail[0]; ?>
      <?php else :
        $prevthumbnail = get_stylesheet_directory_uri() . '/images/default-featured.jpg'; ?>
      <?php endif; ?>

      <div class="nav-post-older">

        <a class="nav-post-link" href="<?php echo get_permalink(get_adjacent_post( false, '', true)); ?>" style="background-image:url(<?php echo $prevthumbnail; ?>);">
          <div class="wrap">

            <!-- Atom: nav-post-button -->
            <span class="nav-post-button btn"><?php echo __('You might enjoy', 'sage') ?></span>
            <!-- Atom: nav-post-title -->
            <h2 class="nav-post-title"><?php echo get_the_title( $prevPost->ID ) ?></h2>
            <!-- <?php echo get_the_excerpt( $prevPost->ID ) ?> -->
          </div>
        </a>

      </div>

    <?php endif; ?>


  </div>

<?php endwhile; ?>
