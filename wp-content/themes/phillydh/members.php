<?php
/**
 * Template Name: Members
 *
 */
?>
<?php get_header(); ?>
		
<div class="content">
	<div class="row">
		<div class="large-8 large-centered columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2><?php the_content(); ?></h2>
			<?php endwhile; endif; ?>
		</div>
		<ul class="small-block-grid-2 large-block-grid-4">
		<?php
    		$blogusers = get_users('blog_id=1&orderby=nicename');
    		foreach ($blogusers as $user) {
        		echo '<li class="user">';
        		echo '<div class="user-thumb">' . get_avatar( $user->user_email, $size = '175' ) . '</div>';
        		echo '<h4>' . $user->display_name . '</h4>';
        		if (!empty($user->user_url)) {
        			echo '<h6><a href="' . $user->user_url . '">View my Website</a></h6>';
        		}
        		echo '</li>';
    		}
		?>
		</ul>
	</div>
</div>
		
<?php get_footer(); ?>