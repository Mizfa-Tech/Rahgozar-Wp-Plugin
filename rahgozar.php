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
 * @package Rahgozar
 */


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| 
|
*/

defined( 'ABSPATH' ) || exit;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
|
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


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| 
|
*/

$tinyMCE = new \rahgozar\inc\TinyMCE\TinyMCE();