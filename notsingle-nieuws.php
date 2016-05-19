<?php 

require 'header.php';
?>

<div id="maincontent">
	

	<?php
		/*
		// Arguments for the query
		$args = array (
		    'post_type'              => array( 'nieuws' ),
		    'posts_per_page'         => '1',
		 );

		// the Query
		$query = new WP_Query( $args );

		// the Loop
		if ( $query->have_posts() ) {
		    while ( $query->have_posts() ) {
		        $query->the_post();
		        $y = get_permalink();
		        echo "<div class='container'>";
			        
				        echo "<div id='singlepostthumbnail'  class='col-md-12'>";
					       
					       	   the_post_thumbnail('');
					        
				        echo "</div>";
				        echo "</div>";
				    

				 echo "<div class='container'>";    
				        echo "<div id='singlenieuwsartikel' class=''>";
					        echo "<h1>";
						        	
						        the_title();
						        
					        echo "</h1>";
					        echo "<p>Geschreven door ";	
					        	the_author();
					        echo "</p>";
					        echo "<br>";
					        	the_excerpt();
					echo "</div>";
		    	echo "</div>";
		    }
		} else {
		    // no posts found
		}

			// Restore original Post Data
		*/	


	?>

</div>

<?php 

require 'footer.php';

?>