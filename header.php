<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300;900&family=Roboto&display=swap" rel="stylesheet">
	<?php wp_head() ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-14XTL5KY5R"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-14XTL5KY5R');
	</script>
</head>

<body>
	<header>
		<!-- navbar jp -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php WP_SITEURL ?>/">
					<img src="<?php WP_SITEURL ?>/wp-content/uploads/2021/02/nacelle-logo-nav.svg" alt="logo" class="logo ms-3">
				</a>
				<!-- toggler > targets navbar -->
				<button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse ms-4" id="navbar">
					<?php
					wp_nav_menu([
						'theme_location'=> 'header',
						'menu_id'		=> 'primary-menu',
						'container'		=> false,
						'menu_class'	=> 'navbar-nav me-auto mb-2 mb-lg-0'
					]);
						
					get_search_form();
					?>
				</div>
			</div>
		</nav>
	</header>