<?php

namespace rahgozar\inc\Elementor;

use Elementor\Controls_Manager;
use rahgozar\inc\Elementor\Contract\Rahgozar_Widget_Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Rahgozar_Widget extends Rahgozar_Widget_Base {

	/**
	 *
	 *
	 * @var string
	 */
	private string $text = '';

	/**
	 *
	 *
	 * @var array|string[]
	 */
	private array $types = array(
		'paragraph' => 'پاراگراف',
		'text'      => 'جمله',
		'word'      => 'کلمه'
	);

	/**
	 *
	 *
	 * @var array|string[]
	 */
	private array $tags = array(
		'h1'   => 'H1',
		'h2'   => 'H2',
		'h3'   => 'H3',
		'h4'   => 'H4',
		'h5'   => 'H5',
		'h6'   => 'H6',
		'div'  => 'div',
		'p'    => 'p',
		'span' => 'span',
	);

	/**
	 * Widget base constructor.
	 *
	 * Initializing the widget base class.
	 *
	 * @param array      $data Widget data. Default is an empty array.
	 * @param array|null $args Optional. Widget default arguments. Default is null.
	 *
	 * @throws \Exception If arguments are missing when initializing a full widget
	 *                   instance.
	 *
	 * @since  1.0.0
	 * @access public
	 *
	 */
	public function __construct( $data = [], $args = null ) {
		parent::__construct( $data, $args );

		$this->text = 'رهگذر نویسند‌ه‌ای خیالی است که متنی موقت برای طراحان گرافیک و وبسایت می‌نویسد. این متن یک متن ساختگی است، که در طرح های اولیه گرافیکی و پیاده سازی اولیه وب سایت ها استفاده می‌شود. رهگذر در مورد همه چیز اطلاعات دارد از صنعت چاپ سنتی و صنعتی گرفته تا تکنولوژی‌های روز دنیا که هرکدام کاربردهای مختلفی دارند که هدف اصلی هریک بهبود شرایط زندگی شماست. رهگذر کتابهای زیادی درباره‌ی نرم افزارهای مختلف خوانده است و می‌تواند راهنمای خوبی برای طراحان فارسی زبان باشد. طراحان می‌توانند امید داشته باشند که با پیشرفت دنیای تکنولوژی شرایط و مشکلات سخت در حوزه‌ی کاریشان به پایان برسد.';
	}

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
			array(
				'label' => 'رهگذر',
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'rahgozar_ipsum_select',
			array(
				'label'   => 'نوع : ',
				'type'    => Controls_Manager::SELECT,
				'options' => $this->types,
				'default' => 'paragraph'
			)
		);

		$this->add_control(
			'rahgozar_ipsum_count',
			array(
				'label'   => 'تعداد : ',
				'type'    => Controls_Manager::NUMBER,
				'min'     => 1,
				'default' => 1,
			)
		);

		$this->add_control(
			'rahgozar_ipsum_tag',
			array(
				'label'   => 'تگ HTML : ',
				'type'    => Controls_Manager::SELECT,
				'options' => $this->tags,
				'default' => 'p',
			)
		);

		$this->add_control(
			'rahgozar_ipsum_tag_class',
			array(
				'label'   => 'کلاس ها : ',
				'type'    => Controls_Manager::TEXT,
				'default' => '',
			)
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
		$settings = $this->get_settings_for_display();
		?>

        <<?php echo $settings['rahgozar_ipsum_tag']; ?> class="<?php echo $settings['rahgozar_ipsum_tag_class']; ?>">

		<?php echo $this->render_text_content( $settings['rahgozar_ipsum_select'], $settings['rahgozar_ipsum_count'] ); ?>

        </<?php echo $settings['rahgozar_ipsum_tag']; ?>>

		<?php
	}

	/**
	 *
	 *
	 * @param string $type
	 * @param int    $count
	 *
	 * @return string
	 */
	private function render_text_content( string $type, int $count ): string {
		if ( ! in_array( $type, array_keys( $this->types ) ) ) {
			return '';
		}
		$method_name = 'get_' . $type;

		return $this->{$method_name}( $count );
	}

	/**
	 * paragraph content.
	 *
	 * @param int $count
	 *
	 * @return string
	 */
	private function get_paragraph( int $count ): string {
		return str_repeat( $this->text, $count );
	}

	/**
	 * text content.
	 *
	 * @param int $count
	 *
	 * @return string
	 */
	private function get_text( int $count ): string {
		$text = explode( '.', $this->text );

		return implode( '. ', array_slice( $text, 0, $count ) );
	}

	/**
	 * word content.
	 *
	 * @param int $count
	 *
	 * @return string
	 */
	private function get_word( int $count ): string {
		$words = explode( ' ', $this->text );

		return implode( ' ', array_slice( $words, 0, $count ) );
	}
}