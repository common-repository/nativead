<?php

/**
* NativeAD
*
* @uses     
*
* @category Category
* @package  Package
* @author   Pedro Ventura <pedro@native.ad>
* @license  
* @link     
*/
class NativeAD {

	public static $autoTag = '';
	public static $adNetwork ='';

	public static function init() {
		self::$autoTag = get_option( 'wp_nativead_auto_tag' );
		self::$adNetwork = get_option( 'wp_nativead_adnetwork' );
		self::init_native_hooks();
	}

	public static function init_native_hooks() {
		// when activate plugin triggers this hook
		register_activation_hook( __FILE__, array( 'NativeAD', 'register_data' ) );
		// hook to load tag in case is required
		add_action( 'wp_enqueue_scripts', array( 'NativeAD', 'load_tag' ), 0 );
	}

	public static function register_data() {
		if ( empty( self::$autoTag ) ) {
			//by default we want tag to be loaded
			update_option( 'wp_nativead_auto_tag', 'on' );
		}
	}

	public static function load_tag() {
		if (self::$autoTag == 'on') {
			if (!empty(self::$adNetwork)) {
				$url = 'https://www.spartan-ntv.com/tag/' . self::$adNetwork . '/nat.js';
			} else {
				$url = 'https://www.spartan-ntv.com/tag/lisvon/nat.js';
			}
			wp_enqueue_script( 'nativead-tag', $url );
		}
	}
}