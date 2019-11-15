<?php

/**
 * Gutenburg blocks
 */

function sundown_register_gutenberg_blocks() {
  /**
   * Hero block
   */
  wp_register_script(
    'sundown-hero-block',
    get_template_directory_uri() . '/js/hero-block.js',
    [
      'wp-blocks',
      'wp-element'
    ]
  );

  wp_register_style(
    'sundown-editor-style',
    get_template_directory_uri() . '/css/sundown.css'
  );

  register_block_type(
    'sundown/hero-block',
    [
      'editor_script' => 'sundown-hero-block',
      'editor_style' => 'sundown-editor-style'
    ]
  );
}