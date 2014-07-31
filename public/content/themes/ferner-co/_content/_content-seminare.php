<div class="_content-seminare entry-content">

<section class="content">
	<?php the_content(); ?>
</section>

<section class="posts">
	<?php query_posts( 'cat=18&showposts=-1&order=asc' );?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article class="post">
		
		<div class="post-symbol"><span></span></div>
		
		<div class="post-content">

			<?php the_title( '<h3 class="post-title">', '</h3>', true ); ?>
			<div class="post-meta">
				<span>Ort: <?php the_field('ort'); ?></span>
				<span>Beginn: <?php the_field('datum'); ?>, <?php the_field('uhrzeit'); ?> Uhr</span>
			</div>
			<div class="post-excerpt"><?php the_field('kurzbeschreibung'); ?></div>
			<div class="post-author">
				<?php $posts = get_field('anwalt'); if( $posts ): ?>
	    			<?php foreach( $posts as $post): ?>
	        		<?php setup_postdata($post); ?>
	    				<div>Ihr Ansprechpartner: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
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