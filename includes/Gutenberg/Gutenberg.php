<?php

namespace rahgozar\inc\Gutenberg;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Gutenberg {

	public function __construct() {
		add_action( 'enqueue_block_editor_assets', array( $this, 'register_block' ) );
	}

	/**
	 * register gutenberg blocks
	 *
	 * @return void
	 */
	public function register_block(): void {

		// all block styles
		wp_enqueue_style(
			'rahgozar-gutenberg-block-css',
			RAHGOZAR_URL . '/assets/css/GutenbergBlock.css',
			array(),
			true
		);

		// block main js file
		wp_enqueue_script(
			'rahgozar-gutenberg-block',
			RAHGOZAR_URL . '/assets/js/GutenbergBlock.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-editor' ),
			true
		);
	}
}