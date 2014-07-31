<div class="_content-anwaelte entry-content">

	<?php
	  $post_type = 'anwaelte';
	  $tax = 'standort';
	  $tax_terms = get_terms($tax);
	  if ($tax_terms) {
		foreach ($tax_terms as $tax_term) {
			echo '
			<div class="taxonomy row">
			'; ?>
			<h2><?php echo $tax_term->name; ?></h2>
			<?php
			$args=array(
				'post_type' => $post_type,
				'tax_query' => array(
					array(
						'taxonomy' => $tax,
						'field' => 'slug',
						'terms' => $tax_term->slug
					)
				),
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC',
				'operator' => 'IN'
			); // END $args

			$my_query = null;
			$my_query = new WP_Query($args);
		
			if( $my_query->have_posts() ) {			
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
			
			<article class="eight columns">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php the_field('portrait'); ?>" alt="<?php the_title(); ?>">
					<?php 
					the_title( '<h3>', '</h3>', true );
					echo "<div>";
						if( have_rows('rechtsgebiete') ):
						echo "<ul>";
						while ( have_rows('rechtsgebiete') ) : the_row();
							echo "<li>"; the_sub_field('rechtsgebiet'); echo "</li>";
						endwhile;
						echo "</ul>";
						else :
						_e("Leider konnten wir keine Rechtsgebiete finden.");
						endif;
						echo "</div>"; 
					?>
				</a>
				<div></div>
			</article>

			<?php endwhile;
			} 
			wp_reset_query();
			echo '
			</div>
		  ';
		}
	}
	?>

</div>