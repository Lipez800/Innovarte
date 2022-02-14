<?php
/**
 * Plugin Name:         Grow Social by Mediavine
 * Plugin URI:          https://marketplace.mediavine.com/grow-social-pro/
 * Description:         Add beautiful social sharing buttons to your posts, pages and custom post types.
 * Version:             1.19.1

 * Requires at least:   5.2
 * Requires PHP:        5.6
 * Author:              Mediavine
 * Text Domain:         social-pug
 * Author URI:          https://marketplace.mediavine.com/
 * License:             GPL2
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'This plugin requires WordPress' );
}

// Autoload via Composer.
require_once __DIR__ . '/vendor/autoload.php';

// Environment setup.
define( 'MV_GROW_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'DPSP_PLUGIN_DIR', __DIR__ );
define( 'DPSP_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );

/**
 * Returns plugin activation path. Here for backwards compatibility.
 *
 * @return string
 */
function mv_grow_get_activation_path() {
	return __FILE__;
}

// Bootstrap.
if ( mv_grow_is_compatible() ) {
	Social_Pug::get_instance();
}

add_action( 'admin_notices', 'mv_grow_incompatible_notice' );
add_action( 'admin_head', 'mv_grow_throw_warnings' );
