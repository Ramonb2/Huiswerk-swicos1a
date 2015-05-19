<article>

	<?php if(is_search()): ?>

		<h1><?php _e('No posts found','linia'); ?></h1>		

		<div class="row">

			<div class="writing col-sm-8">

				<p><?php _e('Return','linia'); ?> : <a href="<?php echo esc_url(home_url( '/' )); ?>"><?php _e('Home','linia'); ?></a></p>

				<br>

				<?php get_search_form(); ?>
								
			</div> <!-- writing -->

		</div> <!-- end row -->

	<?php endif; ?>

</article>