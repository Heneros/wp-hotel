<?php

function _ho_assets_path($path){
    return get_template_directory_uri() . '/assets/' . $path;
}

add_action('wp_enqueue_scripts', 'ho_scripts');
function ho_scripts(){
    wp_enqueue_script('js', _ho_assets_path('/js/main.js'), [], '1.0', true);
    wp_enqueue_script('js', _ho_assets_path('/js/script.js'), [], '1.0', true);
    wp_enqueue_style('main-style', _ho_assets_path('/css/style.css'), [], '1.0', 'all');
}

add_action('after_setup_theme', 'ho_setup');
function ho_setup(){
    register_nav_menu('menu-header', 'Menu in header');
    register_nav_menu('menu-body', 'Menu in body');
    register_nav_menu('menu in footer', 'Menu in footer');
}



?>