<?php
/**
 * Plugin Name: Tilde Widget
 * Description: This widget adds a shortcode, as well as a widget to insert the Tilde
 *        event widget on your WordPress site.
 * Version: 0.2
 * Author: Towoo
 * Author URI: https://heytilde.com
 * License: GPLv2
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Define plugin files path
define( 'TILDE_WIDGET_PATH', plugin_dir_path( __FILE__ ) );

// Customizer option for Tilde Widget
require_once( TILDE_WIDGET_PATH . 'options-page/tilde-widget-option-page.php');

// Create Tilde Widget
require_once( TILDE_WIDGET_PATH . 'widget/create-widget.php');

// Create Tilde Widget shortcode
require_once( TILDE_WIDGET_PATH . 'create-shortcode/create-shortcode.php');

add_action( 'init', 'tilde_shortcode_button' );
function tilde_shortcode_button() {
  add_filter( "mce_external_plugins", "tilde_shortcode_add_button" );
  add_filter( 'mce_buttons', 'tilde_shortcode_register_button' );
}

function tilde_shortcode_add_button( $plugin_array ) {
  $plugin_array['tildeshortcode'] = plugins_url() . '/tilde-widget/js/tilde-tinymce-plugin.js';
  return $plugin_array;
}

function tilde_shortcode_register_button( $buttons ) {
  array_push( $buttons, 'tildeshortcode' );
  return $buttons;
}
