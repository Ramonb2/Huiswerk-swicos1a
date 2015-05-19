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

						<div class="meta-post">
							<span class="category-post"><?php the_category(' &bull; ' ); ?></span>
							<span>/</span>
							<span class="date-post"><?php the_time(get_option('date_format')); ?></span>

							<?php if(comments_open()){ ?>
								<span>/</span>
								<span class="comment-post"><?php comments_number(__('No Comments', 'linia'),__('1 Comment', 'linia'),__('% Comments', 'linia')); ?></span>							
							<?php } ?>
							
							<span>/</span>	
							<?php edit_post_link(__('Edit', 'linia'),'<span>','</span>'); ?>		
						</div> <!-- end meta-post -->

							<div class="writing">

								<?php the_content(); ?>
								<br>
								<?php echo get_the_tag_list('Tags : ',' | ', ''); ?>
								
							</div> <!-- writing -->

							<?php if(get_the_author_meta('description')): ?>
								<?php get_template_part('author-bio'); ?>
							<?php endif; ?>

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