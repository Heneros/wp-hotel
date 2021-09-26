<?php



function _ho_assets_path($path){
    return get_template_directory_uri() . '/assets/' . $path;
}
add_action('init', 'hotel_registration_types');
function hotel_registration_types(){
    register_post_type('orders', [
      'labels' => [
        'name'               => 'Заявки', 
        'singular_name'      => 'Заявки', 
        'add_new'            => 'Добавить новую заявку',
        'add_new_item'       => 'Добавить новую заявку',
        'edit_item'          => 'Редактировать заявку', 
        'new_item'           => 'Новая заявка', 
        'view_item'          => 'Смотреть заявки', 
        'search_items'       => 'Искать заявку',
        'not_found'          => 'Не найдено',
        'not_found_in_trash' => 'Не найдено в корзине', 
        'parent_item_colon'  => '', 
        'menu_name'          => 'Заявки', 
      ],
      'public'              => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 20,
      'menu_icon'           =>'dashicons-format-chat', 
      'hierarchical'        => false,
      'supports'            => ['title'],
      'has_archive' => false
    ]);
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

add_action('add_meta_boxes', 'hotel_meta_boxes');

function hotel_meta_boxes(){
    $fields = [
        'hotel_order_date' => 'Date request: ',
        'hotel_order_name' => 'Name client:   ',
        'hotel_order_phone' => 'Phone Client: ',
        'hotel_order_email' => 'Email client: ',
        'hotel_order_message' => 'Message client: ',
        'hotel_order_choice' => 'Type form:',
    ];
    foreach($fields as $slug => $text){
        add_meta_box(
            $slug, 
            $text,
            'hotel_order_fields_cb',
            'orders',
            'advanced',
            'default',
            $slug
        );
    }

}
function hotel_order_fields_cb($post_obj, $slug){
    $slug = $slug['args'];
    $data = get_post_meta($post_obj->ID, $slug, true);
    $data = $data ? $data : 'No data';
    echo '<span>'. $data .'</span>';
    // $date = get_post_meta($post_obj->ID, 'hotel_order_date', true);
    // $date = $date ? $date : '';
    // echo '<span>'. $date .'</span>';
}







?>