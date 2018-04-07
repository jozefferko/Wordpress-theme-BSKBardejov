

<?php

get_header();
?>
<div class="content clearfix">
<!-- main-column -->
		<div class="main-column">
        <?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;?>
		</div><!-- /main-column -->

		<?php get_sidebar(); ?>
</div>
<?php
get_footer();

?>
