	
	<!-- Hier begint de footer -->
	<footer class="footer">
		<div id="footercontent" class="container">
		<ul class="row"> 
			<ul class="col-md-4">
				<h2> Contact </h2>
				<!-- Hier moet de input vanuit een custom field komen voor het toevoegen van contact gegevens-->
				<li> Duinkerkenstraat 50 </li>
				<li> 9723 BT</li>
				<li> Groningen</li>
			</ul>
			
			<ul class="col-md-4">
			<div id="socialmedia">
				<h2> Social Media </h2>
				<!-- Hier moet de input vanuit een custom field komen voor het toevoegen van social media aan de footer -->
				<li><a href="#"></a> <img src="<?php echo bloginfo('template_url')?>/img/facebook.png">   </li>
				<li><a href="#"></a> <img src="<?php echo bloginfo('template_url')?>/img/twitter.png"></li>
				<li><a href="#"></a> <img src="<?php echo bloginfo('template_url')?>/img/instagram.png"> </li>
			</div>	
			</ul>
			

			<ul class="col-md-4">
			<!-- Hier moet de input vanuit een custom field komen voor het toevoegen van een Naam en Website van de maker/s -->
				<h2> Made by </h2>
				<li> </li>
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