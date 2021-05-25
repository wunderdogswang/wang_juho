<?php
/**
 * Custom hooks
 *
 * @package Juho
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'juho_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function juho_site_info() {
		do_action( 'juho_site_info' );
	}
}

add_action( 'juho_site_info', 'juho_add_site_info' );
if ( ! function_exists( 'juho_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function juho_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'juho' ) ),
			sprintf(
				/* translators: WordPress */
				esc_html__( 'Proudly powered by %s', 'juho' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: 1: Theme name, 2: Theme author */
				esc_html__( 'Theme: %1$s by %2$s.', 'juho' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://juho.com', 'juho' ) ) . '">juho.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: Theme version */
				esc_html__( 'Version: %1$s', 'juho' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'juho_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
