<div class="_content-publikationen entry-content">

<section class="content">
	<?php the_content(); ?>
</section>

<section class="posts">
	<?php query_posts( 'post_type=publikationen&showposts=-1&orderby=asc' );?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article class="post">
		
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="post-content">
			<div><?php the_field('autor'); ?></div>
			<?php the_title( '<h3 class="post-title">', '</h3>', true ); ?>
			<div class="post-excerpt">
				<?php
 				if( have_rows('beschreibung') ):
 					echo "<ul>";
  			   	while ( have_rows('beschreibung') ) : the_row();
 					echo "<li>";
 		        		the_sub_field('beschreibungs-inhalt');
 					echo "</li>";
    			endwhile;
 					echo "</ul>";
				else :
 
				endif;
 				?>
 				<div><?php the_content(); ?></div>
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