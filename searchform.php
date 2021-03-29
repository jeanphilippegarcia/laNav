	<!-- bs search / form role=“search” -->
	<form role=“search” class="d-flex me-3" action="<?php echo esc_url(home_url('/')); ?>">
		<input class="form-control form-control-sm rounded-0" name="s" type="search" placeholder="Rechercher" aria-label="Search" value="<?php get_search_query() ?>">
		<button class="btn btn-sm btn-outline-dark rounded-0" type="submit">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
				<path
					d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
			</svg>
		</button>
	</form>