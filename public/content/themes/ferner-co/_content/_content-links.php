<div class="_content-links entry-content">

<?php if( have_rows('link-kategorie') ): while ( have_rows('link-kategorie') ) : the_row(); ?>
 	<section class="link-kategorie">
 	<h3><?php the_sub_field('link-kategorie-titel') ?></h3>
 	<ul>
	<?php if( have_rows('link-liste') ): while ( have_rows('link-liste') ) : the_row(); ?>
         
         <li>
	         <a href="<?php the_sub_field('link-url') ?>" target="_blank">
	         	<h4><?php the_sub_field('link-titel') ?></h4>
	         </a>
	         <p><?php the_sub_field('link-text') ?></p>
		</li>

 	<?php endwhile; else : endif; ?>
 	</ul>
 	</section>
<?php endwhile; else : endif; ?>

</div>