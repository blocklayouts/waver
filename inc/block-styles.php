<?php
/**
 * Block Styles
 *
 * @package waver
 * @author Yahya Qara
 * @since 1.1.0
 */

namespace waver;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register block styles
 */
$dark_style = array(
    'background-color' => 'var(--wp--preset--color--secondary-800)',
    'color'            => 'var(--wp--preset--color--secondary-200)',
);

// Register block styles for core/code and core/preformatted.
register_block_style(
    'core/code',
    array(
        'name'         => 'dark-code',
        'label'        => __( 'Dark', 'waver' ),
        'inline_style' => generate_inline_style( $dark_style ),
    )
);

register_block_style(
    'core/preformatted',
    array(
        'name'         => 'dark-preformatted',
        'label'        => __( 'Dark', 'waver' ),
        'inline_style' => generate_inline_style( $dark_style ),
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

// Common styles for shadow blocks.
$shadow_styles = array(
    array(
        'name'  => 'waver-box-shadow',
        'label' => __( 'Shadow', 'waver' ),
    ),
    array(
        'name'  => 'waver-box-shadow-md',
        'label' => __( 'Shadow md', 'waver' ),
    ),
    array(
        'name'  => 'waver-box-shadow-lg',
        'label' => __( 'Shadow lg', 'waver' ),
    ),
);

// Register block styles for core/group, core/image, and core/row.
$blocks_to_style = array( 'core/group', 'core/image', 'core/row'. 'core/column' );
foreach ( $blocks_to_style as $block_name ) {
    foreach ( $shadow_styles as $style ) {
        register_block_style(
            $block_name,
            array(
                'name'  => $style['name'],
                'label' => $style['label'],
            )
        );
    }
}

/**
 * Generate inline style from an array of CSS properties.
 *
 * @param array $styles Array of CSS properties and values.
 * @return string Inline CSS style.
 */
function generate_inline_style( $styles ) {
    $inline_style = '';
    foreach ( $styles as $property => $value ) {
        $inline_style .= "$property: $value;";
    }
    return $inline_style;
}
