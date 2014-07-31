<div class="_content-aktuelles entry-content">

<section class="content">
	<div class="eight columns"><?php the_content(); ?></div>
	<div class="eight columns">
		<div class="archive-controls">
				<div class="eight columns alpha">
					<form>
					<select>
						<option value="">Monat auswählen</option>
						<?php 
							$args = array(
								'type'            => 'monthly',
								'limit'           => '',
								'format'          => 'option', 
								'before'          => '',
								'after'           => '',
								'show_post_count' => false,
								'echo'            => 1,
								'order'           => 'DESC'
							); 
							wp_get_archives( $args ); 
						?>
					</select>
					</form>
				</div>

				<div class="eight columns omega">
					<form action="<?php bloginfo('url'); ?>/" method="get">
						<?php
						$select = wp_dropdown_categories('show_option_none=Kategorie Auswählen&show_count=1&orderby=name&echo=0&selected=6');
						$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
						echo $select;
						?>
						<noscript><input type="submit" value="Ansehen" /></noscript>
					</form>
				</div>
			</div>
	</div>
</section>

<section class="posts">
	
</section>

</div>