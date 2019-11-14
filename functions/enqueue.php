<?php

/**
 * Theme scripts and styles
 */

function sundown_enqueue_styles() {
  wp_enqueue_style(
    'sundown_portfolio_style',
    get_template_directory_uri() . '/css/sundown.css'
  );
}

function sundown_enqueue_scripts() {
  wp_enqueue_script(
    'sundown_portfolio_script',
    get_template_directory_uri() . '/js/script.js'
  );
}