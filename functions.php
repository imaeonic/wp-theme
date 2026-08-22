<?php
/**
 * Theme bootstrap.
 *
 * @package Rismor
 */

defined( 'ABSPATH' ) || exit;

/**
 * Theme setup.
 */
function rismor_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'custom-logo' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	// WooCommerce is optional. Declaring theme support keeps the theme ready for
	// stores without making WooCommerce a dependency of the theme.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'rismor_setup' );

/**
 * Front-end presentation assets.
 */
function rismor_enqueue_assets() {
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );

	wp_enqueue_style(
		'rismor-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		$version
	);

	wp_enqueue_script(
		'rismor-theme',
		get_theme_file_uri( 'assets/js/theme.js' ),
		array(),
		$version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'rismor_enqueue_assets' );

/**
 * Pattern categories exposed in the inserter.
 */
function rismor_register_pattern_categories() {
	$categories = array(
		'rismor-hero'       => __( 'Rismor: Heroes', 'rismor' ),
		'rismor-content'    => __( 'Rismor: Content', 'rismor' ),
		'rismor-proof'      => __( 'Rismor: Proof & Trust', 'rismor' ),
		'rismor-projects'   => __( 'Rismor: Projects', 'rismor' ),
		'rismor-conversion' => __( 'Rismor: Conversion', 'rismor' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'rismor_register_pattern_categories' );

/**
 * Small set of native block style choices. These remain editable in the editor
 * and avoid introducing a proprietary component system.
 */
function rismor_register_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'rismor-surface',
			'label' => __( 'Rismor Surface', 'rismor' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'rismor-dark',
			'label' => __( 'Rismor Dark', 'rismor' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'rismor-arrow',
			'label' => __( 'Arrow', 'rismor' ),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'rismor-project',
			'label' => __( 'Project Feature', 'rismor' ),
		)
	);
}
add_action( 'init', 'rismor_register_block_styles' );
