<?php
/**
 * Template Name: single
 */
get_header();
?>
<div class="container">
	<?php the_post_thumbnail('large'); ?>
</div>

<div class="container container_max">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title() ?></h1>
	<?php //the_post_thumbnail('large');
	the_content();
	endwhile;
	else :
	?>
	<h1>pas d'articles</h1>
	<?php endif;

	get_footer();