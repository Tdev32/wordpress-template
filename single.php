<?php get_header(); ?>

<main class="fixed-header-solution">
    <?php
		if ( have_posts() ) :
		while ( have_posts() ) : the_post();
        $thumbnail = get_the_post_thumbnail_url();
	?>

        <!-- Main news post -->
    <div class="container">
        <section id="article__news">
            <div class="container">
                <h1 class="single__heading">
                    <?php the_title(); ?>
                </h1>
                <div class="single__date"><?php the_date("l | F d, Y"); ?></div>
                <div class="single__featured-photo">
                    <?php if ( $thumbnail ) { ?>
                        <img class="img-fluid w-100" src="<?php echo $thumbnail; ?>" alt="">
                    <?php } ?>
                </div>

                <?php
                    $youtubeVideoAttachment = get_field('youtube_video_attachment');
                    if ( $youtubeVideoAttachment ) {
                ?>
                
                <div class="videowrapper">
                    <iframe
                        width="560" 
                        height="315" 
                        src="<?php echo $youtubeVideoAttachment; ?>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
                    
                <?php } ?>

                <div class="single__summary">
                    <?php the_content(); ?>
                </div>

                <a class="view-all-news-link" href="/news">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/news-chevron-right.png" alt="">
                    View All News
                </a>
            </div>
        </section>
    </div>

    <?php endwhile; endif; ?>

    <!-- 3 featured news posts -->
    <section id="featured__news">
        <div class="container">
            <div class="row gy-3">

                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'order' => 'DESC'
                    );

                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    $excerpt = get_the_excerpt();
                    $thumbnail = get_the_post_thumbnail_url();
                ?>
                
                <div class="col-12 col-lg-4">
                    <article id="featured__article">
                        <div class="featured__featured-photo">
                            <?php if ( $thumbnail ) { ?>
                                <img class="img-fluid" src="<?php echo $thumbnail; ?>" alt="">
                            <?php } ?>
                        </div>
                        <div class="featured__content">
                            <div class="grid-center">
                                <div class="featured__date"><?php echo get_the_date(); ?></div>
                                <h3 class="featured__heading"><?php the_title(); ?></h3>
                                <p class="featured__summary">
                                    <?php echo limit_excerpt_words($excerpt, 20); ?>...
                                </p>
                                <a class="featured__link" href="<?php the_permalink(); ?>">
                                    Read More
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/chevron-right.png" alt="">
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </section>

    
</main>

<?php get_footer(); ?>