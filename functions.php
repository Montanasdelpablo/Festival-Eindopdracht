<?php 

// Social media URL and Contact info

add_filter( 'user_contactmethods', 'more_contactmethods' );
function more_contactmethods( $contactmethods ) {
    $contactmethods['twitter'] = 'Twitter URL';
    $contactmethods['facebook'] = 'Facebook URL';
    $contactmethods['instagram'] = 'Instagram URL';
    $contactmethods['adres'] = 'Adres gegevens';
    $contactmethods['postcode'] = 'Postcode';
    $contactmethods['plaatsnaam'] = 'Plaatsnaam';
    return $contactmethods;
}

// Register Navigation Menus
function register_navigation() {

	$locations = array(
		'Main navigation' => __( 'Navigation of the main', 'text_domain' ),
	);
	register_nav_menus( $locations );

}

// Init register navigation menu
add_action( 'after_setup_theme', 'register_navigation' );


// Word nu niet gebruikt : 

function showNav() {

	
	   
		$args = array(
			'theme_location' => 'Main navigation',
			'menu' => 'Main navigation',
			'container' => 'div',
			'container_class' => 'menu-{menu slug}-container',
			'container_id' => '',
			'menu_class' => 'menu',
			'menu_id' => 'cssmenu',
			'echo' => true,
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul>%3$s</ul>',
			'walker' => new CSS_Menu_Maker_Walker (),
		);
	
		wp_nav_menu( $args );

}



// CUSTOM POST TYPES

add_theme_support( 'post-thumbnails', array( 'nieuws', 'nieuws' ) );
add_action( 'init', 'create_nieuws_taxonomies', 0 );
add_image_size( 'mycustomsize', 200, 400, true);
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
add_image_size( 'post-thumb', 590, 9999 ); // Unlimited Height Mode
add_image_size( 'singlepost-thumb', 500, 9999 );

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

function create_artiesten_taxonomies() {
  // Add new taxonomy, make it hierarchical (like categories)
  // Labels
  $labels = array(
    'name'              => _x( 'Podia', 'taxonomy general name' ),
    'singular_name'     => _x( 'Podium', 'taxonomy singular name' ),
    'search_items'      => __( 'Zoek podia' ),
    'all_items'         => __( 'Alle podia' ),
    'edit_item'         => __( 'Bewerk podium' ),
    'update_item'       => __( 'Update podium' ),
    'add_new_item'      => __( 'Voeg nieuw podium toe' ),
    'new_item_name'     => __( 'Nieuwe podium naam' ),
    'menu_name'         => __( 'Podia' ),
  );
  // Arguments
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'podia' ),
  );

  register_taxonomy( 'podia', array( 'nieuws' ), $args );
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
      'menu_icon' => 'dashicons-admin-site',
    	)
  );

// TICKETS CPT
  register_post_type( 'tickets',
    array(
      'labels' => array(
        'name' => __( 'Tickets' ),
        'singular_name' => __( 'Ticket' ),
        'add_new_item' => __( 'Een nieuwe ticket'),
        'add_new' => __('Een nieuwe ticket'),
        'new_item' => __('Nieuwe ticket'),
        'view_item' => __('Bekijk ticket'),
        'all_items' => __('Alle tickets'),
            ),
      'public' => true,
      'has_archive' => true,
      'menu-icon' => 'dashicons-images-alt',
      'supports' => array('title', 'author', 'excerpt', 'editor', 'thumbnail', 'revisions'),
      'rewrite' => array('slug' => 'tickets'),
    )
  );

// ARTIESTEN CPT
  register_post_type( 'artiesten',
    array(
      'labels' => array(
        'name' => __( 'Artiesten' ),
        'singular_name' => __( 'Artiest' ),
        'add_new_item' => __( 'Een nieuwe artiest'),
        'add_new' => __('Een nieuwe artiest'),
        'new_item' => __('Nieuwe artiest'),
        'view_item' => __('Bekijk artiest'),
        'all_items' => __('Alle artiesten'),

      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'supports' => array('title', 'author', 'excerpt', 'editor', 'thumbnail', 'revisions'),
      'rewrite' => array('slug' => 'artiesten'),
    )
  );
}

// Init the function
add_action( 'init', 'create_post_type' );


// TEST

// Dropdown Menu class


class CSS_Menu_Maker_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}

?>


