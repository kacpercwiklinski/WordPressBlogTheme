<?php

function register_styles(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('wordpressblog-style', get_template_directory_uri() . "/style.css", array('wordpressblog-bootstrap-min'), $version, 'all');
    wp_enqueue_style('wordpressblog-bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('wordpressblog-bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '5.0.2', 'all');
    wp_enqueue_style('wordpressblog-fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', '6.1.1', array(), 'all');
    wp_enqueue_style('wordpressblog-fonts-googleapis', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Roboto:wght@100;400&display=swap', false, array(), 'all');
}

add_action( 'wp_enqueue_scripts', 'register_styles');

function register_scripts(){
    wp_enqueue_script('wordpressblog-bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',  array(), '5.1.3', true);
    wp_enqueue_script('wordpressblog-mainscript', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'register_scripts');

?>