<aside class="_global-sidebar" role="complementary">

    <div class="widget sprachen">
        <?php get_template_part('_snippets/_snippet-language-switcher') ?>
    </div>
	
	<div class="widget kontakt">
	<?php 
		if ( is_singular( 'buero' ) ) {
    		get_template_part('_snippets/_snippet-buero-sidebar');
    	} else { 
    		get_template_part('_snippets/_snippet-standorte-sidebar');
    	}	
	?>
	</div>
	
	<div class="widget notruf">
		<strong><?php _e("24/7-Notruf: ");  the_field('notruf', 'option'); ?></strong>
	</div>
	
	<div class="widget strafrecht">
		<strong><?php _e("Strafrecht Aktuell"); ?></strong>
		<div class="content">
			
		</div>
	</div>
	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<nav role="navigation"><?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?></nav>

</aside>