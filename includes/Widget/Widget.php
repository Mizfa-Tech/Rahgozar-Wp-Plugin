<?php

namespace rahgozar\inc\Widget;

class Widget extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'rahgozar_widget', // Base ID
			'ویجت رهگذر', // Name
			array(
				'description' => 'رهگذر نویسند‌ه‌ای خیالی است که متنی موقت برای طراحان گرافیک و وبسایت می‌نویسد. این متن یک متن ساختگی است.'
			) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 *
	 * @see WP_Widget::widget()
	 *
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$rahgozar_text = apply_filters( 'widget_block_content', $instance['rahgozar_text'] );
		echo $before_widget;
		?>
        <p class="rahgozar_text">
			<?php echo $rahgozar_text; ?>
        </p>
		<?php
		echo $after_widget;
	}

	/**
	 * Back-end widget form.
	 *
	 * @param array $instance Previously saved values from database.
	 *
	 * @see WP_Widget::form()
	 *
	 */
	public function form( $instance ) {
		if ( isset( $instance['rahgozar_text'] ) ) {
			$rahgozar_text = trim( $instance['rahgozar_text'] );
		} else {
			$rahgozar_text = trim( 'رهگذر نویسند‌ه‌ای خیالی است که متنی موقت برای طراحان گرافیک و وبسایت می‌نویسد. این متن یک متن ساختگی است، که در طرح های اولیه گرافیکی و پیاده سازی اولیه وب سایت ها استفاده می‌شود. رهگذر در مورد همه چیز اطلاعات دارد از صنعت چاپ سنتی و صنعتی گرفته تا تکنولوژی‌های روز دنیا که هرکدام کاربردهای مختلفی دارند که هدف اصلی هریک بهبود شرایط زندگی شماست. رهگذر کتابهای زیادی درباره‌ی نرم افزارهای مختلف خوانده است و می‌تواند راهنمای خوبی برای طراحان فارسی زبان باشد. طراحان می‌توانند امید داشته باشند که با پیشرفت دنیای تکنولوژی شرایط و مشکلات سخت در حوزه‌ی کاریشان به پایان برسد.' );
		}
		?>
        <p>
            <label for="<?php echo $this->get_field_name( 'rahgozar_text' ); ?>">
                متن رهگذر :
            </label>
            <textarea class="rahgozar_block_textarea" name="<?php echo $this->get_field_name( 'rahgozar_text' ); ?>" id="<?php echo $this->get_field_id( 'rahgozar_text' ); ?>" cols="100" rows="8">
                <?php echo $rahgozar_text; ?>
            </textarea>
        </p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 * @see WP_Widget::update()
	 *
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                  = array();
		$instance['rahgozar_text'] = ( ! empty( $new_instance['rahgozar_text'] ) ) ? sanitize_textarea_field( trim( $new_instance['rahgozar_text'] ) ) : '';

		return $instance;
	}
}