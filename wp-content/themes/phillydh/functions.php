<?php
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
	add_theme_support( 'post-thumbnails' );
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'intmech' ),
	));
	
	// Cleanup WP Menu html
	add_filter('nav_menu_css_class', 'css_attributes_filter', 100, 1);
	add_filter('nav_menu_item_id', 'css_attributes_filter', 100, 1);
	add_filter('page_css_class', 'css_attributes_filter', 100, 1);
	function css_attributes_filter($var) {
	     return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
	}
    
    function new_excerpt_more($more) {
	       global $post;
		return '… <a class="more" href="'. get_permalink($post->ID) . '">Read the full article</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	remove_filter('the_excerpt', 'wpautop');
	
	function remove_jquery() {
    	wp_deregister_script( 'jquery' );
    	wp_enqueue_script( 'jquery' );
	}    
	add_action('wp_enqueue_scripts', 'remove_jquery');
	
	add_action( 'init', 'my_new_default_post_type', 1 );
	function my_new_default_post_type() {
	    register_post_type( 'post', array(
	        'labels' => array(
	            'name_admin_bar' => _x( 'Post', 'add new on admin bar' ),
	        ),
	        'public'  => true,
	        '_builtin' => false, 
	        '_edit_link' => 'post.php?post=%d', 
	        'capability_type' => 'post',
	        'map_meta_cap' => true,
	        'hierarchical' => false,
	        'rewrite' => array( 'slug' => 'news', 'with_front' => true ),
	        'query_var' => false,
	        'show_ui' => false,
	        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
	    ) );
	}
 
?>