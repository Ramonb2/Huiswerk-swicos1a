<?php get_header(); ?>

<!-- CONTENT AREA -->
	<section class="content-area">
		
		<div class="container">

				<!-- POSTS -->
				<section class="posts col-sm-8 col">

					<?php if(is_month()){ ?>
						<h2 class="archive-title"><?php _e('Monthly Archives','linia'); ?> : <?php echo get_the_date(); ?></h2>	
					<?php }elseif(is_day()){ ?>
						<h2 class="archive-title"><?php _e('Daily Archives','linia'); ?> : <?php echo get_the_date(); ?></h2>
					<?php }elseif(is_year()){ ?>
						<h2 class="archive-title"><?php _e('Yearly Archives','linia'); ?> : <?php echo get_the_date(); ?></h2>
					<?php }else{?>
						<h2 class="archive-title"><?php _e('Archives :','linia'); ?></h2>						
					<?php } ?>
					
					
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