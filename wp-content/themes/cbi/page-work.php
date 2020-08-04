<?php

get_header();

global $sections;
$sections = array();

?>
<section class="resize-bg">
	<div class="container">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
		<?php get_template_part('our-work-links'); ?>
	</div>
</section>
<?php

get_footer();
