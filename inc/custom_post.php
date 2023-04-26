<?php

function custom_post(){
  register_post_type('service',
    array(
      'labels' => array(
        'name'                   => __('Servicesss', 'anirban'),
        'singular_name'          => __('service', 'anirban'),
        'add_new'                => __('Add New Services', 'anirban'),
        'add_new_item'           => __('Add New Service', 'anirban'),
        'edit_item'              => __('Edit Sercice', 'anirban'),
        'new_item'               => __('New Service', 'anirban'),
        'view_item'              => __('View Service', 'anirban'),
        'not_found'              => __('Sorry, We Could\'t find the service', 'anirban')
      ),
    'menu_icon'                  => 'dashicons-networking',
    'public'                     => true,
    'publicly_queryable'         => true,
    'exclude_from_search'        => true,
    'menu_position'              => 6,
    'has_archive'                => true,
    'hierarchial'                => true,
    'show_ui'                    => true,
    'capability_type'            => 'post',
    'rewrite'                    => array ('slag' => 'service'),
    'supports'                   => array ('title', 'thumbnail', 'editor',), 
    )
  );
}
add_action( 'init', 'custom_post');


