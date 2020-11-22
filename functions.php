<?php
function pfl_theme_support()
{
    // add default title
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'pfl_theme_support');


function pfl_menus()
{
    $locations = array(
        'primary' => "Main Menu",
        'footer' => 'Footer main menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'pfl_menus');

function pfl_register_styles()
{
    wp_enqueue_style('pfl_style', get_template_directory_uri() . '/style.css', array(), 1.0, 'all');
    wp_enqueue_style('pfl_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css", array(), 5.0, 'all');

}

add_action('wp_enqueue_scripts', 'pfl_register_styles');

function pfl_register_scripts()
{
    wp_enqueue_script('pfl_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js", array(), 5.3, true);
}

add_action('wp_enqueue_scripts', 'pfl_register_scripts');