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
	<h1><?php wp_title( '' ); ?></h1>
</div>
<?php

while ( have_posts() ) {
	the_post();
	?><h2><?php the_title( sprintf( '<a href="%s">' , esc_url( get_permalink() ) ), '</a>' ); ?></h2><?php
	the_excerpt();
}

get_footer();