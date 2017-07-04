<?php

/**
 * @package     Taxonomy Images
 * @subpackage  Public CSS
 *
 * Prints custom css to all public pages. If you do not
 * wish to have these styles included for you, please
 * insert the following code into your theme's functions.php
 * file:
 *
 * add_filter( 'taxonomy-images-disable-public-css', '__return_true' );
 */

namespace TaxonomyImages;

add_action( 'wp_enqueue_scripts', array( 'TaxonomyImages\Public_CSS', 'enqueue_styles' ) );

class Public_CSS {

	/**
	 * Enqueue Styles
	 *
	 * @internal  Private. Called via the `wp_enqueue_scripts` action.
	 */
	public static function enqueue_styles() {

		if ( apply_filters( 'taxonomy-images-disable-public-css', false ) ) {
			return;
		}

		wp_enqueue_style(
			'taxonomy-image-plugin-public',
			taxonomy_image_plugin_url( 'css/style.css' ),
			array(),
			Plugin::version(),
			'screen'
		);

	}

}
