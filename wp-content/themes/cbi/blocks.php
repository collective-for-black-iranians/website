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

	acf_register_block_type(array(
		'name' => 'voices-link',
		'title' => 'Voices Link',
		'description' => 'An image link.',
		'category' => 'common',
		'icon' => 'format-image',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_voices_link'
	));

	acf_register_block_type(array(
		'name' => 'education-video',
		'title' => 'Video',
		'description' => 'A video embed.',
		'category' => 'common',
		'icon' => 'format-video',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_education_video'
	));

	acf_register_block_type(array(
		'name' => 'education-book',
		'title' => 'Book',
		'description' => 'A book for the Further Study section.',
		'category' => 'common',
		'icon' => 'book-alt',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_education_book'
	));

	acf_register_block_type(array(
		'name' => 'advocacy-video',
		'title' => 'Advocacy Video',
		'description' => 'Can You See Us? content.',
		'category' => 'common',
		'icon' => 'format-video',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_advocacy_video'
	));

	acf_register_block_type(array(
		'name' => 'advocacy-fact',
		'title' => 'Key Fact',
		'description' => 'Key Facts image content.',
		'category' => 'common',
		'icon' => 'format-image',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_advocacy_fact'
	));

	acf_register_block_type(array(
		'name' => 'advocacy-message',
		'title' => 'Advocacy Message',
		'description' => 'Advocacy Messages content.',
		'category' => 'common',
		'icon' => 'format-aside',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_advocacy_message'
	));

	acf_register_block_type(array(
		'name' => 'advocacy-call',
		'title' => 'Our Call',
		'description' => 'Our Call for Black Joy content.',
		'category' => 'common',
		'icon' => 'media-default',
		'post_types' => array('page'),
		'mode' => 'edit',
		'render_callback' => 'block_advocacy_call'
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
	} else if ($post->post_name == 'voices') {
		$allowed[] = 'acf/voices-link';
	} else if ($post->post_name == 'education') {
		$allowed[] = 'acf/education-video';
		$allowed[] = 'acf/education-book';
	} else if ($post->post_name == 'advocacy') {
		$allowed[] = 'acf/advocacy-video';
		$allowed[] = 'acf/advocacy-fact';
		$allowed[] = 'acf/advocacy-message';
		$allowed[] = 'acf/advocacy-call';
	}
	return $allowed;
}, 10, 2);

function block_about_sections($block) {
	global $sections;
	$section = $block['data']['section'];
	$sections[$section][] = $block;
}

function block_voices_link($block) {
	global $voices_links;
	$voices_links[] = $block;
}

function block_education_video($block) {
	global $blocks;
	$blocks['videos'][] = $block;
}

function block_education_book($block) {
	global $blocks;
	$blocks['books'][] = $block;
}

function block_advocacy_video($block) {
	global $blocks;
	$blocks['video'] = $block;
}

function block_advocacy_fact($block) {
	global $blocks;
	$blocks['facts'][] = $block;
}

function block_advocacy_message($block) {
	global $blocks;
	$blocks['messages'][] = $block;
}

function block_advocacy_call($block) {
	global $blocks;
	$blocks['call'] = $block;
}
