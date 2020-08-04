<?php

get_header();

global $voices_links;

?>
<div id="voices-content">
	<section class="fixed">
		<div class="container">
			<h2 class="page-title"><?php the_title(); ?></h2>
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	<section class="scrolly resize-bg">
		<div class="container voices-links">
			<?php

			foreach ($voices_links as $block) {
				include __DIR__ . '/block-voices-link.php';
			}

			?>
		</div>
	</section>
</div>
<?php

get_footer();
