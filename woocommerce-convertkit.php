<?php
/**
 * Plugin Name: ConvertKit for WooCommerce
 * Plugin URI:  https://www.convertkit.com
 * Description: Integrates WooCommerce with ConvertKit allowing customers to be automatically sent to your ConvertKit account.
 * Version: 1.4.1
 * Author: ConvertKit
 * Author URI: https://www.convertkit.com
 *
 * WC requires at least: 3.0
 * WC tested up to: 4.2
 */


if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! defined( 'CKWC_CACHE_PERIOD' ) ) {
	define( 'CKWC_CACHE_PERIOD', 6 * HOUR_IN_SECONDS );
}

if ( ! defined( 'CKWC_PLUGIN_BASENAME' ) ) {
	define( 'CKWC_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}

if ( ! defined( 'CKWC_PLUGIN_DIRPATH' ) ) {
	define( 'CKWC_PLUGIN_DIRPATH', trailingslashit( dirname( __FILE__ ) ) );
}

if ( ! defined( 'CKWC_PLUGIN_FILEPATH' ) ) {
	define( 'CKWC_PLUGIN_FILEPATH', __FILE__ );
}

if ( ! defined( 'CKWC_VERSION' ) ) {
	define( 'CKWC_VERSION', '1.4.1' );
}

if ( ! defined( 'CKWC_MIN_WC_VERSION' ) ) {
	define( 'CKWC_MIN_WC_VERSION', '3.0.0' );
}

if ( ! defined( 'CKWC_SLUG' ) ) {
	define( 'CKWC_SLUG', 'ckwc' );
}

if ( ! defined( 'CKWC_TITLE' ) ) {
	define( 'CKWC_TITLE', 'ConvertKit for WooCommerce' );
}

if ( ! defined( 'CKWC_SHORT_TITLE' ) ) {
	define( 'CKWC_SHORT_TITLE', 'ConvertKit' );
}

// Require the plugin's function definitions
// These files provide generic functions that don't really belong as part of a component
require_once( path_join( CKWC_PLUGIN_DIRPATH, 'functions/convertkit.php' ) );
require_once( path_join( CKWC_PLUGIN_DIRPATH, 'functions/utility.php' ) );

function ckwc_plugins_loaded() {
	if ( ckwc_requirements_met() ) {
		require_once( path_join( CKWC_PLUGIN_DIRPATH, 'components/integration/integration.php' ) );
	}
}
add_action( 'plugins_loaded', 'ckwc_plugins_loaded' );
