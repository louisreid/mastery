<?php

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/video-thumbnail', get_post_format() );
				// the_title( '<h1 class="entry-title">', '</h1>' );
			// End the loop.
			endwhile;

		endif;
		?>


<?php get_footer(); ?>
