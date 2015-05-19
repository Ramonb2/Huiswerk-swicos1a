<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>	
	
	<!-- TOP HEADER -->
	<header class="top-header">

	

	<img src="<?php header_image(); ?>" class="custom-img">
		
		<div class="container center-block">

			<div class="row">

				<div class="col-sm-3">
					<h1><a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>					
					<p class="linia-top-title"><?php bloginfo('description' ); ?></p>
				</div> <!-- col-sm-3 -->

				<!-- Top Menu -->				
				<?php wp_nav_menu(array(
								'theme_location' => 'top-menu',
								'container' => 'nav',
								'container_class' => 'col-sm-9',
								'menu_class' => 'list-inline nav navbar-nav pull-right',
								'fallback_cb' => 'false'
				)); ?>
				<!-- End Top Menu -->


				
				

			</div> <!-- row -->	

		</div> <!-- end container -->

	</header>
	<!-- END TOP HEADER -->

	<!-- MOBILE HEADER -->
	<header class="mobile-header">

		<div class="container">
				
					<a href="<?php echo esc_url(home_url('/' )); ?>"><img class="customize-logo" src="<?php echo get_theme_mod('linia_logo_image'); ?>"></a>

				<!-- Mobile Top Menu -->				
				<?php wp_nav_menu(array(
								'theme_location' => 'mobile-menu',
								'container' => 'nav',								
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => 'false'								
				)); ?>
				<!-- End Mobile Top Menu -->		

		</div> <!-- end container -->
		
	</header>
	<!-- END MOBILE HEADER -->