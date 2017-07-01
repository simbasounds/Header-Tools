<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://simonbarnett.co.za
 * @since             1.0.0
 * @package           Header_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       Header Tools
 * Plugin URI:        https://github.com/simbasounds/header-tools
 * Description:       Modify, style, and add features to the WordPress header and header menu. Currently supported: Beaver Builder Theme and Plugin.
 * Version:           1.0.0
 * Author:            Simon Barnett
 * Author URI:        http://simonbarnett.co.za
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       header-tools
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-header-tools-activator.php
 */
function activate_header_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-header-tools-activator.php';
	Header_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-header-tools-deactivator.php
 */
function deactivate_header_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-header-tools-deactivator.php';
	Header_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_header_tools' );
register_deactivation_hook( __FILE__, 'deactivate_header_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-header-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_header_tools() {

	$plugin = new Header_Tools();
	$plugin->run();

}
run_header_tools();
