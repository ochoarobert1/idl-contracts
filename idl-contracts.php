<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://robertochoaweb.com
 * @since             1.0.0
 * @package           Idl_Contracts
 *
 * @wordpress-plugin
 * Plugin Name:       IDL Contracts
 * Plugin URI:        https://idlentertainment.com
 * Description:       Plugin for exporting contracts in PDF format
 * Version:           1.0.0
 * Author:            Robert Ochoa
 * Author URI:        https://robertochoaweb.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       idl-contracts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'IDL_CONTRACTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-idl-contracts-activator.php
 */
function activate_idl_contracts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-idl-contracts-activator.php';
	Idl_Contracts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-idl-contracts-deactivator.php
 */
function deactivate_idl_contracts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-idl-contracts-deactivator.php';
	Idl_Contracts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_idl_contracts' );
register_deactivation_hook( __FILE__, 'deactivate_idl_contracts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-idl-contracts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_idl_contracts() {

	$plugin = new Idl_Contracts();
	$plugin->run();

}
run_idl_contracts();
