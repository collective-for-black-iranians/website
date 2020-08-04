<?php

get_header();

?>
<div class="container scrolly">
	<section class="narrow">
		<h2>The Iranian diaspora has many voices.</h2>
	</section>
	<section class="narrow">
		<h2>Come listen and amplify its Black and Afro-Iranian voices.</h2>
	</section>
	<section class="head-room wide">
		<img src="<?php asset_url('img/sofreh.png'); ?>" alt="Sofreh">
	</section>
	<section class="narrow head-room leg-room">
		<img src="<?php asset_url('img/logo.png'); ?>" alt="Collective For Black Iraninans" class="logo">
	</section>
</div>
<section class="our-work">
	<div class="container">
		<h2>Our Work</h2>
		<?php get_template_part('our-work-links'); ?>
	</div>
</section>
<?php

get_footer();
