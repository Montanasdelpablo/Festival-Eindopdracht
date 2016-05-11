<?php 

// Grabs the header
require 'header.php';

?>


<!-- Main content-->

<div id="maincontent">
	
	
	<div id="nieuwsartikelfeed">	
	<?php 
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
		        echo "<div class='container'>";
		        echo "<div id='thumbnail' class='col-md-6'>";
		       	   the_post_thumbnail( 'mycustomsize');
		        echo "</div>";

		        echo "<div id='nieuwsartikel' class='col-md-6'>";
		        echo "<h1>";	
		        the_title();
		        echo "</h1>";
		        echo "<p>Geschreven door ";	
		        the_author();
		        echo "</p>";
		        echo "<br>";
		        the_excerpt();
		        echo "<hr>";
		    	echo "</div>";
		    	echo "</div>";
		    }
		} else {
		    // no posts found
		}

			// Restore original Post Data
			

			?>
		</div>

</div>

<?php 

// Grabs the footer
require 'footer.php';

?>


