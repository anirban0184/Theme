<?php

// Theme Widget Function
function my_widget_function() {
  register_sidebar( array(
    'name' => __('Main Widget Area', 'anirban'),
    'id'   => 'sidebar_1',
    'description' => __('Here you can site the sidebar', 'Anirban'),
    'before_widget' => '<div class="child_sidebar".>',
    'after-widget'  => '</div>',
    'before_title'  => '<h2 class="title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar( array(
    'name' => __('Footer 1', 'anirban'),
    'id'   => 'footer_1',
    'description' => __('Here you can site the sidebar', 'Anirban'),
    'before_widget' => '<div class="child_sidebar".>',
    'after-widget'  => '</div>',
    'before_title'  => '<h2 class="title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar( array(
    'name' => __('Footer 2', 'anirban'),
    'id'   => 'footer_2',
    'description' => __('Here you can site the sidebar', 'Anirban'),
    'before_widget' => '<div class="child_sidebar".>',
    'after-widget'  => '</div>',
    'before_title'  => '<h2 class="title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar( array(
    'name' => __('Footer 3', 'anirban'),
    'id'   => 'footer_3',
    'description' => __('Here you can site the sidebar', 'Anirban'),
    'before_widget' => '<div class="child_sidebar".>',
    'after-widget'  => '</div>',
    'before_title'  => '<h2 class="title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'my_widget_function');