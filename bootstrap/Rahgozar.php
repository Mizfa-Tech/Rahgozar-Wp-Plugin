<?php

namespace rahgozar\bootstrap;

use rahgozar\inc\Gutenberg\Gutenberg;
use rahgozar\inc\Menu\Admin_Menu;
use rahgozar\inc\TinyMCE\TinyMCE;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Rahgozar {

	/**
	 * The single instance of the class.
	 *
	 * @var Rahgozar|null
	 * @since 2.1
	 */
	protected static ?Rahgozar $_instance = null;


	/**
	 * Rahgozar Constructor.
	 */
	public function __construct() {
	}

	/**
	 * Main WooCommerce Instance.
	 *
	 * Ensures only one instance of Rahgozar is loaded or can be loaded.
	 *
	 * @return Rahgozar - Main instance.
	 * @since 1.0
	 * @static
	 */
	public static function instance(): Rahgozar {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 *
	 *
	 * @return void
	 */
	public function boot(): void {
		$this->instances();
		$this->widgets();
	}

	/**
	 *
	 *
	 * @return void
	 */
	private function instances(): void {

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

		$tinyMCE = new TinyMCE();


		/*
		|--------------------------------------------------------------------------
		| Gutenberg block
		|--------------------------------------------------------------------------
		| Gutenberg, the editor that has taken the classic place and is now one of
		| the most powerful editors, blocks related to Gutenberg are placed in this file.
		|
		*/

		$gutenberg = new Gutenberg();


		/*
		|--------------------------------------------------------------------------
		| Dashboard Menus
		|--------------------------------------------------------------------------
		|
		| Creating the main menu and submenus of the plugin in the WordPress dashboard.
		|
		*/

		$dashboard_menu = new Admin_Menu();
	}

	/**
	 *
	 *
	 * @return void
	 */
	private function widgets(): void {

		/*
		|--------------------------------------------------------------------------
		| WP Widgets.
		|--------------------------------------------------------------------------
		|
		| Register WP widgets.
		|
		*/

		add_action( 'widgets_init', array( $this, 'register_wp_widgets' ) );

		/*
		|--------------------------------------------------------------------------
		| Elementor widgets
		|--------------------------------------------------------------------------
		|
		| Register elementor widgets.
		|
		*/

		add_action( 'elementor/widgets/register', array( $this, 'register_elementor_widgets' ) );
	}

	/**
	 *
	 *
	 * @return void
	 */
	public function register_wp_widgets(): void {
		register_widget( '\rahgozar\inc\Widget\Widget' );
	}

	/**
	 *
	 *
	 * @param $widgets_manager
	 *
	 * @return void
	 */
	public function register_elementor_widgets( $widgets_manager ): void {
		$widgets_manager->register( new \rahgozar\inc\Elementor\Rahgozar_Widget() );
	}
}