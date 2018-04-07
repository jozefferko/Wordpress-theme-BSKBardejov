	<article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?> clearfix">

		<!-- post-thumbnail -->
<!-- /post-thumbnail -->



		<h2><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<p class="post-info"><?php the_time('F j, Y g:i a'); ?> 

			</p>
            		<div class="post-thumbnail align">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		</div>

		<?php if ( is_search() OR is_archive() ) { ?>
			<p class="text>
			<?php echo get_the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Read more&raquo;
			</a></p>
		<?php } else {
			if ($post->post_excerpt) { ?>

				<p class="text>
				<?php echo get_the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
				</p>

			<?php } else {

				the_content();

			}
		} ?>

	</article>