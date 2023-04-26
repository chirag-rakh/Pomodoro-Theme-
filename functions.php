<?php

//add dynamic title
add_theme_support( 'title-tag' );

//add dynamic background image
add_theme_support( 'custom-background', [
  'default-color' => 'ffffff',
  'default-image' => ''
] );

//Enqueueing css
function pomodoro_enqueue_style(){
    wp_enqueue_style( 'pomodoro-css', get_template_directory_uri() . "/style.css" );
}

add_action( 'wp_enqueue_scripts', 'pomodoro_enqueue_style' );


//Enqueueing javascripts
function pomodoro_enqueue_script(){
  wp_enqueue_script( 'pomodoro-script', get_template_directory_uri() . "/assets/js/pomodorojs.js" );
}

add_action( 'wp_enqueue_scripts', 'pomodoro_enqueue_script' );


//Adding wordpress menus
function pomodoro_menu() {
  $locations = array(
    'primary' => "Desktop primary menu"
  );

  register_nav_menus( $locations );

}

add_action( 'init', 'pomodoro_menu' );


?>