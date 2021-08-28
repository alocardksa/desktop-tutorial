<?php


function load_stylesheets(){

    wp_register_style('font', get_template_directory_uri(). './dist/css/style.min.css', array(), 1, 'all');
    wp_enqueue_style('font');
  
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


//function addjs(){
  //  wp_register_script('js' , get_template_directory_uri() . './app/js/app.js' , array() ,1,1,1);
  //  wp_enqueue_script('js');
