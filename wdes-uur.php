<?php

/**
 * Plugin Name: WDES User Upload Restriction
 * Plugin URI: https://www.anthonycarbon.com/
 * Description: WDES User Upload Restriction is built to remove all the images that is not upload by the current user.
 * Text Domain: wdes-uur
 * Version: 1.0.2
 * Author: <a href="https://www.anthonycarbon.com/">Anthony Carbon</a>
 * Author URI: https://www.anthonycarbon.com/
 * Donate link: https://www.paypal.me/anthonypagaycarbon
 * Tags: User Upload Restriction, Image, Image Upload, Upload, Users, User Role, anthonycarbon.com
 * Requires at least: 4.4
 * Tested up to: 5.0
 * Stable tag: 1.0.2
**/

if ( !defined('ABSPATH') ){ exit; }

define( 'WDES_UUR_PLUGIN_URL', plugin_dir_url(__FILE__) );
define( 'WDES_UUR_PLUGIN_IMG', WDES_UUR_PLUGIN_URL . 'assets/images/' );

function wdes_uur_url(){
	return plugins_url( basename( plugin_dir_path(__FILE__) ), basename(__FILE__) );
}

require_once( 'lib/functions/actions.php' );
require_once( 'lib/functions/functions.php' );