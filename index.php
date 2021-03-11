<?php get_header(); ?>
<div class="container">
	<h1 class="mt-4">
		<?php wp_title(); ?>
	</h1>
	<!-- card group v2-->
	<!-- ajouter taxonomies ??? -->

	<?php
	if ( have_posts() ) :
	?>
	<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
		<?php
			while ( have_posts() ) : the_post();
				require( 'cards.php' );
			endwhile;
		else :
		?>
		<h6>pas d'articles</h6>
		<?php endif; ?>
	</div>
	<!-- card  group v2 end -->
	<!-- Add the pagination functions here. -->
	<?= paginate_links(); ?>

	<?php get_footer(); ?>