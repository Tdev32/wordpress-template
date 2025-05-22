<?php get_header(); ?>

<main>
	<section>
		<?php
			if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>

		<div class="container">
			<h1 class="page__title"><?php the_title(); ?></h1>
		</div>

		<?php endwhile; endif; ?>
	</section>

	<div class="container">

		<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'post_status' => 'publish',
				'order' => 'DESC'
			);

			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$excerpt = get_the_excerpt();
		?>

		<article id="article__news">

			<?php
				$thumbnail = get_the_post_thumbnail_url();
				if ( $thumbnail ) :
			?>
			<div class="news__featured-photo">
				<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
			</div>
			<?php endif; ?>

			<div class="news__content">
				<div class="grid-center">
					<div class="news__date"><?php echo get_the_date(); ?></div>
					<h3 class="news__heading"><?php the_title(); ?></h3>
					<p class="news__summary">
						<?php echo limit_excerpt_words($excerpt, 30); ?>...
					</p>
					<a class="news__link" href="<?php the_permalink(); ?>">
						Read More
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/chevron-right.png" alt="">
					</a>
				</div>
			</div>
		</article>

		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</main>
	
<?php get_footer(); ?>