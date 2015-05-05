<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<div class="content">
	<div class="row">
		<div class="large-9 columns">
			<div class="article">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
		<div class="large-3 columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
		
<?php endwhile; endif; ?>
<?php get_footer(); ?>