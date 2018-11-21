<?php
function enqueue_styles() {
wp_register_style( 'my_bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
wp_register_style( 'my_style', get_template_directory_uri(). '/css/style.css');

wp_enqueue_style( 'my_bootstrap');
wp_enqueue_style( 'my_style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
wp_register_script('my-jquery', get_template_directory_uri() . '/js/jquery.js', '', 1.1,true);
wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', '', 1.1,true);
wp_register_script('script', get_template_directory_uri() . '/js/script.js', '', 1.1,true);

wp_enqueue_script('my-jquery');
wp_enqueue_script('bootstrap');
wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');