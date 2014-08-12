<div class="_content-leistungen entry-content">

	<?php query_posts( 'post_type=leistungen&showposts=-1&orderby=desc' );?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article>
			<a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>', true ); ?></a>
			<div><?php get_template_part('_snippets/_snippet-zugeordnete-anwalte');?></div>
		</article>

		<?php endwhile; ?>

		<?php else : ?>
		<?php get_template_part('_content/_content-noposts');?>
		<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php wp_reset_query(); ?>
</div>