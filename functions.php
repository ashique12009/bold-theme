<?php 
function bold_theme_bootstrapping() {
  load_theme_textdomain('bold_theme');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'bold_theme_bootstrapping');

function bold_theme_assets() {
  wp_enqueue_style('bold_theme_custom_style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap4', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'bold_theme_assets');