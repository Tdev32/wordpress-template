<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo bloginfo('stylesheet'); ?>" />
  <?php wp_head(); ?>
  <title><?php echo bloginfo('name'); ?></title>
</head>
<body>
  
	<header>
		<nav class="navbar bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="/pm_boilerplate">Logo</a>
				<button class="custom-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="custom-navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php
						$defaults = array(
						'theme_location'  => '',
						'menu'            => 'Header Navigation',
						'container'       => false,
						'container_class' => false,
						'container_id'    => false,
						'menu_class'      => '',
						'menu_id'         => 'header-navigation',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="navbar-nav">%3$s</ul>',
						'depth'           => 0,
						'walker'          => new wp_bootstrap_navwalker()
						);
						wp_nav_menu($defaults);
					?>
				</div>
			</div>
		</nav>
	</header>