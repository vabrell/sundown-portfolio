<?php

/**
 * Theme custom post types
 */

function sundown_register_post_types() {
  register_post_type('education', [
    'label' => __('Education', 'sundown'),
    'labels' => __('Educations', 'sundown'),
    'public' => true,
    'menu_icon' => 'dashicons-book',
    'supports' => ['title'],
    'rewrite' => [
      'pages' => false
    ]
  ]);

  register_post_type('employment', [
    'label' => __('Employment', 'sundown'),
    'labels' => __('Employments', 'sundown'),
    'public' => true,
    'menu_icon' => 'dashicons-nametag',
    'supports' => ['title'],
    'rewrite' => [
      'pages' => false
    ]
  ]);

  register_post_type('project', [
    'label' => __('Project', 'sundown'),
    'labels' => __('Projects', 'sundown'),
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

  register_post_type('skill', [
    'label' => __('Skill', 'sundown'),
    'labels' => __('Skills', 'sundown'),
    'public' => true,
    'menu_icon' => 'dashicons-chart-bar',
    'supports' => [
      'title',
      'thumbnail'
    ],
    'rewrite' => [
      'pages' => false
    ]
  ]);
}