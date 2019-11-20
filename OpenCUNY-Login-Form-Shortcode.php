<?php
/**
 * Plugin Name: OpenCUNY Login Shortcode
 * Plugin URI: http://OpenCUNY.org
 * Description: Creates a shortcode for embedding an OpenCUNY login form in a page, post, or widget.
 * Version: 1.0
 * Author: Paul L. Hebert
 * Author URI: http://plhebert.com
 */

add_action( 'init', 'add_shortcodes' );

function add_shortcodes() {

	add_shortcode( 'login-form', 'login_form_shortcode' );
}
function login_form_shortcode() {

	if ( is_user_logged_in() )
		return '&lt;p>You are already logged in!&lt;/p>';

	return wp_login_form( array( 'echo' => false ) );
}