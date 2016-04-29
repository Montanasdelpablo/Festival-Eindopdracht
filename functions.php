<?php 

// Register Navigation Menus
function register_navigation() {

	$locations = array(
		'Main navigation' => __( 'Navigation of the main', 'text_domain' ),
	);
	register_nav_menus( $locations );

}

// Init register navigation menu
add_action( 'init', 'register_navigation' );

function showNav() {

	
	   
		$args = array(
			'theme_location' => 'Main navigation',
			'menu' => 'Main navigation',
			'container' => 'div',
			'container_class' => 'menu-{menu-slug}-container',
			'container_id' => '',
			'menu_class' => 'menu',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			'depth' => 0,
			'walker' => ''
		);
	
		wp_nav_menu( $args );

}

// CUSTOM POST TYPES

// Init the function
add_action( 'init', 'create_post_type' );

// Creates a function that creates a post type
function create_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Nieuws' ),
        'singular_name' => __( 'Nieuwsartikel' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

?>