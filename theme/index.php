
<?php

get_header();
?>
<div class="content clearfix">
<!-- main-column -->
		<div class="main-column">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content', get_post_format());

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>
                <div class="pages">
                <?php echo paginate_links( $args ); ?>
                </div>
		</div><!-- /main-column -->

		<?php get_sidebar(); ?>
</div>
<?php
get_footer();

?>
