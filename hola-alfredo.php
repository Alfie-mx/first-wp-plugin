<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.alfredordz.com
 * @since             1.0.0
 * @package           Hola_Alfredo
 *
 * @wordpress-plugin
 * Plugin Name:       Hola Alfredo
 * Plugin URI:        hola-alfredo-uri
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Alfredo
 * Author URI:        http://www.alfredordz.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hola-alfredo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hola-alfredo-activator.php
 */
function activate_hola_alfredo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hola-alfredo-activator.php';
	Hola_Alfredo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hola-alfredo-deactivator.php
 */
function deactivate_hola_alfredo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hola-alfredo-deactivator.php';
	Hola_Alfredo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hola_alfredo' );
register_deactivation_hook( __FILE__, 'deactivate_hola_alfredo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hola-alfredo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hola_alfredo() {

	$plugin = new Hola_Alfredo();
	$plugin->run();

}
run_hola_alfredo();
