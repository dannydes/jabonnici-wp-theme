<?php

/*
Theme Name: J. & A. Bonnici
Author: Daniel Desira
Author URI: http://dannydes.github.io
Version: 0.2
*/

get_header();

get_sidebar();

?>
<div class="page-header">
	<h1><?php single_post_title(); ?></h1>
</div>
<?php if ( have_posts() ): ?>
<div class="row">
<?php

	while ( have_posts() ) {
		the_post();
		get_template_part( 'includes/post-excerpt-part' );
	}

?>
</div>
<?php

	the_posts_pagination( array(
		'mid_size' => 2,
	) );

else:
	get_template_part( 'includes/no-posts' );
endif;

get_footer();