<?php

// Theme Title
add_theme_support( 'title-tag' );

//Theme Support function
add_theme_support( 'post-thumbnails', array('page','post', 'service') );
add_image_size('post-thumbnails', 1200, 350, true);
add_image_size ( 'service', 350, 350, true );

//The Excerpt
function post_read_more_button($more){
  return '<br> <br></bar><a href="' . get_permalink() . '">' . 'Read More' . '</a>';
}
add_filter( 'excerpt_more', 'post_read_more_button' );


function post_excerpt_length($length) {
  return 25;
}
add_filter('excerpt_length', 'post_excerpt_length', 999);

//Blog Pagination function

function post_pagenav() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if(!$current = get_query_var('paged')) $current = 1;
  $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $args['total'] = $max;
  $args['current'] = $current;
  $total = 1;
  $args['prev_text'] = 'Prev';
  $args['next_text'] = 'Next';
  if($max >1) echo '</pre>
    <div class="wp_pagenav">';
    if($total ==1 && $max > 1) $pages = '<p class="pages">Page' .$current .'<span> of</span>' . $max . '</p>';
    echo $pages  . paginate_links($args);
    if ($max > 1) echo'</div><pre>';
};