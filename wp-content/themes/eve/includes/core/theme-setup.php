<?php

// Setup theme
add_action( 'after_setup_theme', 'eve_after_setup_theme' );
function eve_after_setup_theme() {
	// Load textdomain
	load_theme_textdomain( 'eve', get_theme_file_path( 'languages' ) );
}
