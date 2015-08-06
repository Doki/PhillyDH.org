<?php get_header(); ?>

<?php if ( is_home() ) { ?>
	<div class="title">
		<div class="title-circle">
			<a href="https://groups.google.com/forum/#!forum/phillydigitalhumanities"><div class="title-outline">
				<div class="we-are">We are</div>
				<div class="profession">developers</div>
				<hr/>
				<span class="underline">Join PhillyDH today!</span>
			</div></a>
		</div>
	</div>
<?php } ?>

<div class="content">
	<div class="row">
		<div class="large-9 columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="article">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
				<hr/>
			</div>
			<?php endwhile; endif; ?>
			<div class="navigation"><?php previous_posts_link(); ?>    <span class="nav-right"><?php next_posts_link(); ?></span></div>
		</div>
		<div class="large-3 columns">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>