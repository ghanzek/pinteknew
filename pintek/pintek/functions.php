<?php

// Including stylesheet and script files
function load_scripts(){
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery'), '4.3.1', true );
    wp_enqueue_style('template', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );



}
add_action( 'wp_enqueue_scripts', 'load_scripts' );



register_nav_menus(
  array(
    'my_main_menu' => 'Main menu',
    'footer_menu' => 'Footer menu'
  )
);
