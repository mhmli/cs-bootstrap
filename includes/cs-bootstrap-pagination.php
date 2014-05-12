<?php
/**
 * Display the paging
 * Code from: http://themefortress.com/reverie/
 *
 * @since  cs-bootstrap 0.1
 * @author Claudio Schwarz
 * @return string
 */
function cs_bootstrap_pagination() {
  global $wp_query;

  $big = 999999999; // This needs to be an unlikely integer

  // For more options and info view the docs for paginate_links()
  // http://codex.wordpress.org/Function_Reference/paginate_links
  $paginate_links = paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'mid_size' => 5,
    'prev_next' => True,
    'prev_text' => __( '&laquo;', 'cs-bootstrap' ),
    'next_text' => __( '&raquo;', 'cs-bootstrap' ),
    'type' => 'list'
  ) );

  // Display the pagination if more than one page is found
  if ( $paginate_links ) {
    echo '<div class="pagination-container">';
    echo $paginate_links;
    echo '</div><!--// end .pagination -->';
  }
}