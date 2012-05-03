<?php
/**
 * Plugin Name: PBD Live.js for WordPress
 * Plugin URI: http://www.problogdesign.com/
 * Description: Adds automatic CSS and JS refreshing through <a href="http://livejs.com/">Live.js</a> by Martin Kool to a theme when you are logged in and running locally.
 * Version: 0.1
 * Author: Pro Blog Design
 * Author URI: http://www.problogdesign.com/
 * License: GPLv2/MIT
 *
 *
 * Live.js was written by Martin Kool and is licensed under the MIT license.
 * - http://livejs.com/
 * - http://twitter.com/mrtnkl
 */
function pbd_livejs_script() {
	if(is_user_logged_in() && ($_SERVER["SERVER_NAME"] == 'localhost' || $_SERVER["SERVER_NAME"] == '127.0.0.1')) {
		echo '<script type="text/javascript" src="'. plugins_url('js/live.js#css,js', __FILE__) .'"></script>';
	}
}
add_action('wp_enqueue_scripts', 'pbd_livejs_script');

?>