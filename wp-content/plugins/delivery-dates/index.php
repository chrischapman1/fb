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

    global $post, $woocommerce;

    $delivery_zones = WC_Shipping_Zones::get_zones();

    //GET EACH SHIPPING ZONE AND CHECK POSTCODE
  
    $args = array( 
                    'post_type' => 'delivery_date' ,
                    'posts_per_page' => 30,
                    'orderby'        => 'date',
                    'order'          => 'DESC'
                );

    $delivery_date = get_posts( $args );

    echo "Your postcode is " . $postcode;
    
    //MAke a select for customer to choose next date
    echo "<select  type=\"text\" id=\"del-date\">" ; 

    //Each available date
    foreach($delivery_date as $current_date) {
        //Checks if not at capacity
        if (intval(get_field("current", $current_date)) < intval(get_field("capacity", $current_date)))
        {
            $current_day = date('D', strtotime(get_field("date", $current_date)));
            echo "<option value=\"" . get_field("date", $current_date) . "\">" . $current_day . " " . get_field("date", $current_date) . "</option>";
        }
    }

    echo "</select>";

 }

 add_shortcode( 'show-del-input', 'user_input_delivery_dates' );

 function raymond_terrace_exception()
 {
     echo 'We can only ship to Raymond Terrace, not Karuah';
 }
 

 ?>