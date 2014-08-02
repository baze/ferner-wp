<?php
/**
 * The template for displaying all single posts.
 *
 * @package Ferner & Kollegen
 */

get_header(); ?>

<div class="_global-content">
    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'single' ); ?>
        <?php
            if ( comments_open() || '0' != get_comments_number() ) :
                comments_template();
            endif;
        ?>

    <?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>