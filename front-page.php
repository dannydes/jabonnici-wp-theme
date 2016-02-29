<?php

get_header();

the_post();

the_content();

$query = new WP_Query( 'posts_per_page=5' );

?>
<h2>Recent News</h2>
<div class="row">
<?php

while ( $query->have_posts() ) {
	$query->the_post();
	get_template_part( 'includes/post-excerpt-part' );
}

?>
</div>
<?php

wp_reset_postdata();

get_footer();