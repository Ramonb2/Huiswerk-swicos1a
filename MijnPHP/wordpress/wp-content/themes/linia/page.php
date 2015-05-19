<?php get_header(); ?>

<!-- CONTENT AREA -->
	<section class="content-area">
		
		<div class="container">
			
			<div class="row">

				<!-- POSTS -->
				<section class="posts col-sm-8">

					<article class="single">
					<?php while(have_posts()):the_post(); ?>

						<h1><?php the_title(); ?></h1>

							<div class="writing">

								<?php the_content(); ?>
								
							</div> <!-- writing -->

							<?php comments_template(); ?>

					<?php endwhile; ?>
					</article>

				</section> <!-- end posts -->
				<!-- END POSTS -->

				<!-- Dynamic Sidebar -->
				<?php get_sidebar(); ?>
				<!-- End Dynamic Sidebar -->				
				
			</div> <!-- end row -->

		</div> <!-- end container -->

	</section>
	<!-- END CONTENT AREA -->

<?php get_footer(); ?>