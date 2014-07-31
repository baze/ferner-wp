<div class="_content-single-anwaelte entry-content">

	<div class="container">

		<div class="portrait four columns">
			<img src="<?php the_field('portrait'); ?>" alt="<?php the_title(); ?>">
		</div>

		<div class="beschreibung twelve columns">

			<section class="rechtsgebiete">
				<?php 

				echo "<h3>";
				_e("Rechtsgebiete");
			 	echo "</h3>";

				if( have_rows('rechtsgebiete') ):
				echo "<ul>";
			  	while ( have_rows('rechtsgebiete') ) : the_row();
			 		echo "<li>";
			        the_sub_field('rechtsgebiet');
			 		echo "</li>";
			    endwhile;
			    echo "</ul>";
			    else :
				_e("Leider konnten wir keine Rechtsgebiete finden.");
				echo "<style>";
				echo ".rechtsgebiete{ display: none; }";
				echo "</style>";
				endif;
				?>
			</section>

			<section class="lebenslauf">
				<?php 

				echo "<h3>";
				_e("Lebenslauf");
			 	echo "</h3>";

				if( have_rows('lebenslauf') ):
				echo "<ul>";
			  	while ( have_rows('lebenslauf') ) : the_row();
			 		echo "<li>";
			        echo "<span>"; the_sub_field('jahr'); echo " </span>";
			        echo "<span>"; the_sub_field('inhalt'); echo " </span>";
			 		echo "</li>";
			    endwhile;
			    echo "</ul>";
			    else :
				_e("Leider konnten wir keine Stationen im Lebenslauf finden.");
				echo "<style>";
				echo ".lebenslauf{ display: none; }";
				echo "</style>";
				endif;
				?>
			</section>

			<section class="stationen">
				<?php 

				echo "<h3>";
				_e("Berufliche Stationen");
			 	echo "</h3>";

				if( have_rows('berufliche_stationen') ):
				echo "<ul>";
			  	while ( have_rows('berufliche_stationen') ) : the_row();
			 		echo "<li>";
			        the_sub_field('berufliche_station');
			 		echo "</li>";
			    endwhile;
			    echo "</ul>";
			    else :
				_e("Leider konnten wir keine beruflichen Stationen finden.");
				echo "<style>";
				echo ".stationen{ display: none; }";
				echo "</style>";
				endif;
				?>
			</section>

			<section class="mitgliedschaft">
				<?php 

				echo "<h3>";
				_e("Mitgliedschaft");
			 	echo "</h3>";

				if( have_rows('mitgliedschaft') ):
				echo "<ul>";
			  	while ( have_rows('mitgliedschaft') ) : the_row();
			 		echo "<li>";
			        the_sub_field('mitgliedschaft-eintrag');
			 		echo "</li>";
			    endwhile;
			    echo "</ul>";
			    else :
				_e("Leider konnten wir keine Mitgliedschaft finden.");
				echo "<style>";
				echo ".mitgliedschaft{ display: none; }";
				echo "</style>";
				endif;
				?>
			</section>

			<section class="schwerpunkt-liste">
				<?php
				echo "<h3>";
				_e("Schwerpunkte");
			 	echo "</h3>"; 
			 	$posts = get_field('schwerpunkt-liste');
			 	if( $posts ):
			    echo "<ul>";
			    foreach( $posts as $post):
			    	setup_postdata($post);
			        echo "<li>"; ?>
			            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        <?php 
			        echo "</li>";
			    	endforeach;
			    	echo "</ul>";
			    	wp_reset_postdata();
					endif; 
					?>
			</section>

			<section class="sprachkenntnisse">
				<?php 

				echo "<h3>";
				_e("Sprachkenntnisse");
			 	echo "</h3>";

				if( have_rows('sprachkenntnisse') ):
				echo "<ul>";
			  	while ( have_rows('sprachkenntnisse') ) : the_row();
			 		echo "<li>";
			        the_sub_field('sprache');
			 		echo "</li>";
			    endwhile;
			    echo "</ul>";
			    else :
				_e("Leider konnten wir keine Sprachkenntnisse finden.");
				echo "<style>";
				echo ".sprachkenntnisse{ display: none; }";
				echo "</style>";
				endif;
				?>
			</section>

			<section class="herausgeber">
				<?php 

				echo "<h3>";
				_e("Herausgeber");
			 	echo "</h3>";

				if( have_rows('herausgeber') ):
				echo "<ul>";
			  	while ( have_rows('herausgeber') ) : the_row();
			 		echo "<li>";
			        the_sub_field('zeitschrift');
			 		echo "</li>";
			    endwhile;
			    echo "</ul>";
			    else :
				_e("Leider konnten wir keine Zeitschriften finden.");
				echo "<style>";
				echo ".herausgeber{ display: none; }";
				echo "</style>";
				endif;
				?>
			</section>

			<section class="veroffentlichungen">
				<?php 

				echo "<h3>";
				_e("Veröffentlichungen");
			 	echo "</h3>";

				if( have_rows('veroffentlichungen') ):
				echo "<ul>";
			  	while ( have_rows('veroffentlichungen') ) : the_row();
			 		echo "<li>";
			        the_sub_field('veroffentlichung');
			 		echo "</li>";
			    endwhile;
			    echo "</ul>";
			    else :
				_e("Leider konnten wir keine Veröffentlichungen finden.");
				echo "<style>";
				echo ".veroffentlichungen{ display: none; }";
				echo "</style>";
				endif;
				?>
			</section>

			<section class="didaktische_beitrage">
				<?php 

				echo "<h3>";
				_e("Didaktische Beiträge");
			 	echo "</h3>";

				if( have_rows('didaktische_beitrage') ):
				echo "<ul>";
			  	while ( have_rows('didaktische_beitrage') ) : the_row();
			 		echo "<li>";
			        the_sub_field('didaktischer_beitrag');
			 		echo "</li>";
			    endwhile;
			    echo "</ul>";
			    else :
				_e("Leider konnten wir keine Didaktischen Beiträge finden.");
				echo "<style>";
				echo ".didaktische_beitrage{ display: none; }";
				echo "</style>";
				endif;
				?>
			</section>

		</div>

		<?php the_field('zusatzinformationen') ?>

	</div>
	
</div>