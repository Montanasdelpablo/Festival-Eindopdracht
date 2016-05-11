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
add_theme_support( 'post-thumbnails', array( 'nieuws', 'nieuws' ) );
add_action( 'init', 'create_nieuws_taxonomies', 0 );
add_image_size( 'mycustomsize', 200, 400, true);

function create_nieuws_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	// Labels
	$labels = array(
		'name'              => _x( 'Nieuwsgenres', 'taxonomy general name' ),
		'singular_name'     => _x( 'Nieuwsgenre', 'taxonomy singular name' ),
		'search_items'      => __( 'Zoek genres' ),
		'all_items'         => __( 'Alle genres' ),
		'edit_item'         => __( 'Bewerk genre' ),
		'update_item'       => __( 'Update genre' ),
		'add_new_item'      => __( 'Voeg nieuw Genre toe' ),
		'new_item_name'     => __( 'Nieuwe genre naam' ),
		'menu_name'         => __( 'Genres' ),
	);
	// Arguments
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'nieuws' ), $args );
}

// Creates a function that creates a post type
function create_post_type() {
  
// NIEUWS CPT
  register_post_type( 'nieuws',
    array(
      'labels' => array(
        'name' => __( 'Nieuws' ),
        'singular_name' => __( 'Nieuwsartikel' ),
        'add_new_item' => __('Een nieuw artikel'), 
        'add_new' => __('Een nieuw artikel'), 
        'new_item' => __('Nieuw nieuwsartikel'), 
        'view_item' => __('Bekijk artikel'), 
        'all_items' => __('Alle nieuwsartikelen'),

      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'nieuws'),
      'supports' => array('title', 'author', 'excerpt', 'editor', 'thumbnail', 'revisions'),
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

