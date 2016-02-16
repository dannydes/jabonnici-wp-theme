<?php

get_header();

the_post();

?>
<div class="page-header">
	<h1><?php the_title(); ?></h1>
</div>
<?php

the_content();

get_footer();