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
			
			<div class="row">
				
				<section class="posts col-sm-8 col">					
					
					<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'linia' ); ?></h1>

					<br>

					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'linia' ); ?></p>

					<?php get_search_form(); ?>				
						
				</section> <!-- end posts -->

				<!-- Dynamic Sidebar -->
				<?php get_sidebar(); ?>
				<!-- End Dynamic Sidebar -->			
				
			</div> <!-- end row -->

		</div> <!-- end container -->

	</section>
	<!-- END CONTENT AREA -->

<?php get_footer(); ?>