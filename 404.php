<?php

get_header();

get_sidebar();

?>
<div class="page-header">
	<h1>Page not found!</h1>
</div>
<div class="well">
	<p>Please check the URL.</p>
	<p>If you're here by error, go back to <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage.</a></p>
	<div class="row">
		<div class="col-md-4 col-xs-12"></div>
		<div class="col-md-4 col-xs-12">
			<a class="thumbnail" href="#">
				<img src="<?php echo get_template_directory_uri(); ?>/static/.jpg" alt="">
			</a>
		</div>
	</div>
</div>
<?php get_footer();