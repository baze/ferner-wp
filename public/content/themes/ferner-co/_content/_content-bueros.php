<div class="_content-bueros entry-content">
		
	<section>
		<h2><?php _e("Unsere Standorte"); ?></h2>
		<div class="row">
		<?php query_posts( 'post_type=buero&cat=7&showposts=-1&orderby=desc' );?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article class="one-third column">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
				<?php the_title( '<h3>', '</h3>', true ); ?>
			</a>
		</article>
		
		<?php endwhile; ?>

		<?php else : ?>
		<?php get_template_part('_content/_content-noposts');?>
		<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php wp_reset_query(); ?>
	</div>
	</section>
	
	<section>
		<h2><?php _e("Unsere Zweigstellen"); ?></h2>
		<div class="row">
		<?php query_posts( 'post_type=buero&cat=8&showposts=-1&orderby=desc' );?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article class="eight columns">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
				<?php the_title( '<h3>', '</h3>', true ); ?>
			</a>
		</article>
		
		<?php endwhile; ?>

		<?php else : ?>
		<?php get_template_part('_content/_content-noposts');?>
		<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php wp_reset_query(); ?>
	</div>
	</section>
	
</div>