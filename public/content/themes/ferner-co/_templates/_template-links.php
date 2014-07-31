<?php
/**
 * Template Name: Links & Friends
 * @package Ferner & Kollegen
 */

get_header(); ?>

<div class="_global-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="sixteen columns"><?php get_template_part('_snippets/_snippet-breadcrumb');?></div>	
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php get_template_part('_content/_content-links');?>
	<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
