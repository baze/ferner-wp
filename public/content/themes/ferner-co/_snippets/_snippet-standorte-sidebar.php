<ul class="_snippet-standorte-sidebar">
	<?php query_posts( 'post_type=buero&showposts=-1&orderby=asc' );?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink(); ?>">
			<li>
				<strong><?php the_title(); ?></strong>
				<span>Telefon: <?php the_field('telefon'); ?></span>
			</li>
			</a>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part('_content/_content-noposts');?>
		<?php endif; ?>

	<?php rewind_posts(); ?>
	<?php wp_reset_query(); ?>
</ul>