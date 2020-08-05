<?php

acf_form_head();
get_header();

?>
<div id="contact-content" class="resize-bg">
	<section class="contact-intro">
		<div class="container">
			<h2 class="page-title"><?php the_title(); ?></h2>
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	<section id="contact-form" class="contact-form">
		<div class="container">
			<?php

			if (! empty($_GET['submitted'])) {
				echo '<div class="contact-response">Thank you for your inquiry!</div>';
			}

			acf_form(array(
				'id' => 'form',
				'field_groups' => array('group_5f2a0df61382d'),
				'post_id' => 'new_post',
				'new_post' => array(
					'post_type' => 'contact_inquiry',
					'post_title' => 'Contact Inquiry',
					'post_status' => 'publish'
				),
				'submit_value' => 'Submit',
				'return' => '?submitted=1#contact-form'
			));

			?>
		</div>
	</section>
</div>
<?php

get_footer();
