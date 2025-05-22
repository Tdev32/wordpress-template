<?php
	// Getting stylesheet
	function website_files() {
		wp_enqueue_style( 'website_styles', get_stylesheet_uri() );
	}

	add_action('wp_enqueue_scripts', 'website_files');

	// Enable Bootstrap Navigation Menu
	require_once('bootstrap_navwalker.php');

	//ENABLE MENUS AND RSS FEEDS
	if ( function_exists( 'add_theme_support' ) ):
		add_theme_support( 'menus' );
		add_theme_support( 'automatic-feed-links' );
	endif;
  
	// Enable Sidebar
	if ( function_exists('register_sidebars') ):
		register_sidebar(array(
			'name'          => 'Main Sidebar',
			'id'            => 'main-sidebar-widgets',
			'description'   => '',
			'class'         => '',
			'before_widget' => '<li>',
			'after_widget'  => '</li>',
			'before_title'  => '<div class="sidebar-widget-title">',
			'after_title'   => '</div>'
		));
	endif;
  
	// Options page if needed
	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
		'page_title' 	=> 'Website Settings',
		'menu_title'	=> 'Website',
		'menu_slug' 	=> 'ds-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
		));
	
		// acf_add_options_sub_page(array(
		//   'page_title' 	=> 'Header Settings',
		//   'menu_title'	=> 'Header',
		//   'parent_slug'	=> 'ds-general-settings',
		// ));
	}

	// Function for setting excerpts by word count
	function limit_excerpt_words($string, $word_limit) {
		$words = explode(' ', $string, ($word_limit + 1));

		if ( count($words) > $word_limit) {
			array_pop($words);
			return implode(' ', $words);
		}
	};
?>