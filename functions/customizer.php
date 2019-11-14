<?php

/**
 * Theme customizer
 */

function sundown_customize_register( $wp_customize ) {
  $wp_customize->add_setting('sundown_header_image', [
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
  ]);
  
  $wp_customize->add_control(new WP_Customize_Media_Control(
    $wp_customize,
    'sundown_header_image',
    [
      'label' => __('Header image'),
      'section' => 'title_tagline',
      'mime_type' => 'image',
    ] 
  ));
}