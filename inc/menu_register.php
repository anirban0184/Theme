<?php

//Theme Menu Register
function my_theme_register_nav_menu(){
  register_nav_menus(array(
      'primary_header' => __('Primary Header', 'anirban'),
      'footer_menu' => __('Footer Menu', 'anirban'),
  ));
};
add_action( 'after_setup_theme', 'my_theme_register_nav_menu' );
