<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Ferner & Kollegen
 */

get_header(); ?>

<div class="_global-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
