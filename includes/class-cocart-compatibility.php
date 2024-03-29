<?php
/**
 * CoCart - Compatibility
 *
 * @author  Sébastien Dumont
 * @package CoCart\Compatibility
 * @since   3.0.0
 * @license GPL-2.0+
 */

namespace CoCart\Compatibility;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Package {

	/**
	 * Package Version
	 *
	 * @access public
	 *
	 * @static
	 *
	 * @var string
	 */
	public static $version = '4.0.0';

	/**
	 * Initiate Package.
	 *
	 * @access public
	 *
	 * @static
	 */
	public static function init() {
		add_action( 'plugins_loaded', function() {
			self::include_modules();
		}, 99 );
	}

	/**
	 * Return the name of the package.
	 *
	 * @access public
	 *
	 * @static
	 *
	 * @return string
	 */
	public static function get_name() {
		return 'CoCart Compatibility';
	} // END get_name()

	/**
	 * Return the version of the package.
	 *
	 * @access public
	 *
	 * @static
	 *
	 * @return string
	 */
	public static function get_version() {
		return self::$version;
	} // END get_version()

	/**
	 * Return the path to the package.
	 *
	 * @access public
	 *
	 * @static
	 *
	 * @return string
	 */
	public static function get_path() {
		return dirname( __DIR__ );
	} // END get_path()

	/**
	 * Load support for extension compatibility.
	 *
	 * @access public
	 *
	 * @static
	 */
	public static function include_modules() {
		include_once dirname( __FILE__ ) . '/modules/class-cocart-advanced-shipping-packages.php'; // Advanced Shipping Packages.
		include_once dirname( __FILE__ ) . '/modules/class-cocart-free-gift-coupons.php'; // Free Gift Coupons.
	} // END include_modules()

} // END class.
