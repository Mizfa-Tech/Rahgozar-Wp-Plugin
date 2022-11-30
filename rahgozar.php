<?php
/**
 * Plugin Name: Rahgozar
 * Plugin URI: https://github.com/Mizfa-Tech
 * Description: Making beautiful words and sentences with Rahgozar.
 * Version: 1.0.0
 * Author: Mizfa-Tech
 * Author URI: https://github.com/Mizfa-Tech
 * Text Domain: rahgozar
 * Domain Path: /languages/
 * Requires at least: 5.8
 * Requires PHP: 8.0
 *
 * ██████╗░░█████╗░██╗░░██╗░██████╗░░█████╗░███████╗░█████╗░██████╗░
 * ██╔══██╗██╔══██╗██║░░██║██╔════╝░██╔══██╗╚════██║██╔══██╗██╔══██╗
 * ██████╔╝███████║███████║██║░░██╗░██║░░██║░░███╔═╝███████║██████╔╝
 * ██╔══██╗██╔══██║██╔══██║██║░░╚██╗██║░░██║██╔══╝░░██╔══██║██╔══██╗
 * ██║░░██║██║░░██║██║░░██║╚██████╔╝╚█████╔╝███████╗██║░░██║██║░░██║
 * ╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚═╝░╚═════╝░░╚════╝░╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝
 *
 * @package Rahgozar
 */


/*
|--------------------------------------------------------------------------
| Prevent direct access
|--------------------------------------------------------------------------
|
| Definitely, the most important file in the theme is functions file, which is
| very important to protect and should be prevented from direct access to it.
|
*/

defined( 'ABSPATH' ) || exit;


/*
|--------------------------------------------------------------------------
| Constants
|--------------------------------------------------------------------------
| Constants have values that are defined for use in different parts of the
| project, and if they are changed, all their references will also change.
|
*/

define( 'RAHGOZAR_PATH', plugin_dir_path( __FILE__ ) );
define( 'RAHGOZAR_URL', plugin_dir_url( __FILE__ ) );


/*
|--------------------------------------------------------------------------
| Composer
|--------------------------------------------------------------------------
|
| The main dependencies of the format are these files, whose presence is very
| important and if they are not there, the project will have problems.
|
*/

if ( ! file_exists( $autoloader = RAHGOZAR_PATH . '/vendor/autoload.php' ) ) {
	wp_die( 'Composer Autoloader Required' );
}
require $autoloader;


// Include the main Rahgozar class.
if ( ! class_exists( '\rahgozar\bootstrap\Rahgozar', false ) ) {
	require_once RAHGOZAR_PATH . '/bootstrap/Rahgozar.php';
}


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
|
|
*/

$rahgozar = \rahgozar\bootstrap\Rahgozar::instance();
$rahgozar->boot();
