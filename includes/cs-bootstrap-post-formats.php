<?php
// Register Theme Features
function cs_bootstrap_post_formats()  {

  // Add theme support for Post Formats
$formats = array( 'quote', 'gallery', 'image', 'video', 'link' );
	add_theme_support( 'post-formats', $formats );
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'cs_bootstrap_post_formats' );