<?php

/**
 * Theme actions
 */

// Init
add_action('init', 'sundown_register_menus');
add_action('init', 'sundown_register_post_types');
add_action('init', 'sundown_register_gutenberg_blocks');

// After setup
add_action('after_setup_theme', 'sundown_load_textdomain');

// Styles
add_action('wp_enqueue_scripts', 'sundown_enqueue_styles');
add_action('wp_enqueue_scripts', 'sundown_enqueue_scripts');
add_action('admin_print_styles-post-new.php', 'sundown_admin_style', 11 );
add_action('admin_print_styles-post.php', 'sundown_admin_style', 11 );

// Meta boxes
add_action('add_meta_boxes', 'sundown_register_meta_boxes');
add_action('save_post', 'sundown_save_education', 1, 2 );
add_action('save_post', 'sundown_save_employment', 1, 2 );
add_action('save_post', 'sundown_save_project', 1, 2 );

// Customizer
add_action('customize_register', 'sundown_customize_register');
