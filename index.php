<?php
/**
 * Plugin Name: NativeAD for WordPress
 * Plugin URI: http://native.ad
 * Description: Este plugin ofrece la funcionalidad para servir campañas de publicidad nativa en tu blog de WordPress.
 * Version: 1.4
 * Author: NativeAD
 * Author URI: http://native.ad
 * License: GPL2
 */

define( 'NATIVEAD__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( NATIVEAD__PLUGIN_DIR . 'class.nativead.php' );
require_once( NATIVEAD__PLUGIN_DIR . 'class.nativead-widget.php' );

add_action( 'init', array( 'NativeAD', 'init' ) );

if ( is_admin() ) {
	require_once( NATIVEAD__PLUGIN_DIR . 'class.nativead-admin.php' );
	add_action( 'init', array( 'NativeAD_Admin', 'admin_start' ) );
}