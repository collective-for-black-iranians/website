<?php

register_post_type('chapter_inquiry', array(
	'public' => false,
	'show_ui' => true,
	'labels' => array(
		'name' => 'Chapter Inquiries',
		'singular_name' => 'Chapter Inquiry'
	),
	'menu_icon' => 'dashicons-location'
));

register_post_type('contact_inquiry', array(
	'public' => false,
	'show_ui' => true,
	'labels' => array(
		'name' => 'Contact Inquiries',
		'singular_name' => 'Contact Inquiry'
	),
	'menu_icon' => 'dashicons-admin-comments'
));
