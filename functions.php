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
    register_nav_menu('menu-footer', 'Menu in footer');

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
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

add_action('add_meta_box', 'hotel_meta_boxes');
add_action('admin_post_nopriv_si-modal-form', 'hotel_modal_form_handler');
add_action('admin_post_si-modal-form', 'hotel_modal_form_handler');

function hotel_meta_boxes(){
    add_meta_box(
        'modal_id',
        'Form Request',
        'post'
    );
    $fields = [

    ];
}

function hotel_modal_form_handler(){
    $name = $_POST['name'] ? $_POST['name'] : 'Anonym';
    $phone = $_POST['phone'] ? $_POST['phone'] : false;
    $email = $_POST['email'] ? $_POST['email'] : 'empty';
    $message = $_POST['message'] ? $_POST['message'] : 'empty';
    $choice = $_POST['form-post-id'] ? $_POST['form-post-id'] : 'empty';

    if($phone){
        $name = wp_strip_all_tags($name);
        $email = wp_strip_all_tags($email);
        $name = wp_strip_all_tags($name);
        $message = wp_strip_all_tags($message);
        $choice = wp_strip_all_tags($choice);
        $id = wp_insert_post(wp_slash([
         'post_title' => 'Request №',
         'post_type' => 'orders',
         'post_status' => 'publish',
         'meta_input' =>[

         ]

        ]));
    }


}



?>