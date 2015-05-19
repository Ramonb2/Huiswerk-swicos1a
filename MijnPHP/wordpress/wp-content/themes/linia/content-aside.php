<article id="post-<?php the_ID(); ?>" <?php post_class('aside'); ?>>
	
	<div class="writing">

		<?php the_content(); ?>	
		<?php wp_link_pages(); ?>
			
	</div> <!-- writing -->

	<div class="meta-post">
		<span class="category-post"><?php the_category(' &bull; ' ); ?></span>
		<span>/</span>
		<span class="date-post"><?php the_time(get_option('date_format')); ?></span>
		
		<?php if(comments_open()) { ?>
		<span>/</span>
		<span class="comment-post"><?php comments_number(__('No Comments', 'linia'),__('1 Comment', 'linia'),__('% Comments', 'linia')); ?></span>	
		
		<?php } ?>
		<?php edit_post_link(__('Edit', 'linia'),'<span> /','</span>'); ?>		
	</div> <!-- end meta-post -->
	
</article>