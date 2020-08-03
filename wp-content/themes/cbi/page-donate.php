<?php

get_header();

?>
<section>
	<div class="container">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<?php

get_footer();
