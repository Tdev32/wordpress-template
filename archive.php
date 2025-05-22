<?php get_header(); ?>

<main>
	<div class="container">
		<!-- Category title -->
		<?php if ( is_category() ): ?>
			<div id="page-header-bg">
				<div class="container">
					<section id="news" class="my-4">
						<h1 class="page-header mb-0 mt-0"> <?php single_cat_title(); ?></h1>
					</section>
				</div>
			</div>
		<?php endif; ?>
		

		<!-- Get news posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			$excerpt = get_the_excerpt();
		?>

		<article id="news__article">
			<!-- Image -->
			<?php  if ( has_post_thumbnail() ) : ?>
				<div class="news__featured-photo">
					<img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" alt="">
				</div>
			<?php endif; ?>

			<!-- News body -->
			<div class="news__content">
				<div class="grid-center">
					<a class="news_link-area" href="<?php the_permalink(); ?>">
						<div class="news__date"><?php echo get_the_date(); ?></div>
						<h3 class="news__heading"><?php the_title(); ?></h3>
						<p class="news__summary">
							<?php echo limit_excerpt_words($excerpt, 30); ?>...
						</p>
						<div class="news__link">
							<span>Read More</span>
						</div>
					</a>
				</div>
			</div>
		</article>

		<?php endwhile; endif; wp_reset_query(); ?>


		<!-- Breadcrumbs | pagination -->
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="space-between">
				<div class="previous-posts">
					<?php next_posts_link( __( '&larr; Older posts' ) ); ?>
				</div>

				<div class="next-posts">
					<?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</main>
	
<?php get_footer(); ?>