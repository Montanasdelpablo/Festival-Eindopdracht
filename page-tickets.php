<?php 

// Grabs the header
require 'header.php';

?>


<!-- Main content-->

<div id="maincontent" class="container">
	
	
	<div id="nieuwsartikelfeed" class="col-md-8">	
	
	<?php 
	/*
		// Arguments for the query
		$args = array (
		    'post_type'              => array( 'nieuws' ),
		    'posts_per_page'         => '3',
		 );

		// the Query
		$query = new WP_Query( $args );

		// the Loop
		if ( $query->have_posts() ) {
		    while ( $query->have_posts() ) {
		        $query->the_post();
		        echo "<div id='nieuwsartikel' class='col-md-6'>";
		        echo "<h1>";	
		        the_title();
		        echo "</h1>";
		        the_content();
		    	echo "</div>";
		    }
		} else {
		    // no posts found
		}

			// Restore original Post Data
			wp_reset_postdata();
		*/
			?> 
		
		</div>

</div>

<?php 

// Grabs the footer
require 'footer.php';

?>


