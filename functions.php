<?php

function load_stylesheets()
{
  wp_register_style('stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('stylesheet');

  wp_register_style('sheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('sheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js()
{
  wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', '', 1, true);
  wp_enqueue_script('bootstrapjs');
}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
  array(
    'main-menu' => __('Main Menu', 'theme'),
    'social-menu' => __('Social Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme')
  )
);

add_image_size('thumbnail',150,150, true);
add_image_size('smallest',300,300, true);
add_image_size('largest', 800, 800, true);

 ?>
