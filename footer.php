	<footer>
		<div class="container">
			<h1 class="text-center">This is the footer.</h1>
		</div>

		<div class="container">
			<div class="text-center">
				<span><?php echo Date('Y'); ?> Equine Farm Name</span>
				<br />
				<span>Created by PM Advertising and Powered by Horse Hosting</span>

				<?php
				if ( is_user_logged_in() ) { ?>
					<a href="<?php echo get_site_url(); ?>/wp-admin/">Admin Panel</a>
				<?php } else { ?>
					<a href="<?php echo get_site_url(); ?>/wp-login.php">Login</a>
				<?php }; ?>
			</div>
		</div>
		
	</footer>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

	<!-- HTML5lightbox -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5lightbox/html5lightbox.js"></script>

	<!-- Slick slider js -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick/slick.min.js"></script>

	<!-- Js file -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>