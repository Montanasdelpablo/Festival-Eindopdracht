<?php 

require 'header.php';
?>

<div id="maincontent">
	

	
		
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
  		
  		 <?php  echo "<div class='container'>";
			        
				        echo "<div id='singlepostthumbnail'  class='col-md-12'>";
					       
					       	   the_post_thumbnail('singlepost-thumb');
					        
				        echo "</div>";
				echo "</div>";
				    

				 echo "<div class='container'>";    
				        echo "<div id='singlenieuwsartikel' class='col-md-8'>";
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
		    	?>
		<?php endwhile; ?>
		<?php endif; ?> 


	

</div>

<?php 

require 'footer.php';

?>