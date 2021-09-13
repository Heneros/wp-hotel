<?php



function _ho_assets_path($path){
    return get_template_directory_uri() . '/assets/' . $path;
}

add_action('wp_enqueue_scripts', 'ho_scripts');
function ho_scripts(){
    // wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '', true);
   
    wp_enqueue_script('slick', _ho_assets_path('/js/slick.min.js'), array('jquery'), null, true);
    wp_enqueue_script('js-second', _ho_assets_path('/js/script.js'), array('jquery'), null, true);
    wp_enqueue_script('js', _ho_assets_path('/js/main.js'),  null, true);
  


    wp_enqueue_style('main-style', _ho_assets_path('/css/style.css'), [], '1.0', 'all');
}

add_action('after_setup_theme', 'ho_setup');
function ho_setup(){
    register_nav_menu('menu-header', 'Menu in header');
    register_nav_menu('menu-body', 'Menu in body');
    register_nav_menu('menu in footer', 'Menu in footer');

    add_theme_support('title-tag');
    
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('pre_get_posts','allow_pending_posts_wpse_103938');
function allow_pending_posts_wpse_103938($qry) {
	if (!is_admin() && current_user_can('upload_files') &&
            $qry->is_main_query()) {
		$qry->set('post_status', array('publish','pending','draft'));
	}
}
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

}

?>