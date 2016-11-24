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
          <h4>
            <!-- Atom: author-link -->
            <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a>
          </h4>
          <p class="author-bio">
            <!-- Atom: author-bio -->
            <?php echo get_the_author_meta( 'description' ); ?>
          </p>
          <em class="author-location icon-location"><?php echo get_the_author_meta( 'city' ); ?></em>
          <em>
            <a class="author-web icon-link" href="<?php echo get_the_author_meta( 'url' ); ?>"><?php echo get_the_author_meta( 'url' ); ?></a>
          </em>
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
  <div class="post-navigation-fixme">
    <div id="post-nav" class="navigation">
      <?php
        $prevPost = get_previous_post(true);
        if($prevPost)
      ?>

      <div class="nav-box previousº">

        <a href="#" class="btn">YOU MIGHT ENJOY</a>

        <?php if (wp_is_mobile()) {
          $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'medium' );
        }
        else {
          $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'full' );
        }
        previous_post_link('%link',"$prevthumbnail <p>%title</p>", FALSE); ?>
      </div>

      <?php
        $nextPost = get_next_post(true);
        if($nextPost)
      ?>

      <div class="nav-box next">

        <a href="#" class="btn">YOU MIGHT ENJOY</a>

        <?php if (wp_is_mobile()) {
          $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'medium' );
        }
        else {
          $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'full' );
        }
        next_post_link('%link',"$nextthumbnail <p>%title</p>", FALSE); ?>
      </div>

    </div><!--#post-nav div -->
  </div>

<?php endwhile; ?>
