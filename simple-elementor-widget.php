<?php
/**
* Plugin Name: Simple Elementor Widget
* Plugin URI: https://github.com/yuzaiakira/simple-elementor-widget
* Description: this plugin has very simple structure for elementor widget
* Version: 0.1
* Author: Akira Yuzai
* Author URI: https://github.com/yuzaiakira
**/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'elementor/widgets/register', function($widgets_manager){

	require_once( __DIR__ . '/widgets/widget-1.php' );

	$widgets_manager->register( new \Elementor_Widget_1() );

} );