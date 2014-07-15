<?php
/**
 * Template Name: Büros
 * @package Ferner & Kollegen
 */

get_header(); ?>

<div class="_global-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php get_template_part('_content/_content-bueros');?>
	<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
