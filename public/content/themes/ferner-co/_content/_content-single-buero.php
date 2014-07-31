<div class="_content-single-buero entry-content">

	<section class="buero-content row"><?php the_content(); ?></section>
	<section class="buero-links row">
		
		<div class="eight columns">
			<h3><?php _e("Stadtwebsite:"); ?></h3>
			<a href="<?php the_field('stadtwebsite'); ?> "><?php the_field('stadtwebsite'); ?></a>
		</div>
		
		<div class="eight columns">
			<h3><?php _e("Lokale Presse:"); ?></h3>
			<a href="<?php the_field('lokale_presse'); ?> "><?php the_field('lokale_presse'); ?></a>
		</div>

	</section>
	
	<section class="buero-mitarbeiter">
		<div class="row">
		<?php 
			echo "<h2>"; _e("Anwälte"); echo "</h2>";

		if( have_rows('anwalt-liste') ):
		while ( have_rows('anwalt-liste') ) : the_row(); ?>

		<?php 
		$posts = get_sub_field('anwalt-eintrag');
		if( $posts ):
		foreach( $posts as $post): 
		setup_postdata($post); ?>

		<article class="eight columns">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_field('portrait'); ?>" alt="<?php the_title(); ?>">
				<?php the_title( '<h3>', '</h3>', true ); ?>
			</a>
		</article>
    
		<?php 
		endforeach;
		wp_reset_postdata();
		endif; 
		?>

		<?php 
		    endwhile;
 			else :
 			endif;
		?>
		</div>

		<div class="row">
		<?php 
			echo "<h2>"; _e("Mitarbeiter"); echo "</h2>";

		if( have_rows('mitarbeiter-liste') ):
		while ( have_rows('mitarbeiter-liste') ) : the_row(); ?>

		<?php 
		$posts = get_sub_field('mitarbeiter-eintrag');
		if( $posts ):
		foreach( $posts as $post): 
		setup_postdata($post); ?>

		<article class="eight columns">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_field('portrait'); ?>" alt="<?php the_title(); ?>">
				<?php the_title( '<h3>', '</h3>', true ); ?>
			</a>
		</article>
    
		<?php 
		endforeach;
		wp_reset_postdata();
		endif; 
		?>

		<?php 
		    endwhile;
 			else :
 			endif;
		?>
		</div>

	</section>

</div>