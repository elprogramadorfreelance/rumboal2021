<?php
if ( function_exists('register_sidebar') )
register_sidebar();





add_theme_support( 'post-thumbnails' );

function add_favicon() {
  echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/favicon.png" />';
}
 
add_action('wp_head', 'add_favicon');



?>