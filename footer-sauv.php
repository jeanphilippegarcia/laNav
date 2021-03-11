<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

</div>
<!-- end bootstrap -->
<!-- widgets footer -->
<div id="footer_1" class="sidebar">
	<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
		<?php dynamic_sidebar( 'footer_1' ); ?>
	<?php else : ?>
		Time to add some widgets!
	<?php endif; ?>
</div>
<div id="footer_2" class="sidebar">
	<?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
		<?php dynamic_sidebar( 'footer_2' ); ?>
	<?php else : ?>
		Time to add some widgets!
	<?php endif; ?>
</div>

<!-- widgets footer end -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="footer-widget mb-4">
					<h4 class="text-start mb-3">Contact</h4>
					<div class="footer-widget-content">
					Vous êtes à la recherche d’une information particulière&nbsp;? N’hésitez pas à contacter notre équipe, ils se feront un plaisir de vous aider.
						<!-- 
						<div class="site-info">
							<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							//printf(esc_html__('Theme : %1$s by %2$s.', 'laNAV'), 'laNAV', '<a href="http://www.jpg-design.com/" class="link_white">jean-philippe Garcia</a>');
							?>
						</div>
						site-info -->

					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="footer-widget mb-4">
						<h4 class="text-start mb-3">Marie Grommier</h4>
							<strong>Directrice</strong><br><br>
						<a href="tel:0643281508" class="link_white">0033643281508</a><br>
						<a href="mailto:contact@lanacelleartvivant.com" class="link_white">contact@lanacelleartvivant.com</a>
						<h6 class="text-start mt-4">Suivez-nous</h6>
						<div class="row d-inline-flex flex-nowrap justify-content-start mt-3 mb-3">
							<a href="https://www.facebook.com/lanacelle.artvivant.370/" class="col-sm-4 flex-shrink-1" title="facebook" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="link_white" viewBox="0 0 16 16">
									<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
								</svg>
							</a>
							<a href="https://twitter.com/lanacelleart" class="col-sm-4 flex-shrink-1" title="twitter" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="link_white" viewBox="0 0 16 16">
									<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
								</svg>
							</a>
							<a href="https://www.linkedin.com/in/la-nacelle-art-vivant-2a11831bb/" class="col-sm-4 flex-shrink-1" title="linkedin" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="link_white" viewBox="0 0 16 16">
									<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
								</svg>
							</a>
						</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="footer-widget mb-4">
					<h4 class="text-start mb-3">Infos légales</h4>
					<div class="text-start">
						<strong>La Nacelle Art Vivant</strong><br>
						Association loi 1901 | <a href="<?php WP_SITEURL ?>/conditions-generales-de-vente/"
							class="link_white">CGV</a> | <a href="<?php WP_SITEURL ?>/conditions-generales-dutilisation/" class="link_white">CGU</a> |<br>
						<a href="<?php WP_SITEURL ?>/politique-de-confidentialite/" class="link_white">Politique de confidentialité</a>
					</div>
					<a class="btn btn-warning mt-4 mb-3" href="<?php WP_SITEURL ?>/adhesion/" role="button">Devenir membre</a>
				</div>
			</div>
			<div class="col-sm">
				<div class="footer-widget mb-4">
					<h4 class="text-start mb-3">Newsletter</h4>
					<?php echo do_shortcode("[sibwp_form id=1]"); ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>