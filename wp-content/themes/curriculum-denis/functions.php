<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/estilos.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');


function add_script()
{
   wp_register_script('navbar', get_template_directory_uri() . '/assets/navbar.js', false, 1.1, true);
   wp_enqueue_script( 'navbar');

}

add_action('wp_enqueue_scripts', 'add_script');