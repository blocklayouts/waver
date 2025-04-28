<?php
/**
 * Block Styles
 *
 * @package waver
 * @author Yahya Qara
 * @since 1.2.5
 */

namespace waver;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Registers custom block styles.
if ( ! function_exists( 'waver_block_styles' ) ) :
	/**
	 * Register custom block styles.
	 *
	 * @return void
	 */
	function waver_block_styles() {

		// Register block styles for core/code and core/preformatted.
		register_block_style(
			'core/code',
			array(
				'name'         => 'dark',
				'label'        => __( 'Dark', 'waver' ),
				'inline_style' => '
					.is-style-dark {
						background-color: var(--wp--preset--color--secondary-800) !important;
						color: var(--wp--preset--color--secondary-200);
					}
				',
			)
		);

		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'dark',
				'label'        => __( 'Dark', 'waver' ),
				'inline_style' => '
					.is-style-dark {
						background-color: var(--wp--preset--color--secondary-800) !important;
						color: var(--wp--preset--color--secondary-200);
					}
				',
			)
		);

		// Register block styles for core/button.
		register_block_style(
			'core/button',
			array(
				'name'         => 'secondary-button',
				'label'        => __( 'Secondary', 'waver' ),
				'inline_style' => '
					.is-style-secondary-button .wp-element-button {
						color: var(--wp--preset--color--primary-600) ;
						background-color: var(--wp--preset--color--primary-50);
					}
				',
			)
		);

		// Register block styles for core/separator.
		register_block_style(
			'core/separator',
			array(
				'name'         => 'separator-dotted',
				'label'        => __( 'Dotted', 'waver' ),
				'inline_style' => '
					hr.is-style-separator-dotted {
						border-top: dotted;
						border-left: none;
						border-right: none;
						border-bottom: none;
						background-color: unset;
					}
				',
			)
		);
	}
endif;
add_action( 'init', NS . 'waver_block_styles' );