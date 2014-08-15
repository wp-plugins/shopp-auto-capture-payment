<?php
/**
* Plugin Name: Shopp Auto Capture Payment
* Plugin URI: http://www.shoppdeveloper.com/shopp-auto-capture-payment
* Description: Add-on for Shopp e-commerce plugin to auto capture payments.
* Author: Shoppdeveloper.com Team
* Author URI: http://www.shoppdeveloper.com
* Version: 0.1
*/

defined( 'WPINC' ) || header( 'HTTP/1.1 403' ) & exit;

add_action('init','sacp_init');

function sacp_init(){

    if ( function_exists('shopp') ) {

	    // only start when Shopp is activated
        add_filter('shopp_purchase_order_processing', create_function('', 'return "sale";'));
    }
}