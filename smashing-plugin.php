<?php
/*
	Plugin Name: Test Plugin
	Description: Test git wp plugin
	Version: 0.0.1
	Author: Трубин Евгений
*/
if( ! class_exists( 'Smashing_Updater' ) ){
    include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'prospectroRRM' );
$updater->set_repository( 'wp-corrector' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();