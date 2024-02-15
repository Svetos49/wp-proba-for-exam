<?php

/**
 * This function takes care of handling whith enquequ
 */

function gitproba_assets() {
  wp_enqueue_style( 'gitproba',  get_stylesheet_directory_uri() . '/assets/css/master.css', array(), filemtime( get_template_directory() . '/assets/css/master.css' ));
}

add_action( 'wp_enqueue_scripts', 'gitproba_assets' );

/**
 * This function add a custom class
 */

function gitproba_body_class( $classes ) {
      $classes[] .= 'test-class';
      return $classes;
}
add_filter( 'body-class', 'gitproba_body_class' );