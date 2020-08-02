<?php

add_action('after_setup_theme', function() {
	add_theme_support('title-tag');
});

function asset_url($file) {
	echo get_asset_url($file);
}

function get_asset_url($file) {
	$url  = get_stylesheet_directory_uri() . "/$file";
	$path = get_stylesheet_directory() . "/$file";
	$ver  = filemtime($path);
	return "$url?$ver";
}
