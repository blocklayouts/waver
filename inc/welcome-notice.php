<?php
/**
 * Welcome Notice
 *
 * @package waver
 * @author Yahya Qara
 * @since 1.1.0
 */

namespace waver;

function waver_welcome_notice() {
	$current_screen = get_current_screen();
    
    // Check if the current screen is the themes page
    if ( $current_screen->id === 'themes' ) {
		// Enqueue styles
		wp_enqueue_style( 'welcome-notice', get_template_directory_uri() . '/assets/css/welcome-notice.css', array(), wp_get_theme()->get( 'Version' ) );

		// Enqueue jQuery
		wp_enqueue_script('jquery');

		// Register and enqueue welcome-notice.js
		wp_register_script( 'welcome-notice-js', get_template_directory_uri() . '/assets/js/welcome-notice.js', array( 'jquery' ), '1.1.0', true );
		$welcome_notice_params = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'welcome_notice_security' => wp_create_nonce( 'waver-welcome-notice-nonce' ),
		);
		wp_localize_script( 'welcome-notice-js', 'welcome_notice_params', $welcome_notice_params );
		wp_enqueue_script( 'welcome-notice-js' );

		$get_started_url = "https://blocklayouts.com/";
		// Check if the notice has been dismissed
		if (!get_option('waver_notice_dismissed', false)) {
			?>
				<div class="waver-notice-container notice notice-info is-dismissible">
					<div class="waver-notice-content">
						<div class="col-left">
							<p class="waver-notice-subtitle">
								<?php esc_html_e( 'Thanks for installing Waver ✨', 'waver' ); ?>
							</p>
							<h2 class="waver-notice-heading">
								<?php esc_html_e( 'Copy and paste pre-built WordPress blocks', 'waver' ); ?>
							</h2>
							<p class="waver-notice-description">
								<?php esc_html_e( 'Looking to build a stunning website with ease? Look no further! Introducing our collection of pre-built WordPress Gutenberg blocks!', 'waver' ); ?>
							</p>
							<a href="<?php echo esc_url( $get_started_url ); ?>" class="waver-notice-btn" target="_blank">
								<?php esc_html_e( 'Learn more', 'waver' ); ?>
							</a>
						</div>
						<div class="col-right">
							<img class="waver-notice-img" src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/waver-notice-welcome.png") ?>" alt="Blocks Image">
						</div>
					</div>
				</div>
			<?php
		}
    }
}
add_action('admin_notices', NS . 'waver_welcome_notice');


function waver_dismiss_notice() {
	// Check nonce for security
	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'waver-welcome-notice-nonce' ) ) {
        die( 'Permission check failed' );
    }

    // Update the option to indicate that the notice has been dismissed
    update_option('waver_notice_dismissed', true);
    die();
}

add_action('wp_ajax_waver_dismiss_notice', NS . 'waver_dismiss_notice');

function waver_activate() {
    // Check if it's the first activation
    if (get_option('waver_activated', false)) {
        add_action('admin_notices', 'waver_welcome_notice');
        // Update the option to indicate that the welcome notice has been shown
        update_option('waver_activated', true);
    }
}
add_action('after_switch_waver', NS . 'waver_activate');
