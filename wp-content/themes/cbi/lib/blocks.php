<?php

add_action('acf/init', function() {

	acf_register_block_type(array(
		'name' => 'about-person',
		'title' => 'Person',
		'description' => 'A member of Our Collective or Our Board.',
		'category' => 'common',
		'icon' => 'admin-users',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_about_sections'
	));

	acf_register_block_type(array(
		'name' => 'about-text',
		'title' => 'Text',
		'description' => 'A text section.',
		'category' => 'common',
		'icon' => 'format-aside',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_about_sections'
	));
});

add_filter('allowed_block_types', function($block_types, $post) {
	$allowed = array(
		'core/heading',
		'core/paragraph'
	);
	if ($post->post_name == 'about') {
		$allowed[] = 'acf/about-person';
		$allowed[] = 'acf/about-text';
	}
	return $allowed;
}, 10, 2);

function block_about_sections($block) {
	global $sections;
	$section = $block['data']['section'];
	$sections[$section][] = $block;
}
