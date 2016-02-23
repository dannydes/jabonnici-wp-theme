<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo get_bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<title><?php echo get_bloginfo(); if ( wp_title( '', FALSE ) !== '' ): ?> -<?php wp_title( '' ); endif; ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo(); ?></a>
				</div>
				<noscript>
					<div>Your JavaScript is disabled - this might hurt your experience. Please follow these <a href="http://www.enable-javascript.com/" target="_blank">steps</a>.</div>
				</noscript>
				<div class="collapse navbar-collapse" id="main-menu">
					<?php
						
						wp_nav_menu( array(
							'menu' => 'primary',
							'menu_class' => 'nav navbar-nav navbar-right',
						) );
						
					?>
				</div>
			</div>
		</nav>
		<div class="container">