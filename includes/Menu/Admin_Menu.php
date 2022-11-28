<?php

namespace rahgozar\inc\Menu;

class Admin_Menu {

	public function __construct() {
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
		?>
        <div class="wrap">
            <h2>متن ساز رهگذر</h2>

            <form action="" method="post">

                <tabel class="form-table">

                    <tbody>

                    <tr>
                        <th scope="row"></th>
                        <td>
                            <textarea name="ping_sites" id="ping_sites" class="large-text code" rows="5">
                                رهگذر نویسند‌ه‌ای خیالی است که متنی موقت برای طراحان گرافیک و وبسایت می‌نویسد. این متن یک متن ساختگی است، که در طرح های اولیه گرافیکی و پیاده سازی اولیه وب سایت ها استفاده می‌شود. رهگذر در مورد همه چیز اطلاعات دارد از صنعت چاپ سنتی و صنعتی گرفته تا تکنولوژی‌های روز دنیا که هرکدام کاربردهای مختلفی دارند که هدف اصلی هریک بهبود شرایط زندگی شماست. رهگذر کتابهای زیادی درباره‌ی نرم افزارهای مختلف خوانده است و می‌تواند راهنمای خوبی برای طراحان فارسی زبان باشد. طراحان می‌توانند امید داشته باشند که با پیشرفت دنیای تکنولوژی شرایط و مشکلات سخت در حوزه‌ی کاریشان به پایان برسد.
                            </textarea>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row"><label for="mailserver_url">تعداد کلمات</label></th>
                        <td>
                            <input name="mailserver_port" type="text" id="mailserver_port" value="110" class="small-text" disabled>
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
}