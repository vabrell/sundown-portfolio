<?php

/**
 * Theme localization
 */

function sundown_load_textdomain()
{
  load_theme_textdomain(
    'sundown',
    get_template_directory() . '/languages'
  );
}