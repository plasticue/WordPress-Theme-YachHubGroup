<?php

function load_stylesheets()
{



wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
wp_enqueue_style('style');

wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
wp_enqueue_style('custom');





}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function addjs() {

  wp_register_script('scriptjs', get_template_directory_uri() . '/scripts/main.js', array(), 1, 1, 1);
  wp_enqueue_script('scriptjs');


}

add_action('wp_enqueue_scripts', 'addjs');






  wp_enqueue_script('jquery');
  
  
 