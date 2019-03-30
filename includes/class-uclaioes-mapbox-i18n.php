<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.ioes.ucla.edu
 * @since      1.0.0
 *
 * @package    Uclaioes_Mapbox
 * @subpackage Uclaioes_Mapbox/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Uclaioes_Mapbox
 * @subpackage Uclaioes_Mapbox/includes
 * @author     Scott Gruber <sgruber@ioes.ucla.edu>
 */
class Uclaioes_Mapbox_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'uclaioes-mapbox',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
