<?php 


// Theme Function
function anirban_logo_customize($wp_customize) {
  //Header Logo
  $wp_customize-> add_section('anirban_header_area', array(
      'title' => __('Headerzcxcxc Area', 'anirban')
  ));
  $wp_customize->add_setting('anirban_logo', array(
      'default' => get_bloginfo('template_directory'). '/screenshot.png'
  ));
  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'anirban_logo', array(
      'label'=> 'Logo Upload',
      'setting' => 'anirban_logo',
      'section' => 'anirban_header_area'
  )));
  // Theme Menu Position
  $wp_customize-> add_section('menu_option', array(
      'title' => __('Menu Position','anirban'),
  ));
  $wp_customize-> add_setting('menu_position', array(
      'default' => 'right_menu',
  ));
  $wp_customize-> add_control('menu_position', array(
      'title' => 'Menu Positon',
      'description' => 'Menu position will be right, left, center',
      'section' => 'menu_option',
      'setting' => 'menu_position',
      'type' => 'radio',
      'choices' => array(
          'right_menu' => 'Right Menu',
          'left-menu' => 'Left Menu',
          'center' => 'Center',
      ),
  ));
  // Footer customization function
  $wp_customize-> add_section('footer_option', array(
      'title' => 'Footer Area',
      'description' => 'Here you can edit footer all setting',
  ));
  $wp_customize-> add_setting('footer_customization', array(
      'default' => '&copy All Right Resurve to Anirban',
  ));
  $wp_customize-> add_control('footer_customization', array(
      'title' => 'Copy Right Text',
      'description' => 'Here you can edit footer copy right text',
      'section' => 'footer_option',
      'setting' => 'footer_customization',
  ));
}
add_action('customize_register' , 'anirban_logo_customize');

