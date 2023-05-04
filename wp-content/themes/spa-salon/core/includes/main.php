<?php

add_action( 'admin_menu', 'spa_salon_getting_started' );
function spa_salon_getting_started() {
	add_theme_page( esc_html__('Get Started', 'spa-salon'), esc_html__('Get Started', 'spa-salon'), 'edit_theme_options', 'spa-salon-guide-page', 'spa_salon_test_guide');
}

function spa_salon_admin_enqueue_scripts() {
	wp_enqueue_style( 'spa-salon-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'spa_salon_admin_enqueue_scripts' );

if( ! defined( 'SPA_SALON_DOCS_FREE' ) ) {
define('SPA_SALON_DOCS_FREE',__('https://www.misbahwp.com/docs/spa-salon-free-docs/','spa-salon'));
}
if( ! defined( 'SPA_SALON_DOCS_PRO' ) ) {
define('SPA_SALON_DOCS_PRO',__('https://www.misbahwp.com/docs/spa-salon-pro-docs','spa-salon'));
}
if( ! defined( 'SPA_SALON_BUY_NOW' ) ) {
define('SPA_SALON_BUY_NOW',__('https://www.misbahwp.com/themes/spa-wordpress-theme/','spa-salon'));
}
if( ! defined( 'SPA_SALON_SUPPORT_FREE' ) ) {
define('SPA_SALON_SUPPORT_FREE',__('https://wordpress.org/support/theme/spa-salon','spa-salon'));
}
if( ! defined( 'SPA_SALON_REVIEW_FREE' ) ) {
define('SPA_SALON_REVIEW_FREE',__('https://wordpress.org/support/theme/spa-salon/reviews/#new-post','spa-salon'));
}
if( ! defined( 'SPA_SALON_DEMO_PRO' ) ) {
define('SPA_SALON_DEMO_PRO',__('https://www.misbahwp.com/demo/spa-salon/','spa-salon'));
}

function spa_salon_test_guide() { ?>
	<?php $spa_salon_comments_theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( SPA_SALON_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'spa-salon' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'spa-salon' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( SPA_SALON_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'spa-salon' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( SPA_SALON_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'spa-salon' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','spa-salon'); ?><?php echo esc_html( $spa_salon_comments_theme ); ?>  <span><?php esc_html_e('Version: ', 'spa-salon'); ?><?php echo esc_html($spa_salon_comments_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$spa_salon_comments_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $spa_salon_comments_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','spa-salon'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','spa-salon'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','spa-salon'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Secton Reordering','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','spa-salon'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'spa-salon' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','spa-salon'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( SPA_SALON_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'spa-salon' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( SPA_SALON_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'spa-salon' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( SPA_SALON_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'spa-salon' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
