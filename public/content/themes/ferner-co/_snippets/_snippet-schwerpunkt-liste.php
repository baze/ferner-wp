<?php 
	$posts = get_field('schwerpunkt-liste');
	if( $posts ): ?>
		<?php foreach( $posts as $p ): ?>
			<span><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></span>				    
		<?php endforeach; ?>
<?php endif; ?>