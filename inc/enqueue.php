<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package base_theme
 */

 //Enqueue theme styles
 function base_theme_style(){

     wp_register_style('theme', get_template_directory_uri() . '/css/theme.css', array(), false, 'all');
     wp_enqueue_style('theme');

     wp_register_style('remixicon', get_template_directory_uri() . '/assets/remixicon/fonts/remixicon.css', array(), false, 'all');
     wp_enqueue_style('remixicon');

     wp_register_style('animatecss', get_template_directory_uri() . '/assets/animate-css/animate.min.css', array(), false, 'all');
     wp_enqueue_style('animatecss');
 }
 add_action('wp_enqueue_scripts','base_theme_style');


//Enqueue theme scripts
 function base_theme_scripts(){

    wp_enqueue_script('jquery');

     wp_register_script('theme', get_template_directory_uri() . '/js/theme.js','jquery',false,true);
     wp_enqueue_script('theme');

     wp_register_script('boostrapbundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js','jquery',false,true);
     wp_enqueue_script('boostrapbundle');

     wp_register_script('owlCarousel', get_template_directory_uri() . '/js/owl.carousel.min.js','jquery',false,true);
     wp_enqueue_script('owlCarousel');

     wp_register_script('aos', get_template_directory_uri() . '/js/aos.js','jquery',false,true);
     wp_enqueue_script('aos');



    //  wp_register_script('boostrap', get_template_directory_uri() . '/js/bootstrap.min.js','jquery',false,true);
    //  wp_enqueue_script('boostrap');
 }
 add_action('wp_enqueue_scripts', 'base_theme_scripts');