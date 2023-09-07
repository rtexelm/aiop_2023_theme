<?php 

	// custom navigation
	// https://www.wpbeginner.com/wp-themes/how-to-add-custom-navigation-menus-in-wordpress-3-0-themes/
	function wpb_custom_new_menu() {
		register_nav_menus(
			array(
				'top-navigation' => __( 'Top Navigation' ),
				'full-navigation' => __( 'Full Navigation' ),
				'sub-navigation' => __( 'Sub Navigation' ),
			)
		);
	}
	add_action( 'init', 'wpb_custom_new_menu' );

		
	// Add Artists posts type
	function register_artists(){
	    $args = array(
	        'label' => __('Artists'),
	       	'singular_label' => __('Artist'),
	       	'public' => true,
	       	'show_ui' => true,
	       	'capability_type' => 'post',
	       	'taxonomies' => array('category'), 
	       	'hierarchical' => true,
			'rewrite' => array("slug" => "artists",'with_front' => true), // Permalinks format
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
			'add_new' => __( 'Add New Artist' ),
			'add_new_item' => __( 'Add New Artist' ),
			'edit' => __( 'Edit Artist' ),
			'edit_item' => __( 'Edit Artist' ),
			'new_item' => __( 'New Artist' ),
			'view' => __( 'View Artist' ),
			'view_item' => __( 'View Artist' ),
			'search_items' => __( 'Search Artists' ),
			'not_found' => __( 'No artist found' ),
			'not_found_in_trash' => __( 'No artist found in Trash' ),
			'parent' => __( 'Parent Info' ),
			'menu_position' =>__( 20 ),
	       );

	   	register_post_type( 'artists' , $args );
	}
	// Load up custom post types
	add_action('init', 'register_artists');

	function register_press(){
	    $args = array(
	        'label' => __('Press'),
	       	'singular_label' => __('Press-Link'),
	       	'public' => true,
	       	'show_ui' => true,
	       	'capability_type' => 'post',
	       	'taxonomies' => array('category'), 
	       	'hierarchical' => true,
			'rewrite' => array("slug" => "press",'with_front' => true), // Permalinks format
			'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),
			'add_new' => __( 'Add New Press-Link' ),
			'add_new_item' => __( 'Add New Press-Link' ),
			'edit' => __( 'Edit Press-Link' ),
			'edit_item' => __( 'Edit Press-Link' ),
			'new_item' => __( 'New Press-Link' ),
			'view' => __( 'View Press-Link' ),
			'view_item' => __( 'View Press-Link' ),
			'search_items' => __( 'Search Press' ),
			'not_found' => __( 'No press-link found' ),
			'not_found_in_trash' => __( 'No press-link found in Trash' ),
			'parent' => __( 'Parent Info' ),
			'menu_position' =>__( 20 ),
	       );

	   	register_post_type( 'press' , $args );
	}
	// Load up custom post types
	add_action('init', 'register_press');

	// Sort artists posts by title
	function sort_posts_alpha( $query ) {
		if ( $query->is_tax('artists') && $query->is_main_query() ) {
			$query->set( 'orderby', 'title' );
			$query->set( 'order', 'ASC' );
		}
	}
	add_action( 'pre_get_posts', 'sort_posts_alpha' );


	// Add sortable name field from artist's either group or last name
	add_filter('save_post', 'create_sortable_name', 10, 2);
	function create_sortable_name($post_id, $post) {

		if ( $post->post_type == 'artists') {
			$sortable_name = $post->last_name ?: $post->group_name;
		}
		update_post_meta($post_id, 'sortable_name', $sortable_name);
	}


	// add css & javascript
	function add_theme_scripts() {
		wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css' );
		wp_enqueue_script('jquery');
		wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery'));
		if( is_front_page() ){
			// wp_enqueue_script('p5-js', 'https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.3.1/p5.min.js');
			// wp_enqueue_script('p5-js', get_template_directory_uri().'/js/p5.min.js');
			// wp_enqueue_script('canvas-js', get_template_directory_uri().'/js/canvas.js');
	    }
	}	
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

	// add css to page templates
	function add_page_template_scripts() {
	    if ( is_page_template( 'page-artists.php' ) ) {
	        wp_enqueue_style( 'style-artists-page', get_stylesheet_directory_uri() . '/style.css' );
	    }
	    if ( is_page_template( 'page-about.php' ) ) {
	        wp_enqueue_style( 'style-about-page', get_stylesheet_directory_uri() . '/style.css' );
	    }
	    if ( is_page_template( 'page-partners.php' ) ) {
	        wp_enqueue_style( 'style-partners-page', get_stylesheet_directory_uri() . '/style.css' );
	    }
	     if ( is_page_template( 'page-donate.php' ) ) {
	        wp_enqueue_style( 'style-donate-page', get_stylesheet_directory_uri() . '/style.css' );
	    }
	}
	add_action( 'wp_enqueue_scripts', 'add_page_template_scripts' );

?>