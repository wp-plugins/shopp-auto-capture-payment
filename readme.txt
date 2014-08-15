=== Shopp Auto Capture Payment (sacp) ===
Plugin Name: Shopp Auto Capture Payment
Plugin URI: http://www.shoppdeveloper.com/
Author: Shoppdeveloper.com Team
Author URI: http://www.shoppdeveloper.com/
Contributors : Shoppdeveloper.com
Tags: shopp, auto-capture, ecommerce, webshop, payment
Requires at least: 2.0.2
Tested up to: 3.9
Stable tag: 0.1

Add-on for <a href="http://wordpress.org/plugins/shopp/" target="_blank">Shopp e-commerce</a> plugin to auto capture payments.

== Description ==

Warning!

Visa and MasterCard rules require that merchants only authorize payments for delayed fullfillment orders
until the order ships out. In other words, merchants are not supposed to capture the payment until the
shipment is handed over to the shipping carrier. It is not illegal to authorize and capture payments
before shipping. But it puts both the merchant and the customer at higher risk. 
For this reason, to protect the merchant, Shopp uses authorization-only payment processing for shipped orders.

Despite the risks, some merchants still prefer the automatic capture when new orders are placed.
You can edit your theme's functions.php but these changes are lost on future theme update. 
This plugin will do the dirty work for you.

== Installation ==

Install the plugin through your WordPress Admin Panel, or

1. Download the plugin zip-file.
2. Unzip the zip-file.
3. Upload the files to the `/wp-content/plugins/` directory
4. The plugin is NOT going to change or edit your Shopp files, but just to be sure, backup your files and database.
5. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 0.1 =
First version to distribute