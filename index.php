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
	get_template_part( 'includes/post-excerpt-part' );
}

?>
</div>
<?php

the_posts_pagination( array(
	'mid_size' => 2,
) );

get_footer();