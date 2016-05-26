<?php 

require 'header.php';
?>

<div id="maincontent">
	

	
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
  		
  		 <?php  echo "<div class='container' id='single_cpt_nieuws'>";
			        
				        echo "<div id='singlepostthumbnail'  class='col-md-12'>";
					       
					       	   the_post_thumbnail("singlepost-thumb", array('class' => 'img-responsive'));
					        
				        echo "</div>";
				echo "</div>";
				
				
				

				 echo "<div class='container' id='artikel_main_content'>";    
				        echo "<div id='sidebarnieuwsartikel' class='col-md-4'>";
				        	echo "<input type='button'  value='Terug naar overzicht'> </iput>";
				        	
					        	echo "<ol> <h2> Gegevens </h2> ";
					        	echo "<li> Gepubliceerd:  <br> </li>"; 
					        	echo the_date();
					        	wp_list_categories(array('taxonomy' => 'genre'));
					        	echo "<li> Laatste update: <br> </li>";
					        	echo get_the_modified_date();
					        	echo "</ol> <br> <br>"; 

					        	echo "<p>";
					        	echo the_excerpt();
					        	echo "</p>";

					        	$socialmedia = get_field("social_media_icons");
					       	if ($socialmedia == 1) {
					       		echo "<div id='socialmediabar'>";

					       		$user_id = 1;
					       		$twitter = get_user_meta( $user_id, 'twitter', true );
					       		$facebook = get_user_meta( $user_id, 'facebook', true);
					       		$instagram = get_user_meta ( $user_id, 'facebook', true);
								 // Hier moet de input vanuit een custom field komen voor het toevoegen van social media aan de footer -->
								echo "<li><a target='_blank' href='$facebook'> <img src='";
								echo bloginfo('template_url');
								echo "/img/facebook.png'>    </a></li>";
								echo "<li><a target='_blank' href='$twitter'> <img src='";
								echo bloginfo('template_url');
								echo "/img/twitter.png'> </a></li>"; 
								echo "<li><a target='_blank' href='$instagram'> <img src='";
								echo bloginfo('template_url');
								echo "/img/instagram.png'> </a></li>";
					       		echo "</div>";
					       	}


				        echo "</div>";
				        echo "<div id='singlenieuwsartikel' class='col-md-8'>";
					        echo "<h1 class='posttitle'>";
						        	
						        the_title();
						        
					        echo "</h1>";
					        echo "<p class='author'>Geschreven door ";	
					        	the_author();
					        echo "</p>";
					        echo "<br>";
					        echo "<div class='artikelcontent'";
					        	the_content();
					       	echo "</div>";
					       	
						echo "</div>";
		    	echo "</div>";
		    	?>
		<?php endwhile; ?>
		<?php endif; ?> 

</div>

<?php 

require 'footer.php';

?>