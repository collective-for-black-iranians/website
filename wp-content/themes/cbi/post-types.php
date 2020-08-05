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
