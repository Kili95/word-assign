<?php
function load_scripts(){
	wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css',array(),'4.6.1','all');
	wp_enqueue_style('style',get_stylesheet_uri(),'1.0','all');
   	
	
	wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js',array('jquery'),'4.6.1',true);
	
} 
add_action('wp_enqueue_scripts','load_scripts');

add_action('wp_ajax_nopriv_contact_submit','contact_submit');
add_action('wp_ajax_contact_submit','contact_submit');

function contact_submit(){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $description = $_POST["description"];
    $status = '1';
    $created = date('Y-m-d H:i:s');

	global $wpdb;
	$table = 'wp_contact_us';
	$data = array('name' => $name, 'email' => $email, 'description' => $description, 'status' => $status, 'created' => $created);
	$format = array('%s','%s','%s','%s','%s');
	$wpdb->insert($table,$data,$format);
	$insert_id = $wpdb->insert_id;

    echo $insert_id;
    exit();
}

function my_custom_page_fun(){
	include 'admin/admin-feedback-page.php';
}

function my_custom_menu(){
	add_menu_page('Feedbacks', 'Feedbacks', 'manage_options', 'my-custom-page', 'my_custom_page_fun', 'dashicons-feedback', '6');
}

add_action( 'admin_menu','my_custom_menu' );