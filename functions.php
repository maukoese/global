<?php

require 'jabali.php';
function jabaliAssets() {
  wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri().'/assets/css/main.css' );

  wp_enqueue_script( 'functions', get_stylesheet_directory_uri() . '/assets/js/functions-min.js', array() );
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery-3.2.1.js', array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts', 'jabaliAssets' );

if( is_admin() )
    $my_settings_page = new Jabali();