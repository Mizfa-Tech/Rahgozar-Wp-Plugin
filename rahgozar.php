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


/*
|--------------------------------------------------------------------------
| TinyMCE
|--------------------------------------------------------------------------
| TinyMCE is an online rich-text editor released as open-source software under
| the MIT License. It has the ability to convert HTML text area fields or other
| HTML elements to editor instances.
|
| Customize the TinyMCE.
|
*/

$tinyMCE = new \rahgozar\inc\TinyMCE\TinyMCE();


/*
|--------------------------------------------------------------------------
| Gutenberg block
|--------------------------------------------------------------------------
| Gutenberg, the editor that has taken the classic place and is now one of
| the most powerful editors, blocks related to Gutenberg are placed in this file.
|
*/

$gutenberg = new \rahgozar\inc\Gutenberg\Gutenberg();