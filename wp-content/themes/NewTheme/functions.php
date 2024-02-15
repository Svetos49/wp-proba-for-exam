<?php

/**
 * This function takes care of handling whith enquequ
 */

function gitproba_assets() {
  wp_enqueue_style( 'gitproba',  get_stylesheet_directory_uri() . '/assets/css/master.css', array(), '1.0');
}

add_action( 'wp_enqueue_scripts', 'gitproba_assets' );