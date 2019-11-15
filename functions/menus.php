<?php

/**
 * Theme menus
 */

function sundown_register_menus() {
  register_nav_menus([
    'primary_menu' => __('Primary Menu', 'sundown'),
    'social_menu' => __('Social Media Menu', 'sundown')
  ]);
}

function sundown_primary_menu() {
  $theme_location = get_nav_menu_locations()['primary_menu'];
  $menu = wp_get_nav_menu_object($theme_location);

  $menu_list = '';

  if ($menu_items = wp_get_nav_menu_items($menu->term_id)) {
    foreach ($menu_items as $item) {
      $title = $item->title;
      $url = $item->url;
      $menu_list .= "<a class='navbar-item' href='$url'>$title</a>";
    }
  }


  echo $menu_list;
}

function sundown_social_menu($is_inline = false) {
  $theme_location = get_nav_menu_locations()['social_menu'];
  $menu = wp_get_nav_menu_object($theme_location);

  $menu_list = '';

  if ($menu_items = wp_get_nav_menu_items($menu->term_id)) {
    foreach ($menu_items as $item) {
      $url = $item->url;
      
      switch ($url) {
        case (preg_match('/facebook/', $url) ? true : false):
          $icon = 'mdi-facebook';
        break;
  
        case (preg_match('/instagram/', $url) ? true : false):
          $icon = 'mdi-instagram';
        break;
  
        case (preg_match('/linkedin/', $url) ? true : false):
          $icon = 'mdi-linkedin';
        break;
  
        case (preg_match('/twitter/', $url) ? true : false):
          $icon = 'mdi-twitter';
        break;
  
        case (preg_match('/github/', $url) ? true : false):
          $icon = 'mdi-github-circle';
        break;
  
        case (preg_match('/spotify/', $url) ? true : false):
          $icon = 'mdi-spotify';
        break;
  
        default:
          $icon = '';
      }
  
      $is_inline === true ? $inline = 'is-inline-block' : $inline = '' ;
  
      $menu_list .= "<a class='navbar-item $inline' href='$url'>";
      $menu_list .= "<span class='icon is-large'>";
      $menu_list .= "<i class='mdi mdi-24px $icon'></i>";
      $menu_list .= "</span></a>";
    }
  }


  echo $menu_list;
}