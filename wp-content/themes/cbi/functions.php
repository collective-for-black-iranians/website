<?php

add_action('after_setup_theme', function() {
	add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function() {
	list($src, $version) = get_asset_url('js/cbi.js', true);
	wp_enqueue_script('cbi', $src, array(
		'jquery'
	), $version);
});

function asset_url($file) {
	echo get_asset_url($file);
}

function get_asset_url($file, $version = false) {
	$url  = get_stylesheet_directory_uri() . "/$file";
	$path = get_stylesheet_directory() . "/$file";
	$ver  = filemtime($path);
	if ($version) {
		return array($url, $ver);
	} else {
		return "$url?$ver";
	}
}
