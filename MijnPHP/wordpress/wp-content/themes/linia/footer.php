	<!-- FOOTER -->
	<footer class="bottom-footer">

		<div class="footer-opacity-img"></div>			
			
			<div class="container">

			<div class="row">

				<div class="col-sm-3">
					<h3><a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h3>					
					
					
				</div> <!-- col-sm-3 -->				

				<div class="bookmarks col-sm-6 pull-right">
					<span><?php _e('gemaakt door','mij'); ?> Ramon Brakels</span>
				</div> <!-- end bookmarks -->
				
				<hr class="hr-footer">

				<div class="copyright col-sm-6">
					<span><?php _e('Copyright','linia')?> &copy; <?php echo date('Y'); ?> <?php bloginfo('name')?> . <?php _e('All Rights Reserved.','linia'); ?></span>
				</div> <!-- end copyright -->

				
				
			</div> <!-- end row -->
			
		</div><!-- container -->
		
	</footer>
	<!-- END FOOTER -->
	
<?php wp_footer(); ?>
</body>
</html>