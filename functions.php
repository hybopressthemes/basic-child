<?php

add_action( 'after_setup_theme', 'child_theme_setup_before_parent', 0 );
add_action( 'after_setup_theme', 'child_theme_setup1', 11);
add_action( 'after_setup_theme', 'child_theme_setup2', 14);

function child_theme_setup_before_parent() {

	if ( ! defined( 'SCRIPT_DEBUG' ) ) {
		define( 'SCRIPT_DEBUG', false );
	}

}

function child_theme_setup1() {

}


function child_theme_setup2() {
	add_filter( 'hybopress_use_cache', 'child_theme_use_cache' );
}

function child_theme_use_cache( $use_cache ) {
	return true;
}



