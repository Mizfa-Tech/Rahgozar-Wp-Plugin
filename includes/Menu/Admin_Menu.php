<?php

namespace rahgozar\inc\Menu;

class Admin_Menu {

	/**
	 * default text
	 *
	 * @var string
	 */
	private string $default_text;

	public function __construct() {
		$this->default_text = 'رهگذر نویسند‌ه‌ای خیالی است که متنی موقت برای طراحان گرافیک و وبسایت می‌نویسد. این متن یک متن ساختگی است، که در طرح های اولیه گرافیکی و پیاده سازی اولیه وب سایت ها استفاده می‌شود. رهگذر در مورد همه چیز اطلاعات دارد از صنعت چاپ سنتی و صنعتی گرفته تا تکنولوژی‌های روز دنیا که هرکدام کاربردهای مختلفی دارند که هدف اصلی هریک بهبود شرایط زندگی شماست. رهگذر کتابهای زیادی درباره‌ی نرم افزارهای مختلف خوانده است و می‌تواند راهنمای خوبی برای طراحان فارسی زبان باشد. طراحان می‌توانند امید داشته باشند که با پیشرفت دنیای تکنولوژی شرایط و مشکلات سخت در حوزه‌ی کاریشان به پایان برسد.';
		add_action( 'admin_menu', array( $this, 'sub_menu' ) );
	}

	/**
	 *
	 *
	 * @return void
	 */
	public function sub_menu(): void {
		add_submenu_page(
			'tools.php',
			'متن ساز رهگذر',
			'رهگذر',
			'manage_options',
			'rahgozar',
			array( $this, 'sub_menu_callback' ),
		);
	}

	/**
	 *
	 *
	 * @return void
	 */
	public function sub_menu_callback(): void {

		if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
			$this->save_text_option( sanitize_textarea_field( $_POST['rahgozar_text'] ) );
		}

		$rahgozar_text   = get_option( 'rahgozar_text', $this->default_text );
		$text_word_count = ! empty( $rahgozar_text ) ? count( explode( ' ', $rahgozar_text ) ) : 0;
		?>
        <div class="wrap">
            <h2>متن ساز رهگذر</h2>

            <form action="" method="post">

                <tabel class="form-table">

                    <tbody>

                    <tr>
                        <th scope="row"></th>
                        <td>
                            <textarea name="rahgozar_text" class="large-text code" rows="5"><?php echo $rahgozar_text ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><label for="text_word_count">تعداد کلمات</label></th>
                        <td>
                            <input type="number" id="text_word_count" value="<?php echo $text_word_count; ?>" class="small-text" disabled>
                        </td>
                    </tr>

                    </tbody>

                </tabel>

                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="ذخیرهٔ تغییرات">
                </p>

            </form>
        </div>
		<?php
	}

	/**
	 *
	 *
	 * @param string $text
	 *
	 * @return void
	 */
	private function save_text_option( string $text ): void {
		$current_text = get_option( 'rahgozar_text', $this->default_text );
		if ( $text === $current_text ) {
			return;
		}

		update_option( 'rahgozar_text', $text );
	}
}