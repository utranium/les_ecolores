<?php
/*
Plugin Name: WPS Cleaner
Description: WPS Cleaner permet de nettoyer la base de données et le WordPress.
Donate link: https://www.paypal.me/donateWPServeur
Author: WPServeur, NicolasKulka
Author URI: https://wpserveur.net
Version: 1.4.8
Requires at least: 4.2
Tested up to: 5.4
Domain Path: languages
Text Domain: wps-cleaner
License: GPL2
*/

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Plugin constants
define( 'WPS_CLEANER_VERSION', '1.4.8' );
define( 'WPS_CLEANER_FOLDER', 'wps-cleaner' );
define( 'WPS_CLEANER_BASENAME', plugin_basename( __FILE__ ) );
if ( ! defined( 'WPS_PUB_API_URL' ) ) {
	define( 'WPS_PUB_API_URL', 'https://www.wpserveur.net/wp-json/' );
}

define( 'WPS_CLEANER_URL', plugin_dir_url( __FILE__ ) );
define( 'WPS_CLEANER_DIR', plugin_dir_path( __FILE__ ) );

define( 'WPS_CLEANER_CRON_QTY', 1000 );

require_once WPS_CLEANER_DIR . 'autoload.php';

register_activation_hook( __FILE__, array( '\WPS\WPS_Cleaner\Plugin', 'install' ) );
register_deactivation_hook( __FILE__, array( '\WPS\WPS_Cleaner\Plugin', 'deactivate' ) );
register_uninstall_hook( __FILE__, array( '\WPS\WPS_Cleaner\Plugin', 'uninstall' ) );

add_action( 'plugins_loaded', 'plugins_loaded_wps_cleaner_plugin' );
function plugins_loaded_wps_cleaner_plugin() {
	\WPS\WPS_Cleaner\DB_Table::get_instance();

	\WPS\WPS_Cleaner\Plugin::get_instance();
	\WPS\WPS_Cleaner\Index::get_instance();

	load_plugin_textdomain( 'wps-cleaner', false, basename( rtrim( dirname( __FILE__ ), '/' ) ) . '/languages' );

	$message = __( 'Do you like plugin WPS Cleaner? <br> Thank you for taking a few seconds to note us on', 'wps-hide-login' );
	if( 'fr_FR' === get_locale() ) {
		$message = 'Vous aimez l\'extension WPS Cleaner ?<br>Merci de prendre quelques secondes pour nous noter sur';
	}

	new \WP_Review_Me(
		array(
			'days_after' => 10,
			'type'       => 'plugin',
			'slug'       => 'wps-cleaner',
			'message'    => $message,
			'link_label' => 'WordPress.org'
		)
	);
}
