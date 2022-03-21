<?php
/**
 * Plugin Name: Delivery Dates
 * Plugin URI: http://www.clickk.com.au
 * Description: Delivery date selector
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://www.clickk.com.au
 */




 function user_input_delivery_dates()
 {
   $postcode = 2300;
   
   if ($postcode === 2324)
   {
        raymond_terrace_exception();
   }

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

    echo '<h2>' . $acf_string_nintety_days . '</h2>';

    //Set date
    $field_key = "date";
    $value = $acf_string_nintety_days;
    update_field( $field_key, $value, $post_id);


    echo $ninety_days . "  " . $current_day; 

    //Set default order days
    $default_newcastle = 50; 
    $default_nelson_bay = 0;
    $default_swansea = 0;
    $default_maitland = 0; 

    switch ($current_day) {
        case "Tue": 
            $default_swansea = 50;
            break;
        case "Wed": 
            $default_nelson_bay = 50;
            break;
        case "Thu":
            $default_maitland = 50;
            break;
        case "Fri": 
            $default_nelson_bay = 50;
            break;
        case "Sun": 
            $default_newcastle = 00; 
            $default_nelson_bay = 0;
            $default_swansea = 0;
            $default_maitland = 0; 
            break;

    }

    echo "Limits for " . $ninety_days . "  " . $current_day . "<br>"; 
    echo "Newcastle ". $default_newcastle . "<br>";
    echo "Nelson Bay ". $default_nelson_bay . "<br>";
    echo "Swansea ". $default_swansea . "<br>";
    echo "Maitland ". $default_maitland . "<br>";

    foreach()

 }

 add_shortcode( 'show-del-input', 'user_input_delivery_dates' );

 function raymond_terrace_exception()
 {
     echo 'We can only ship to Raymond Terrace, not Karuah';
 }
 

 ?>