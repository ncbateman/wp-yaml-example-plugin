<?php

/*
Plugin Name: Test Plugin
Version:     1.0
Description: Testing
Author:      Nicholas Bateman
*/

use WpYaml\WpYaml as WpYaml;

define( 'TEST_PATH', plugin_dir_path( __FILE__ ) );

include_once( TEST_PATH . 'route.php' );  // test route callback class
include_once( TEST_PATH . 'action.php' );  // test action callback class
include_once( TEST_PATH . 'filter.php' );  // test filter callback class

add_action('plugins_loaded', function () {

	$wp_yaml = WpYaml::init();

	$wp_yaml->register( TEST_PATH . 'config/');

});
