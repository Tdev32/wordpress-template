<?php get_header(); ?>

<main>
	<section>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="container text-center">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>

		<?php endwhile; endif; ?>
	</section>
</main>

<?php get_footer(); ?>