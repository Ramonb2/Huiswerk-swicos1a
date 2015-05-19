<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Linia
 */
get_header(); ?>


<!-- CONTENT AREA -->
	<section class="content-area">
		
		<div class="container">			

				<!-- POSTS -->
				<section class="posts col-sm-8 col">
					
					<?php if(have_posts()): ?>

					<?php while(have_posts()):the_post(); ?>

						<?php get_template_part('content',get_post_format() ); ?>

					<?php endwhile; ?>

						<?php linia_paging_nav(); ?>						

					<?php else: ?>

						<?php get_template_part('content','none'); ?>
					
					<?php endif; ?>
						
				</section> <!-- end posts -->
				<!-- END POSTS -->

				<!-- Dynamic Sidebar -->
				<?php get_sidebar(); ?>
				<!-- End Dynamic Sidebar -->

		</div> <!-- end container -->

	</section>
	<!-- END CONTENT AREA -->

<?php get_footer(); ?>