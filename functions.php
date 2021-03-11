<?php

/**
 * laNAV theme support.
 */
function laNAV_supports() {
	add_theme_support( 'title-tag' );
	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	register_nav_menu( 'header', 'menu principal' );
	// add_theme_support('custom-header');
}

/**
 * Registers Bootstrap 5 + Bootstrap JS + default wordpress css
 */
function laNAV_register_assets() {
	wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
	// (script, url, no dependencies, no version, in footer)
	wp_register_script( 'popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', [], false, true );
	wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', [], false, true );	
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_script( 'bootstrap' );
	// and wordpress theme style
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css' );
}

/**
 * Separator
 */
function laNAV_title_separator() {
	return '~';
}

/**
 * Nav menu *******************************************************************
 * Ajout des classes BS5
 */

function laNAV_menu_class($classes) {
	$classes[] = 'nav-item me-3';
	return $classes;
}

function laNAV_menu_link_class($attrs) {
	$attrs['class'] = 'nav-link';
	return $attrs;
}

add_filter( 'nav_menu_css_class','laNAV_menu_class' );
add_filter( 'nav_menu_link_attributes','laNAV_menu_link_class' );

/**
 * Nav menu end ********************************************
 */

// Actions.
add_action( 'after_setup_theme', 'laNAV_supports' );
add_action( 'wp_enqueue_scripts', 'laNAV_register_assets' );
/* Separator optionnel, marche sans ça :
add_filter ( 'document_title_separator', 'laNAV_title_separator()' ); */


// Register Theme Features
function custom_theme_features() {

	// Add theme support for Custom Header
	$header_args = array(
		'width'					=> 1200,
		'height'				=> 400,
		'flex-width'			=> true,
		'flex-height'			=> true,
		'uploads'				=> true,
		'random-default'		=> true,
		'header-text'			=> true,
		'default-text-color'	=> 'laNAV',
		'wp-head-callback'		=> '',
		'admin-head-callback'	=> '',
		'admin-preview-callback'=> '',
	);
	add_theme_support( 'custom-header', $header_args );
}
add_action( 'after_setup_theme', 'custom_theme_features' );

/**
 * Taxonomies
 */
function cptui_register_my_cpts() {

	/**
	 * Post Type: Prestations.
	 */

	$labels = [
		"name" => __("Prestations", "custom-post-type-ui"),
		"singular_name" => __("Prestation", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Prestations", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "prestation", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-nametag",
		"supports" => ["title", "editor", "thumbnail"],
	];

	register_post_type("prestation", $args);

	/**
	 * Post Type: Galeries.
	 */

	$labels = [
		"name" => __("Galeries", "custom-post-type-ui"),
		"singular_name" => __("Galerie", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Galeries", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "page d\'un artiste",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "galerie", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => ["title", "editor", "thumbnail", "excerpt", "author"],
	];

	register_post_type( "galerie", $args );

	/**
	 * Post Type: galerie Edition.
	 */

	$labels = [
		"name" => __("galerie Edition", "custom-post-type-ui"),
		"singular_name" => __("galerie Edition", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("galerie Edition", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "page d\'un artiste",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "galerie-edition", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => ["title", "editor", "thumbnail", "excerpt", "author"],
	];

	register_post_type( "galerie Edition", $args );

	/**
	 * Post Type: Evènements.
	 */

	$labels = [
		"name" => __("Evènements", "custom-post-type-ui"),
		"singular_name" => __("Evènement", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Evènements", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "evenement", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => ["title", "editor", "thumbnail", "excerpt"],
	];

	register_post_type( "evenement", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
/**
 * Taxonomies end
 */
/******************************************************************* */
/*** ajouter la fonction pour dupliquer les posts sans plugin ***/

function dupliquer_sans_plugin(){
	global $wpdb;
	if ( !( isset( $_GET['post']) || isset( $_POST['post']) || ( isset($_REQUEST['action']) && 'dupliquer_sans_plugin' == $_REQUEST['action'] ) ) ) {
		wp_die("Aucun post à dupliquer n'a été fourni...");

		check_admin_referer( 'duplicate-post_' . $post->ID ); // correction du 9 février 2017
	}
 
		// RECUPERE LES INFOS A DUPLIQUER
		$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
		$post = get_post( $post_id );
		$current_user = wp_get_current_user();
		$new_post_author = $post->post_author; // correction du 9 février 2017

	if ( isset( $post ) && $post != null ) {
 
		// REGLAGES DU NOUVEAU BROUILLON
		$args = array(
		'comment_status' => $post->comment_status,
		'ping_status' => $post->ping_status,
		'post_author' => $new_post_author,
		'post_content' => $post->post_content,
		'post_excerpt' => $post->post_excerpt,
		'post_name' => $post->post_name,
		'post_parent' => $post->post_parent,
		'post_password' => $post->post_password,
		'post_status' => 'draft',
		'post_title' => $post->post_title,
		'post_type' => $post->post_type,
		'to_ping' => $post->to_ping,
		'menu_order' => $post->menu_order
		);
 
		$new_post_id = wp_insert_post( $args );
 
		$taxonomies = get_object_taxonomies($post->post_type);
		foreach ($taxonomies as $taxonomy) {
		$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
		wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
	}
 
		$post_meta_infos = get_post_meta( $post_id ); // correction du 9 février 2017
 
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
		} else {
		wp_die("Une erreur s'est produite, impossible de trouver le post original : " . $post_id);
		}
	}

add_action( 'admin_action_dupliquer_sans_plugin', 'dupliquer_sans_plugin' );

function dupliquer_le_post( $actions, $post ) {
	if ( current_user_can('edit_posts', $post->ID) ) { // correction du 9 février 2017
		 $url = wp_nonce_url( admin_url( 'admin.php?action=dupliquer_sans_plugin&amp;post=' . $post->ID ), 'duplicate-post_' . $post->ID ); // correction du 9 février 2017
		 $actions['duplicate'] = '<a href="' . esc_url( $url ) . '" title="Dupliquer ce post" rel="permalink">Dupliquer</a>'; // correction du 9 février 2017
	}
	return $actions;
}
 
add_filter( 'post_row_actions', 'dupliquer_le_post', 10, 2 );
 /** 
 *social media https://wpformation.com/wordpress-sans-plugins/#sans-plugin-1
 */
/*** BOUTONS DE PARTAGE SANS PLUGINS ***/
/*
function my_sharing_buttons( $content ) {
	global $post;
	if ( is_singular() || is_home() && !is_woocommerce() ) {
 
		// Récuperer URL de la page en cours 
		$myCurrentURL = urlencode( get_permalink() );
 
		// Récuperer TITRE de la page en cours
		$myCurrentTitle = urlencode( get_the_title() );
 
		// Récuperer MINIATURE si l'image à la une existe
		if ( has_post_thumbnail($post->ID) ) {
			$myCurrentThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');
		}
		
		// Construction des URL de partage - correction du 9 février 2017 (url échapées)
		$twitterURL = esc_url( 'https://twitter.com/intent/tweet?text='.$myCurrentTitle.'&amp;url='.$myCurrentURL.'&amp;via=lanacelleart'); // indiquez ici votre pseudo sans le @
		$facebookURL = esc_url( 'https://www.facebook.com/sharer/sharer.php?u='.$myCurrentURL );
		$linkedInURL = esc_url( 'https://www.linkedin.com/shareArticle?mini=true&url='.$myCurrentURL.'&amp;title='.$myCurrentTitle );
		$email_share = esc_url( 'mailto:?subject=Regarde cet article !&BODY=Hey ! Je voulais partager avec toi cet article intéressant : '.$myCurrentURL.'&amp;title='.$myCurrentTitle );
 
		// Ajout des bouton en bas des articles et des pages
		$content .= '<div class="partage-reseaux-sociaux">';
		$content .= __('<h5>Partagez cette page !</h5>'); // correction du 9 février 2017 : texte traduisible
		$content .= '<a class="msb-link msb-twitter" href="'.$twitterURL.'" target="_blank">Twitter</a>';
		$content .= '<a class="msb-link msb-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a>';
		$content .= '<a class="msb-link msb-linkedin" href="'.$linkedInURL.'" target="_blank">LinkedIn</a>';
		$content .= '<a class="msb-link msb-email" href="'.$email_share.'" target="_blank">eMail</a>'; // correction du 9 février 2017
		$content .= '</div>';
		}

		// si ce n'est pas un article ou une page, ne pas inclure les boutons de partages
		return $content; // correction du 9 février 2017
}

add_filter( 'the_content', 'my_sharing_buttons' );
*/
/*
// woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
*/

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function laNAV_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'laNAV' ),
			'id'            => 'footer_1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'laNAV' ),
			'before_title'  => '<h4 class="text-start mb-3">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'laNAV' ),
			'id'            => 'footer_2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'laNAV' ),
			'before_title'  => '<h4 class="text-start mb-3">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'laNAV' ),
			'id'            => 'footer_3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'laNAV' ),
			'before_title'  => '<h4 class="text-start mb-3">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 4', 'laNAV' ),
			'id'            => 'footer_4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'laNAV' ),
			'before_title'  => '<h4 class="text-start mb-3">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'laNAV_widgets_init' );
