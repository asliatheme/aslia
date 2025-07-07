<?php
/*
* Theme functions.
*
* @package Aslia
*
*/

function aslia_enqueue_scripts(){

    
    wp_register_style('stylesheet',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',[],false,'all');

    wp_register_script('main',get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory().'/assets/main.js'),true);
    wp_register_script('bootstrap-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',['jquery'],false,true);


     wp_enqueue_style('stylesheet');
     wp_enqueue_style('bootstrap-css');
     wp_enqueue_script('main');
     wp_enqueue_script('bootstrap-js');

     
}
add_action('wp_enqueue_scripts','aslia_enqueue_scripts');