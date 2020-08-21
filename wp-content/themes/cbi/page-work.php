<?php

get_header();

global $sections;
$sections = array();

?>
<section class="desktop-resize-bg resize-bg">
	<div class="container">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
		<?php get_template_part('our-work-links'); ?>
	</div>
	<div class="mobile-resize-bg resize-bg"></div>
</section>
<?php

get_footer();
