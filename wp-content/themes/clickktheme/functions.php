<?php
//adds dynamic title tag
function fruitbro_them_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'fruitbro_them_support');

//Link in css
function fruitbro_register_styles()
{
    wp_enqueue_style('styles', get_template_directory_uri() . "/style.css", array(), 1.0, "all");
}

add_action('wp_enqueue_scripts', 'fruitbro_register_styles');

//Link in js
function fruitbro_register_scripts()
{
    wp_enqueue_script('scripts', get_template_directory_uri() . "/assets/js/main.js", array(), 1.0, true);
}

add_action('wp_enqueue_scripts', 'fruitbro_register_scripts');

// add menu options
function setup_menus()
{
    $locations = array(
        'primary' => "main menu",
        'footer' => "footer menu"
    );
    register_nav_menus($locations);
}
add_action('init', 'setup_menus');

function clickk_startSession() {
    if(!session_id()) {
        session_start();
    }
}

add_action('init', 'clickk_startSession', 1);


//SCHEDULE A NEW DATE PICKER TO BE CREATED 3 months INTO FUTURE
// Scheduled Action Hook
function add_date_90_days() {
	// Variables
	$today = date( 'Ymd' );	
    $ninety_days = date('d/m/Y', strtotime($today. ' + 93 days'));
    $nice_string_nintety_days = date('d/m/Y', strtotime($today. ' + 93 days'));
    $acf_string_nintety_days = date('Ymd', strtotime($today. ' + 93 days'));
    $current_day = date('D', strtotime(date('Y-m-d', strtotime($today. ' + 93 days'))));
	
	define( POST_NAME, $nice_string_nintety_days . ' ' .$current_day );
    define( POST_TYPE, 'delivery_date' );

    $post_data = array(
		'post_title'    => wp_strip_all_tags( POST_NAME ),
		'post_status'   => 'publish',
		'post_type'     => POST_TYPE
	);

	$post_id = wp_insert_post( $post_data, $error_obj );

    //Set date
    $field_key = "date";
    $value = $acf_string_nintety_days;
    update_field( $field_key, $value, $post_id);
}

// Schedule Cron Job Event
function nintety_days_cron_job() {
	wp_schedule_event( strtotime('2022-03-21T01:43:00+00:00 '), 'daily', 'add_date_90_days' );
}

add_action( 'wp', 'nintety_days_cron_job' );