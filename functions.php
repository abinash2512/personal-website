<?php


function register_styles(){

    wp_enqueue_style( 'abinashhome-style', get_template_directory_uri(), "/style.css", array(), '1.0', 'all');
    wp_enqueue_style( 'abinashhome-bootstrap', get_template_directory_uri(), "/style.css", array(), '1.0', 'all');
    wp_enqueue_style( 'abinashhome-fontawesome', get_template_directory_uri(), "/style.css", array(), '1.0', 'all');

}

add_action( 'wp_enqueue_scripts','register_styles');

?>