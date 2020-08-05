<div class="block-chapters-form">
	<h3><?php echo $block['data']['title']; ?></h3>
	<div class="text-body">
		<?php echo $block['data']['description']; ?>
	</div>
	<?php

	if (! empty($_GET['submitted'])) {
		echo '<div class="chapters-response">Thank you for your inquiry!</div>';
	}

	acf_form(array(
		'id' => 'form',
		'field_groups' => array('group_5f29ed03b44fa'),
		'post_id' => 'new_post',
		'new_post' => array(
			'post_type' => 'chapter_inquiry',
			'post_title' => 'Chapter Inquiry',
			'post_status' => 'publish'
		),
		'submit_value' => 'Submit',
		'return' => '?submitted=1#form'
	));

	?>
</div>
