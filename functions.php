<?php
/**
 * waver functions and definitions
 *
 * @package waver
 * @author  Yahya Qara
 * @link https://blocklayouts.com/product/waver/
 * @since 1.1.0
 */

namespace waver;
const NS = __NAMESPACE__ . '\\';
const DS = DIRECTORY_SEPARATOR;
const DIR  = __DIR__ . DS;


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'waver_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * @since 1.1.0
	 * @return void
	 */
	function waver_setup() {
		add_editor_style( 'style.css' );
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\waver_setup' );


/**
 * Enqueue styles.
 */
function waver_enqueue_style_sheet() {

	$version = wp_get_theme( 'waver' )->get( 'Version' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), $version );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\waver_enqueue_style_sheet' );

/**
 * Add editor styles
 */
function waver_editor_enqueue_style_sheet() {
    wp_enqueue_style( 'editor-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\waver_editor_enqueue_style_sheet' );


if ( ! function_exists( 'waver_pattern_categories' ) ) :

/**
 * Register pattern categories
*
* @since 1.1.0
* @return void
*/
function waver_pattern_categories() {

    // Register block pattern categories
    $pattern_categories = array(
        array(
            'slug'        => 'waver/page',
            'label'       => __( 'Pages', 'waver' ),
            'description' => __( 'A collection of full page layouts.', 'waver' ),
        ),
        array(
            'slug'        => 'waver/featured',
            'label'       => __( 'Featured', 'waver' ),
            'description' => __( 'A collection of featured patterns.', 'waver' ),
        ),
        array(
            'slug'        => 'waver/pricing',
            'label'       => __( 'Pricing', 'waver' ),
            'description' => __( 'A collection of pricing patterns.', 'waver' ),
        ),
        array(
            'slug'        => 'waver/cta',
            'label'       => __( 'CTA', 'waver' ),
            'description' => __( 'A collection of CTA patterns.', 'waver' ),
        ),
        array(
            'slug'        => 'waver/stats',
            'label'       => __( 'Stats', 'waver' ),
            'description' => __( 'A collection of stats patterns.', 'waver' ),
        ),
        array(
            'slug'        => 'waver/faq',
            'label'       => __( 'FAQ', 'waver' ),
            'description' => __( 'A collection of frequently asked questions patterns.', 'waver' ),
        ),
        array(
            'slug'        => 'waver/heroes',
            'label'       => __( 'Heroes', 'waver' ),
            'description' => __( 'A collection of heroes patterns.', 'waver' ),
        ),
    );

    // Register each pattern category
    foreach ( $pattern_categories as $category ) {
        register_block_pattern_category( $category['slug'], $category );
    }
}

endif;

add_action( 'init', NS . 'waver_pattern_categories' );



require_once DIR . 'inc/block-styles.php';
require_once DIR . 'inc/welcome-notice.php';


