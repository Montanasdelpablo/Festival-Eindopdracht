	
	<!-- Hier begint de footer -->
	<footer class="footer">
		<div id="footercontent" class="container">
		<ul class="row"> 
			<ul class="col-md-4">
				<h2> Contact </h2>
				<!-- Hier moet de input vanuit een custom field komen voor het toevoegen van contact gegevens-->
				

				<?php 
								$user_id = 1;
					       		$adres = get_user_meta( $user_id, 'adres', true );
					       		$postcode = get_user_meta( $user_id, 'postcode', true);
					       		$plaatsnaam = get_user_meta ( $user_id, 'plaatsnaam', true);
				
								echo "<li> $adres </li>";
								echo "<li> $postcode</li>"; 
								echo "<li> $plaatsnaam </li>";

				?>

			</ul>
			
			<ul class="col-md-4">
			<div id="socialmedia">
				<h2> Social Media </h2>
				<!-- Hier moet de input vanuit een custom field komen voor het toevoegen van social media aan de footer -->
				<?php 			
								$user_id = 1;
					       		$twitter = get_user_meta( $user_id, 'twitter', true );
					       		$facebook = get_user_meta( $user_id, 'facebook', true);
					       		$instagram = get_user_meta ( $user_id, 'instagram', true);
				
								echo "<li><a target='_blank' href='$facebook'> <img src='";
								echo bloginfo('template_url');
								echo "/img/facebook.png'>    </a></li>";
								echo "<li><a target='_blank' href='$twitter'> <img src='";
								echo bloginfo('template_url');
								echo "/img/twitter.png'> </a></li>"; 
								echo "<li><a target='_blank' href='$instagram'> <img src='";
								echo bloginfo('template_url');
								echo "/img/instagram.png'> </a></li>";
					       		
				?>
			</div>	
			</ul>
			

			<ul class="col-md-4">
			<!-- Hier moet de input vanuit een custom field komen voor het toevoegen van een Naam en Website van de maker/s -->
				<h2> Made by </h2>
				<li> Young D's </li>
				<li> Website:</li>
				<li> <a href="#"> </a> </li>
			</ul>
		</ul>
		</div>

		<script type="text/javascript" src="<?php echo bloginfo('template_url')?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo bloginfo('template_url')?>/js/jquery-1.12.3.min.js"></script>

		<?php wp_footer(); ?>
	</footer>



</body>
</html>