<?php get_header(); ?>

<!-- CONTENT AREA -->
	<section class="content-area">
		
		<div class="container">

				<!-- POSTS -->
				<section class="posts col-sm-8 col">

					<h2 class="archive-title"><?php _e('Search Results for','linia'); ?> : <?php echo get_search_query(); ?></h2>	
					
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