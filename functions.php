<?php

function _si_assets_path($path){
    return get_template_directory_uri() . '/assets/' . $path;
}


function si_scripts(){
    wp_enqueue_script('js', _si_assets_path('/js/main.js'), [], '1.0', true);
    wp_enqueue_style('main-style', _si_assets_path('/css/style.css'), [], '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'si_scripts');


?>