<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-72760774-1', 'auto');
	ga('send', 'pageview');

	</script>

</head>

<body <?php body_class(); ?>>
	
	<div class="container">

		<!-- site-header -->

		<!-- material nav -->
		<nav id="menu" class="panel" role="navigation" style=";">
			<nav class="mainNav clearfix">

				<?php

				$args = array(
					'theme_location' => 'mainNav'
					);

					?>

					<?php wp_nav_menu(  $args ); ?>
				</nav>
				<div class="navDiv">

				</div>
				<nav class="mainNav clearfix">
					<?php

					$args = array(
						'theme_location' => 'linksNav'
						);

						?>

						<?php wp_nav_menu(  $args ); ?>
					</nav>
				</nav>
				<a href="#menu" class="menu-link">
					<div class="menucover"></div>
				</a>
				<div class="top">
					<a href="#menu" class="menu-link">
						<img class="top-ico" src="<?php bloginfo('stylesheet_directory'); ?>/img/header_left.png" />
					</a>
				</div>


				<!-- normal nav-->
				<header class="site-header clearfix">
					<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>

					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img  class="logo" src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' /></a>

				<?php else : ?>
				<hgroup>
					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
			<?php endif; ?>









			<div class="nav">
				<nav class="mainNav clearfix">

					<?php

					$args = array(
						'theme_location' => 'mainNav'
						);

						?>

						<?php wp_nav_menu(  $args ); ?>
					</nav>
					<div class="navDiv">

					</div>
					<nav class="mainNav clearfix">
						<?php

						$args = array(
							'theme_location' => 'linksNav'
							);

							?>

							<?php wp_nav_menu(  $args ); ?>
						</nav>
					</div>
		</header><!-- /site-header -->