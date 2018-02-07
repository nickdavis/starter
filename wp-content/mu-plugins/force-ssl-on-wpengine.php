<?php
/**
 * Plugin Name: Force SSL on WP Engine
 * Plugin URI:  https://github.com/nickdavis/starter
 * Description: Forces SSL on WPEngine installs.
 * Author:      Nick Davis
 * Author URI:  https://iamnickdavis.com
 * Version:     1.0.0
 * Text Domain: force-ssl-on-wpengine
 * Domain Path: languages
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @package    NickDavis
 * @author     Nick Davis
 * @since      1.0.0
 * @license    GPL-2.0+
 */

namespace NickDavis;

add_action( 'template_redirect', __NAMESPACE__ . '\force_ssl_on_wpengine' );
/**
 * Forces SSL on WPEngine installs.
 *
 * @see https://www.billerickson.net/force-ssl-on-wpengine
 *
 * @since 1.0.0
 */
function force_ssl_on_wpengine() {
	if( strpos( home_url(), 'wpengine' ) && ! is_ssl() ) {
		wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301 );
		exit();
	}
}
