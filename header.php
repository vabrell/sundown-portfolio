<!DOCTYPE html>
<html lang="sv" class="has-background-white-bis">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portfolio</title>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png" type="image/x-icon">


  <?php
  wp_head();
  ?>
</head>
<body <?php body_class() ?>>

  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="<?php home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_name.png"
          alt="Logo Victor Abrell">
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
            <a href="#" class="navbar-item social" target="_blank">
              <span class="icon is-large">
                <i class="mdi mdi-24px mdi-twitter"></i>
              </span>
            </a>
            <a href="#" class="navbar-item social" target="_blank">
              <span class="icon is-large">
                <i class="mdi mdi-24px mdi-linkedin"></i>
              </span>
            </a>
            <a href="#" class="navbar-item social" target="_blank">
              <span class="icon is-large">
                <i class="mdi mdi-24px mdi-github-circle"></i>
              </span>
            </a>
      </div>

    </div>
  </nav>
