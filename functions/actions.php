<?php

/**
 * Theme actions
 */

add_action('wp_enqueue_scripts', 'sundown_enqueue_styles');

add_action('wp_enqueue_scripts', 'sundown_enqueue_scripts');

add_action('init', 'sundown_register_menus');

add_action('init', 'sundown_register_post_types');

add_action('add_meta_boxes', 'sundown_register_meta_boxes');

add_action('customize_register', 'sundown_customize_register');

add_action('admin_print_styles-post-new.php', 'sundown_admin_style', 11 );
add_action('admin_print_styles-post.php', 'sundown_admin_style', 11 );
add_action('save_post', 'sundown_save_education', 1, 2 );
add_action('save_post', 'sundown_save_employment', 1, 2 );