<?php

/**
 * Template Name: page statique de base
 */
?>

<?php get_header(); ?>
<div class="container">

	<?php if ( have_posts() ) : ?>
	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
		<h1 class="mt-4"><?php the_title() ?></h1>
		<?php 
		the_post_thumbnail();
		the_content();
		endwhile
		?>
		<!-- End of the main loop -->
	</div>

	<!-- Add the pagination functions here. -->
	<?php paginate_links(); ?>

	<?php else : ?>
	<h1>pas d'articles</h1>
	<?php endif; ?>

	<?php get_footer(); ?>