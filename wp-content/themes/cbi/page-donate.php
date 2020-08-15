<?php

get_header();

?>
<div id="donate-content">
	<section class="fixed">
		<div class="container">
			<h2 class="page-title"><?php the_title(); ?></h2>
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	<section class="scrolly resize-bg"></section>
</div>
<?php

get_footer();
