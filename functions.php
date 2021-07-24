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

function bold_theme_sidebar() {
  register_sidebar([
    'name'          => __('Single Post Sidebar', 'bold_theme'),
    'id'            => 'sidebar-1',
    'description'   => __('Single post sidebar', 'bold_theme'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);

  register_sidebar([
    'name'          => __('Footer Left Sidebar', 'bold_theme'),
    'id'            => 'footer-left',
    'description'   => __('Footer left sidebar', 'bold_theme'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '',
    'after_title'   => '',
  ]);

  register_sidebar([
    'name'          => __('Footer Right Sidebar', 'bold_theme'),
    'id'            => 'footer-right',
    'description'   => __('Footer right sidebar', 'bold_theme'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '',
    'after_title'   => '',
  ]);
}
add_action('widgets_init', 'bold_theme_sidebar');