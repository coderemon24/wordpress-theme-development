<?php 

function register_my_menus()
{
    register_nav_menus([
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu'
    ]);
}

add_action('after_setup_theme', 'register_my_menus');