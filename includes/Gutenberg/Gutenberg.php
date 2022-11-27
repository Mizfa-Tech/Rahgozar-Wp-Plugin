<?php

namespace rahgozar\inc\Gutenberg;

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
		wp_enqueue_script(
			'rahgozar-gutenberg-block',
			RAHGOZAR_URL . '/assets/js/GutenbergBlock.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-editor' ),
			true
		);
	}
}