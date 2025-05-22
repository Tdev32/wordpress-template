<?php get_header(); ?>

<main>
	<div class="header__carousel">
		<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/do-something-great.jpg" alt="">
		<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/carousel-image.jpg" alt="">
		<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/carousel-image2.jpg" alt="">
	</div>
	
	<section>
		<div class="container">
			<h2 class="text-center">Section one</h2>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row text-center">
				<div class="col-12 col-lg-3">
					Column 1
				</div>
				<div class="col-12 col-lg-3">
					Column 2
				</div>
				<div class="col-12 col-lg-3">
					Column 3
				</div>
				<div class="col-12 col-lg-3">
					Column 4
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row text-center">
				<div class="col-12 col-lg-4">
					Column 1
				</div>
				<div class="col-12 col-lg-4">
					Column 2
				</div>
				<div class="col-12 col-lg-4">
					Column 3
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>