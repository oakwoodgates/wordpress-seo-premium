<?php
/**
 * @package Yoast\WP\HelpScout
 */

if ( ! function_exists( 'yoast_get_helpscout_beacon' ) ) {
	/**
	 * Retrieve the instance of the beacon
	 *
	 * @param string $page The current admin page.
	 *
	 * @return Yoast_HelpScout_Beacon
	 */
	function yoast_get_helpscout_beacon( $page ) {
		static $beacon;

		if ( ! isset( $beacon ) ) {
			$beacon = new Yoast_HelpScout_Beacon( $page, array() );
		}

		return $beacon;
	}
}
