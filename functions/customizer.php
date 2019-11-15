<?php

/**
 * Theme customizer
 */

function sundown_customize_register( $wp_customize ) {
  $wp_customize->add_setting('sundown_navigation_image', [
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
  ]);
  
  $wp_customize->add_control(new WP_Customize_Media_Control(
    $wp_customize,
    'sundown_navigation_image',
    [
      'label' => __('Navigation image', 'sundown'),
      'section' => 'title_tagline',
      'mime_type' => 'image',
    ] 
  ));
}