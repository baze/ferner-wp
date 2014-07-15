<aside class="_global-sidebar" role="complementary">
	
	<?php get_template_part('_snippets/_snippet-standorte-sidebar');?>

	<div class="widget">
		
	</div>
	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<nav role="navigation"><?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?></nav>
</aside>