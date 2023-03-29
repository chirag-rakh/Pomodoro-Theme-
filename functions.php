<?php

//add dynamic title
add_theme_support( 'title-tag' );

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

?>