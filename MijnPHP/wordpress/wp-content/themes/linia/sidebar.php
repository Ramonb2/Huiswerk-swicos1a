<!-- SIDEBAR -->
<section class="sidebar col-sm-4 col">		
					
		<?php if(!dynamic_sidebar('sidebar')): ?>		
			
				<div class="default-sidebar">
					<h2><?php bloginfo('name' ); ?></h2>
					<p><?php bloginfo('description' ); ?></p>
				</div>
		
		<?php endif; ?>

</section> 
<!-- END SIDEBAR -->