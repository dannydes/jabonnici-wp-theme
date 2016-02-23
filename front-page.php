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
	
	?>
	<div class="col-md-6 col-xs-12">
		<div class="well">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php the_excerpt( __( 'Read more...' ) ); ?>
		</div>
	</div>
	<?php
	
}

?>
</div>
<?php

wp_reset_postdata();

get_footer();