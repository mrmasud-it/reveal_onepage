<?php


get_header(); ?>

<div class="container">
	

		<?php
		// Start the loop.
		while (have_posts()) : the_post();

			

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

	
</div>

<?php get_footer(); ?>