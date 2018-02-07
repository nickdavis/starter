<?php
/**
 * Plugin Name: Remove Dashboard Widgets
 * Plugin URI:  https://github.com/nickdavis/starter
 * Description: Reduces admin clutter by removing some WordPress dashboard widgets.
 * Author:      Nick Davis
 * Author URI:  https://iamnickdavis.com
 * Version:     1.0.0
 * Text Domain: remove-dashboard-widgets
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

add_action( 'admin_init', __NAMESPACE__ . '\remove_dashboard_meta' );
/**
 * Removes default Dashboard widgets.
 *
 * @link https://codex.wordpress.org/Dashboard_Widgets_API#Advanced:_Removing_Dashboard_Widgets
 *
 * @since 1.0.0
 */
function remove_dashboard_meta() {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	//remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	//remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'normal' );
	//remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}

