<div class="_content-anwaelte entry-content">
				
		<?php query_posts( 'post_type=anwaelte&showposts=-1&orderby=asc' );?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
				<?php the_title(); ?>
			</a>
			<div><?php get_template_part('_snippets/_snippet-schwerpunkt-liste');?></div>
		</article>
		
		<?php endwhile; ?>

		<?php else : ?>
		<?php get_template_part('_content/_content-noposts');?>
		<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php wp_reset_query(); ?>
	
	
</div>