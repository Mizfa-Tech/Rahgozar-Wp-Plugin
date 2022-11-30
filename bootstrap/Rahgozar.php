<?php

namespace rahgozar\bootstrap;

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
}