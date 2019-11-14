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