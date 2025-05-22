<?php get_header(); ?>

	<main class="fixed-header-solution">
		<?php
			if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?>

		<section id="gallery">
			<div class="container">
				<div class="gallery__grid">

				<?php 
					$images = get_field('gallery_images');
					if( $images ): ?>
					
					<?php foreach( $images as $image ): ?>
						<div class="gallery__item">
							<a data-group="gallery" class="html5lightbox" href="<?php echo esc_url($image['url']); ?>">
								<img class="img-fluid" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</a>
							<!-- <p><?php echo esc_html($image['caption']); ?></p> -->
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				</div>
			</div>
		</section>

		<?php endwhile; endif; ?>
	</main>

<?php get_footer(); ?>