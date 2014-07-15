<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Ferner & Kollegen
 */

get_header(); ?>
					
					<div class="_global-content">
						<h1 class="page-title"><?php _e( 'Das tut uns leid. Die Seite kann leider nicht gefunden werden.', 'ferner-co' ); ?></h1>
						
						<div class="row">
						
							<div class="one-third column">
								<?php get_search_form(); ?>
							</div>	
							
							<div class="one-third column">
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
							</div>

							<div class="one-third column">
							<?php
								$archive_content = '<p>' . sprintf( __( 'Suchen Sie in unserem Archiv.', 'ferner-co' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
							?>
							<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
							</div>

						</div>
					</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
