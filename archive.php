<?php get_header(); ?>
<div class="page-header">
	<h1><?php the_archive_title(); ?></h1>
	<p><?php the_archive_description(); ?></p>
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