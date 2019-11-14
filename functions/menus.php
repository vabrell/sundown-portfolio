<?php

/**
 * Theme menus
 */

function sundown_register_menus() {
  register_nav_menus([
    'primary_menu' => __('Primary Menu'),
    'social_menu' => __('Social Media Menu')
  ]);
}

function sundown_primary_menu() {
  $theme_location = get_nav_menu_locations()['primary_menu'];
  $menu = wp_get_nav_menu_object($theme_location);
  $menu_items = wp_get_nav_menu_items($menu->term_id);

  $menu_list = '';

  foreach ($menu_items as $item) {
    $title = $item->title;
    $url = $item->url;
    $menu_list .= "<a class='navbar-item' href='$url'>$title</a>";
  }

  echo $menu_list;
}