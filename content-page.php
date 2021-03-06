<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header" role="heading">
    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>
  </header><!-- .entry-header -->
  <div class="row">
    <?php
    if(has_post_thumbnail()) {
      echo '<div class="entry-thumbnail col-sm-4">';
      the_post_thumbnail('article-image');
      echo '</div>';
      echo '<div class="entry-content col-sm-8">';
      echo the_content( __( 'Artikel "' . get_the_title() . '" lesen <span class="meta-nav">&raquo;</span>', 'cs-bootstrap' ) );
      echo '</div>';
    } else {
      echo '<div class="entry-content col-sm-12">';
      echo the_content( __( 'Artikel "' . get_the_title() . '" lesen <span class="meta-nav">&raquo;</span>', 'cs-bootstrap' ) );
      echo '</div>';
    }
    ?>

      <?php
      if(is_single()) {
        wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Seiten:', 'cs-bootstrap' ) . '</span>', 'after' => '</div>' ) );
      }
      ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
