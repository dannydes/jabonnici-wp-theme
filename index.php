<?php

/*
Theme Name: J. & A. Bonnici
Author: Daniel Desira
Author URI: http://dannydes.github.io
Version: 0.1
*/

get_header();

?>
<div class="page-header">
	<h1><?php single_post_title(); ?></h1>
</div>
<div class="row">
<?php

while ( have_posts() ) {
	the_post();
	
	?>
	<div class="col-md-6 col-xs-12">
		<div class="well">
			<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>" class="thumbnail">
				<?php the_post_thumbnail(); ?>
			</a>
			<?php endif; ?>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php the_excerpt( __( 'Read more...' ) ); ?>
		</div>
	</div>
	<?php
	
}

?>
</div>
<?php get_footer();