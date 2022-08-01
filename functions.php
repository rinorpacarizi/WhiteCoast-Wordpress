<?php

function whiteCoast_theme_support(){

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'whiteCoast_theme_support');

function whiteCoast_menus(){
    $locations = array(
 'primary' => "Left Sidebar",
 'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init','whiteCoast_menus');


function whitecoast_register_styles(){
    $version = wp_get_theme()->get( 'Version' );


    wp_enqueue_style('whiteCoast-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" , array(), '4.4.1', 'all');
    wp_enqueue_style('whiteCoast-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('whiteCoast-style', get_template_directory_uri() . "/style.css", array('whiteCoast-bootstrap'),'1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'whitecoast_register_styles');

function whitecoast_register_scripts(){
   wp_enqueue_script('whiteCoast-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1');
   wp_enqueue_script('whiteCoast-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0');
   wp_enqueue_script('whiteCoast-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1');
   wp_enqueue_script('whiteCoast-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0');
  
  
}

add_action( 'wp_enqueue_scripts', 'whitecoast_register_scripts');

add_image_size("smallest",300,300,true);
add_image_size("largest",800,800,true);
  

?>