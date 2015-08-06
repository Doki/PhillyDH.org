<?php get_header(); ?>
<div class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>