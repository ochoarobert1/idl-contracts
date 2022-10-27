<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://robertochoaweb.com
 * @since      1.0.0
 *
 * @package    Idl_Contracts
 * @subpackage Idl_Contracts/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Idl_Contracts
 * @subpackage Idl_Contracts/includes
 * @author     Robert Ochoa <ochoa.robert1@gmail.com>
 */
class Idl_Contracts_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'idl-contracts',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
