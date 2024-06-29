<?php get_header(); ?>
<div class="c-container">
	<div class="p-hero">
		<h1 class="p-heroTitle">WordPress Starter template with Vite and Local</h1>
		<p class="p-heroText">Starter template for building WordPress websites with Vite and Local</p>
		<div class="p-heroButton">
			<a class="c-button c-buttonLink" href="<?php echo get_home_template('/about') ?>">About</a>
		</div>
	</div>

	<section class="p-feature">
		<h2 class="c-headingSection">Feature</h2>

		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample.jpg" alt="">

		<div class="p-featureList">
			<div>Vite</div>
			<div>Hot Reload</div>
			<div>Image minify</div>
			<div>Sass</div>
			<div>Auto prefixer</div>
			<div>Code format by Prettier</div>
			<div>Property auto sort by recess order</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>