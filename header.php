<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo get_bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
					<p class="navbar-text hidden-md hidden-sm hidden-xs"><?php echo get_bloginfo( 'description' ); ?></p>
				</div>
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
			<noscript>
				<div class="alert alert-warning">Your JavaScript is disabled - this might hurt your experience. Please follow these <a href="http://www.enable-javascript.com/" target="_blank">steps</a>.</div>
			</noscript>