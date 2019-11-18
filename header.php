<!DOCTYPE html>
<html lang="<?php echo get_locale(); ?>" class="has-background-white-bis">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>

  <?php
  wp_head();
  ?>
</head>
<body <?php body_class() ?>>

  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="<?php echo home_url(); ?>">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('sundown_header_image')); ?>"
          alt="<?php
          echo get_post_meta(get_theme_mod('sundown_header_image'))['_wp_attachment_image_alt'][0]
          ?>">
      </a>

      <a role="button" class="navbar-burger" data-target="primary-menu" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="primary-menu" class="navbar-menu">

      <div class="navbar-start has-text-weight-semibold">
        <?php
        sundown_primary_menu();
        ?>
      </div>

      <div class="navbar-end">
        <?php
        sundown_social_menu(true);
        ?>
      </div>

    </div>
  </nav>