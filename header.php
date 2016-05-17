<!DOCTYPE html>
<html>
	<head>
		<title>Festival Website</title>
		<!-- Main wordpress functions -->
		<?php wp_head(); ?>


		<!-- Link stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/style.css">

	</head>
	
	<body>


	<div id="navbar" class="navbar navbar-default">
		<div id="mainnavigation" class="col-md-12">
			<div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
	      			</button>
	     	<a class="navbar-brand" href="#">Buiten Westen</a>
	    	</div>
		
		<!-- Shows navigation -->
		<?php
		showNav();
		?>
		</div>

	</div>