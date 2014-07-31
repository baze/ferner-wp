<div class="_content-verkehr entry-content">

<section class="content">
	<?php the_content(); ?>
</section>

<section class="posts">
	<?php query_posts( 'cat=5&showposts=-1&order=asc' );?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article class="post">
		
		<div class="post-symbol"><span></span></div>
		
		<div class="post-content">
			<a target="_blank" href="<?php the_field('pdf-download'); ?>">
				<?php the_title( '<h3 class="post-title">', '</h3>', true ); ?>
			</a>
			<div class="post-excerpt"><?php the_field('kurzbeschreibung'); ?></div>
			<div class="post-author">
				<?php $posts = get_field('anwalt'); if( $posts ): ?>
	    			<?php foreach( $posts as $post): ?>
	        		<?php setup_postdata($post); ?>
	    				<div>Von Rechtsanwalt <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	    			<?php endforeach; ?>
	    			<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>

	</article>

	<?php endwhile; ?>

	<?php else : ?>

	<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php wp_reset_query(); ?>
</section>

</div>