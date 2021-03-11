<div class="col">
	<div class="card h-100 border-dark border-2 rounded-0">
		<div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center; border-bottom: 1px solid #111; min-height: 300px;">
		</div>

		<h5 class="card-title pt-3"><?php echo esc_html( get_the_title() ); ?></h5>
		<div class="card-body d-flex flex-column justify-content-end">
			<p class="card-text"><?php the_excerpt() ?></p>
		</div>
		<div class="card-footer txt_center bg-dark rounded-0">
			<!-- <small class="text-muted">Last updated 3 mins ago</small> -->
			<a href="<?php the_permalink() ?>" class="btn btn-sm btn-outline-light rounded-0">Lire l'article</a>
		</div>
	</div>
</div>