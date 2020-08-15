<?php

the_post();
global $post;

$body_class = '';
if (! empty($post) ) {
	$body_class = $post->post_name;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
		<link rel="stylesheet" href="<?php asset_url('dist/cbi.css'); ?>">
		<link rel="stylesheet" href="<?php asset_url('fontawesome/css/all.min.css'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class($body_class); ?>>
		<header>
			<nav>
				<a href="/"><img src="<?php asset_url('img/logotype.png'); ?>" alt="Collective For Black Iranians" class="identity"></a>
				<ul>
					<li class="separator"><a href="/about">About</a></li>
					<li class="separator"><a href="/work">Our Work</a></li>
					<li class="separator"><a href="/chapters">Chapters</a></li>
					<li><a href="/contact">Contact Us</a></li>
					<li class="donate"><a href="/donate" class="button">Donate</a></li>
					<li class="menu"><a href="#menu"><i class="fa fa-bars"></i></a></li>
				</ul>
			</nav>
			<div id="menu">
				<ul>
					<li><a href="/about">About</a></li>
					<li><a href="/work">Our Work</a></li>
					<li><a href="/chapters">Chapters</a></li>
					<li><a href="/contact">Contact Us</a></li>
					<li><a href="/donate">Donate</a></li>
				</ul>
			</div>
		</header>
		<div id="content">
