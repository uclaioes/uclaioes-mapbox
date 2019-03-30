<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.ioes.ucla.edu
 * @since             1.0.0
 * @package           Uclaioes_Mapbox
 *
 * @wordpress-plugin
 * Plugin Name:       UCLA IoES Mapbox
 * Plugin URI:        www.github.com/uclaioes/uclaioes-mapbox
 * Description:       Activate and manage a custom map using mapbox.
 * Version:           1.0.0
 * Author:            Scott Gruber
 * Author URI:        https://www.ioes.ucla.edu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       uclaioes-mapbox
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
define( 'UCLAIOES_MAPBOX_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-uclaioes-mapbox-activator.php
 */
function activate_uclaioes_mapbox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-uclaioes-mapbox-activator.php';
	Uclaioes_Mapbox_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-uclaioes-mapbox-deactivator.php
 */
function deactivate_uclaioes_mapbox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-uclaioes-mapbox-deactivator.php';
	Uclaioes_Mapbox_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_uclaioes_mapbox' );
register_deactivation_hook( __FILE__, 'deactivate_uclaioes_mapbox' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-uclaioes-mapbox.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_uclaioes_mapbox() {

	$plugin = new Uclaioes_Mapbox();
	$plugin->run();

}
run_uclaioes_mapbox();
