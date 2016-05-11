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
			'container_class' => 'collapse navbar-collapse',
			'container_id' => 'bs-example-navbar-collapse-1',
			'menu_class' => 'nav navbar-nav',
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

// Creates a function that creates a post type
function create_post_type() {
  
// NIEUWS CPT
  register_post_type( 'nieuws',
    array(
      'labels' => array(
        'name' => __( 'Nieuws' ),
        'singular_name' => __( 'Nieuwsartikel' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );

// TICKETS CPT
  register_post_type( 'tickets',
    array(
      'labels' => array(
        'name' => __( 'Tickets' ),
        'singular_name' => __( 'Ticket' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );

// ARTIESTEN CPT
  register_post_type( 'artiesten',
    array(
      'labels' => array(
        'name' => __( 'Artiesten' ),
        'singular_name' => __( 'Artiest' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

// Init the function
add_action( 'init', 'create_post_type' );


?>

