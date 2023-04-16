<?php
// CSS And Js file Including

function anirban_css_js_file_calling(){
    //CSS File Calling
    wp_enqueue_style('anirban_style', get_stylesheet_uri());
    wp_register_style('anirban_bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('anirban_bootstrap');
    wp_register_style('anirban_custom_style', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('anirban_custom_style');

    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'anirban_css_js_file_calling' );
 