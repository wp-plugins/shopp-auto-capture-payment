<?php
/**
* Plugin Name: Shopp Auto Capture Payment
* Plugin URI: http://www.shoppdeveloper.com/shopp-auto-capture-payment
* Description: Add-on for Shopp e-commerce plugin to auto capture payments.
* Author: Shoppdeveloper.com
* Author URI: http://www.shoppdeveloper.com
* Version: 0.1.1
*/

defined( 'WPINC' ) || header( 'HTTP/1.1 403' ) & exit;

add_action('init','sacp_init');

function sacp_init(){

    // only start if Shopp is activated
    if ( function_exists('shopp') ) {

		// exclude paymentgateways that have no capture option
		$exclude = array('ShoppOfflinePayment');
		// retrieve all active gateways from database
		$active = shopp_setting('active_gateways');
		// if any active gateways present
		if ( ! empty($active) ) {
			// convert string to array
			$gateways = explode(',',$active);
			// loop through available gateways
			foreach ( $gateways as $key=>$value ){
				// remove counter number from gateway name
				$gateway = split('-', $value);
				// if gateway name is not present in $exclude, apply the auto-capture filter
				if ( ! in_array($gateway[0], $exclude) ) add_filter('shopp_purchase_order_' . strtolower($gateway[0]) . '_processing', create_function('', 'return "sale";'));
			}
		}
    }
}