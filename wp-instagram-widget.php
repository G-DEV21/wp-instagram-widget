<?php
/*
Plugin Name: WP Instagram Widget
Plugin URI: https://github.com/scottsweb/wp-instagram-widget
Description: A WordPress widget for showing your latest Instagram photos.
Version: 2.0.2
Author: Scott Evans
Author URI: https://scott.ee
Text Domain: wp-instagram-widget
Domain Path: /assets/languages/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright © 2013 Scott Evans

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

function wpiw_init() {

	// define some constants.
	define( 'WP_INSTAGRAM_WIDGET_JS_URL', plugins_url( '/assets/js', __FILE__ ) );
	define( 'WP_INSTAGRAM_WIDGET_CSS_URL', plugins_url( '/assets/css', __FILE__ ) );
	define( 'WP_INSTAGRAM_WIDGET_IMAGES_URL', plugins_url( '/assets/images', __FILE__ ) );
	define( 'WP_INSTAGRAM_WIDGET_PATH', dirname( __FILE__ ) );
	define( 'WP_INSTAGRAM_WIDGET_BASE', plugin_basename( __FILE__ ) );
	define( 'WP_INSTAGRAM_WIDGET_FILE', __FILE__ );

	// load language files.
	load_plugin_textdomain( 'wp-instagram-widget', false, dirname( WP_INSTAGRAM_WIDGET_BASE ) . '/assets/languages/' );
}
add_action( 'init', 'wpiw_init' );

function wpiw_widget() {
	require_once __DIR__ . '/null-instagram-widget.php';
	register_widget( 'null_instagram_widget' );
}

add_action( 'widgets_init', 'wpiw_widget' );
