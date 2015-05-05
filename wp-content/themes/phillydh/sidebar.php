<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div class="sidebar hide-for-small">
	<a href="https://groups.google.com/forum/#!forum/phillydigitalhumanities" class="button large">Join the Discussion</a>
	<h3>Recent Posts</h3>
	<ul>
		<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 5 ) ); ?>
	</ul>
	
	<h3>Categories</h3>
	<ul>
		<?php wp_list_categories( array( 'title_li' => '', 'show_count' => true )); ?>
	</ul>
</div><!-- #secondary .widget-area -->