<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Interactive Mechanics" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="description" content="" />
	
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
	   <?php
	      if (function_exists('is_tag') && is_tag()) {
	         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
	      elseif (is_front_page()) {
	         bloginfo('name'); echo ' - '; bloginfo('description'); }
	      elseif (is_archive()) {
	         wp_title(''); echo ' Archive - '; }
	      elseif (is_search()) {
	         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
	      elseif (!(is_404()) && (is_single()) || (is_page())) {
	         wp_title(''); echo ' - '; }
	      elseif (is_404()) {
	         echo 'Not Found - '; }
	      else {
	         bloginfo('name'); }
	      if (!is_front_page()) {
	      	 bloginfo('name'); }
	      if ($paged>1) {
	         echo ' - page '. $paged; }
	   ?>
	</title>
	
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" type="image/png" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/custom.modernizr.js"></script>
	<?php wp_head(); ?>
</head>

<body>
<div class="wrapper">
	<header>
		<div class="row">
			<div class="large-12 columns">
				<ul class="inline-list">
  					<li><a href="mailto:PhillyDigitalHumanities@gmail.com">Contact</a></li>
  					<li><a href="https://groups.google.com/forum/#!forum/phillydh-organizers">Help Organize</a></li>
					<li><a href="http://phillydh.org/wp-login.php">Login</a></li>
				</ul>
			</div>
			<div class="large-12 columns">
				<nav class="top-bar">
					<ul class="title-area">
					    <li class="name"><h1><a href="<?php echo get_option('home'); ?>/">PhillyDH</a></h1></li>
		    			<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
		  			</ul>
					<section class="top-bar-section">
		      			<?php wp_nav_menu( array( 
		      				'container'      	=> '',
		      				'container_class'	=> '',
		      				'menu_class'        => 'right',
		      				'theme_location' 	=> 'primary'
		      			)); ?>
			  		</section>
			  	</nav>
			</div>
		</div>		
	</header>