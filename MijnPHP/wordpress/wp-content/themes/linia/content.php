<article id="post-<?php the_ID(); ?>" <?php post_class('standard'); ?>>

		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

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

		<div class="row">

			<figure class="col-sm-4">
				<?php if(has_post_thumbnail()) {
				the_post_thumbnail();
				} else { 
				edit_post_link(__('You should add post image','linia'),'<p>', '</p>' );
				}?>				
			</figure>

			<div class="writing col-sm-8">
				<?php the_excerpt(); ?>
				<?php wp_link_pages(); ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-default"><?php _e('Read Article','linia'); ?></a>				
			</div> <!-- writing -->

		</div> <!-- end row -->

</article>
