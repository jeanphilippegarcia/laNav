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
	<?php endif; ?>

	<?php wp_link_pages( array(
    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'lanav' ) . '</span>',
    'after'       => '</div>',
    'link_before' => '<span>',
    'link_after'  => '</span>',
    ) );
	?>
	<?php comment_form(); ?>
	<?php get_footer(); ?>