<?php

/**
 * Theme actions
 */

add_action('wp_enqueue_scripts', 'sundown_enqueue_styles');

add_action('wp_enqueue_scripts', 'sundown_enqueue_scripts');

add_action('init', 'sundown_register_menus');

add_action('customize_register', 'sundown_customize_register');