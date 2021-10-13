<?php



function _ho_assets_path($path){
    return get_template_directory_uri() . '/assets/' . $path;
}
add_action('init', 'hotel_registration_types');
function hotel_registration_types(){
    register_post_type('orders', [
      'labels' => [
        'name'               => 'Orders', 
        'singular_name'      => 'Order', 
        'add_new'            => 'Add new Order',
        'add_new_item'       => 'Add new Order',
        'edit_item'          => 'Edit Order', 
        'new_item'           => 'New Order', 
        'view_item'          => 'Watch Orders', 
        'search_items'       => 'Search Order',
        'not_found'          => 'Not found',
        'not_found_in_trash' => 'Not found in bin', 
        'parent_item_colon'  => '', 
        'menu_name'          => 'Orders', 
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
add_action('admin_post_nopriv_hotel-modal-form', 'hotel_modal_form_handler');
add_action('admin_post_hotel-modal-form', 'hotel_modal_form_handler');
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


function hotel_modal_form_handler(){
    $name = $_POST['name'] ? $_POST['name'] : 'Anonym';
    $phone = $_POST['phone'] ? $_POST['phone'] : false;
    $email = $_POST['email'] ? $_POST['email'] : 'empty';
    $message = $_POST['message'] ? $_POST['message'] : 'empty';
    $choice = $_POST['hotel-modal-form'] ? $_POST['hotel-modal-form'] : 'empty';

        if($phone){
            $name = wp_strip_all_tags($name);
            $email = wp_strip_all_tags($email);
            $phone = wp_strip_all_tags($phone);
            $message = wp_strip_all_tags($message);
            $choice = wp_strip_all_tags($choice);
            $id = wp_insert_post(wp_slash([
                'post_title' => 'Order № ',
                'post_type' => 'orders',
                'post_status' => 'publish',
                'meta_input' =>[
                    'hotel_order_name' =>   $name,
                    'hotel_order_phone' => $phone,
                    'hotel_order_email' => $email,
                    'hotel_order_message' => $message,
                    'hotel_order_choice' => $choice ,
                ]
               ]));
               if($id !== 0){
                  wp_update_post([
                    'ID' => $id,
                    'post_title' => 'Order № ' . $id,
                  ]);
                  update_field('status_order', 'new', $id);
               }
    }
    header('Location: ' . home_url());

}




?>