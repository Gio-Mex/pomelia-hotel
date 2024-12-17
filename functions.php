<?php
//Theme Supports
function theme_supports()
{
  add_theme_support('title-tag');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_supports');

//Theme Assets
function theme_assets()
{
  //FONTS
  wp_enqueue_style('gstatic', '//fonts.gstatic.com');
  wp_enqueue_style('gapis', '//fonts.googleapis.com');

  wp_enqueue_style('montserrat-font', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

  wp_enqueue_style('poppins-font', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

  //ICONS
  wp_enqueue_style('bi-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');

  //CSS
  wp_enqueue_style('main_style', get_theme_file_uri() . '/assets/css/main.css');

  //JS
  wp_enqueue_script('main_script', get_theme_file_uri() . '/assets/js/main.js', NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_assets');
