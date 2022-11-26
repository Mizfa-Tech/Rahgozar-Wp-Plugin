<?php

namespace rahgozar\inc\TinyMCE;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class TinyMCE {


	public function __construct() {
		// init process for button control
		add_action( 'init', array( $this, 'register_button' ) );
	}

	/**
	 * register rahgozar generator buttons
	 *
	 * @return void
	 */
	public function register_button(): void {
		// Don't bother doing this stuff if the current user lacks permissions
		if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
			return;
		}

		// Add only in Rich Editor mode
		if ( get_user_option( 'rich_editing' ) == 'true' ) {
			add_filter( "mce_external_plugins", array( $this, 'ipsum_plugin' ), 0 );
			add_filter( 'mce_buttons', array( $this, 'add_button' ) );
		}
	}

	/**
	 * add rahgozar generator button to list of buttons.
	 *
	 * @param $buttons
	 *
	 * @return mixed
	 */
	public function add_button( $buttons ): mixed {
		array_push( $buttons, 'separator', 'rahgozar_ipsum' );

		return $buttons;
	}

	/**
	 * Load the TinyMCE plugin : editor_plugin.js (wp2.5)
	 *
	 * @param $plugin_array
	 *
	 * @return mixed
	 */
	public function ipsum_plugin( $plugin_array ): mixed {
		$plugin_array['rahgozar_ipsum'] = RAHGOZAR_URL . 'assets/js/TinyMCE.js';

		return $plugin_array;
	}
}