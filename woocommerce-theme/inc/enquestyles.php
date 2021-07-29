<?php 

function load_stylesheets(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.css');
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() .'/assets/css/responsive.css');
    wp_enqueue_style( 'owl_carousel_css', get_template_directory_uri() .'/assets/owl_carousel/assets/owl.carousel.min.css');
 
 }
 add_action( 'wp_enqueue_scripts', 'load_stylesheets');
 
 
 
 function load_javascripts(){
     wp_enqueue_script('jquery');
     wp_enqueue_script('custom_js', get_template_directory_uri() .'/assets/js/custom-js.js');
     wp_enqueue_style( 'bootstrap_js', get_template_directory_uri() .'/assets/bootstrap/js/bootstrap.min.js');

     wp_enqueue_style( 'owl-carousel-js', get_template_directory_uri() .'/assets/js/owl.carousel.min.js');
     wp_enqueue_style( 'jquery-sticky', get_template_directory_uri() .'/assets/js/jquery.sticky.js');
     wp_enqueue_style( 'main-js', get_template_directory_uri() .'/assets/js/main.js');
     wp_enqueue_style( 'slider-1', get_template_directory_uri() .'/assets/js/bxslider.min.js');
     wp_enqueue_style( 'slider-2', get_template_directory_uri() .'/assets/js/script.slider.js');
     wp_enqueue_script('owl_carousel', get_template_directory_uri() .'/assets/owl_carousel/owl.carousel.js');
 
 }
 add_action( 'wp_enqueue_scripts', 'load_javascripts');
 ?>

   


