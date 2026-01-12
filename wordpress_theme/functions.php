<?php
function client_theme_scripts()
{
  wp_enqueue_style('main-style', get_template_directory_uri() . 'css/style.min.css', array(), '1.0');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/functions.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'client_theme_scripts');
