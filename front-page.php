<?php
/**
 * Template Name: front-page
 */
get_header();
?>
<div class="container-fluid">

	<div class="hero_image">
		<!-- media en tete -->
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
			width="<?php echo get_custom_header()->width; ?>" alt="hero image" />

		<div class="hero_content">
			<h1 class="txt_white shadowh1">
				<?php the_title() ?>
			</h1>
			<div class="txt_center">
				<a href="<?php WP_SITEURL ?>/prestations/" class="hero_btn">
					nos prestations
				</a>
			</div>
		</div>
	</div>
	<!-- en tete fin -->
	<!-- actu posts -->
	<h2>
		Actualité
	</h2>
	<!-- derniers articles card -->
	<?php
	$lastposts = get_posts(array(
		'posts_per_page' => 6
	));

	if ( $lastposts ) {
	?>
	<div class="container">
		<div class="row row-cols-1 row-cols-lg-3 g-4 mb-5">
			<?php
			foreach ( $lastposts as $post ) : setup_postdata( $post );
				require( 'cards.php' );
			endforeach;
			wp_reset_postdata();
			?>
		</div>
	</div>
	<?php
	}
	?>
	<!-- actu posts fin -->
	<!-- Contenu -->
	<?php
	the_content();
	get_footer();
	?>