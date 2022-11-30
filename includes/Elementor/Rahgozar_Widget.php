<?php

namespace rahgozar\inc\Elementor;

use Elementor\Controls_Manager;
use rahgozar\inc\Elementor\Contract\Rahgozar_Widget_Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Rahgozar_Widget extends Rahgozar_Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve list widget name.
	 *
	 * @return string Widget name.
	 * @since  1.0.0
	 * @access public
	 */
	public function get_name(): string {
		return 'rahgozar_ipsum';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve list widget title.
	 *
	 * @return string Widget title.
	 * @since  1.0.0
	 * @access public
	 */
	public function get_title(): string {
		return 'متن ساز رهگذر';
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve list widget icon.
	 *
	 * @return string Widget icon.
	 * @since  1.0.0
	 * @access public
	 */
	public function get_icon(): string {
		return 'eicon-t-letter';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the list widget belongs to.
	 *
	 * @return array Widget categories.
	 * @since  1.0.0
	 * @access public
	 */
	public function get_categories(): array {
		return array( 'basic' );
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the list widget belongs to.
	 *
	 * @return array Widget keywords.
	 * @since  1.0.0
	 * @access public
	 */
	public function get_keywords(): array {
		return array( 'rahgozar', 'text', 'ipsum', 'lorem', 'loremipsum', 'paragraph' );
	}

	/**
	 * Register list widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'rahgozar_ipsum_setting',
			[
				'label' => 'تنظیمات رهگذر',
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'rahgozar_ipsum_select',
			[
				'label'   => 'عنوان',
				'type'    => Controls_Manager::TEXT,
				'default' => ''
			]
		);


		$this->end_controls_section();
	}

	/**
	 * Render list widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function render() {
		echo 'Hi';
	}
}