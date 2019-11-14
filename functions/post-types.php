<?php

/**
 * Theme custom post types
 */

function sundown_register_post_types() {
  register_post_type('education', [
    'label' => __('Education'),
    'labels' => __('Educations'),
    'public' => true,
    'menu_icon' => 'dashicons-book',
    'supports' => ['title'],
    'rewrite' => [
      'pages' => false
    ]
  ]);

  register_post_type('employment', [
    'label' => __('Employment'),
    'labels' => __('Employments'),
    'public' => true,
    'menu_icon' => 'dashicons-nametag',
    'supports' => ['title'],
    'rewrite' => [
      'pages' => false
    ]
  ]);

  register_post_type('project', [
    'label' => __('Project'),
    'labels' => __('Projects'),
    'public' => true,
    'menu_icon' => 'dashicons-hammer',
    'supports' => [
      'title',
      'thumbnail'
    ],
    'rewrite' => [
      'pages' => false
    ]
  ]);
}