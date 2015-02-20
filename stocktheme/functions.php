<?php

if (function_exists('add_theme_support'))
{
  // Add Menu Support
  add_theme_support('menus');

  // Add Thumbnail Theme Support
  add_theme_support('post-thumbnails');
  add_image_size('large', 700, '', true); // Large Thumbnail
  add_image_size('medium', 458, '', true); // Medium Thumbnail
  add_image_size('small', 120, '', true); // Small Thumbnail
  add_image_size('main', 872, '', true); // Small Thumbnail

}

function register_theme_menu() {
    register_nav_menu( 'nav_menu', 'Главное меню' );
}
add_action( 'init', 'register_theme_menu' );

