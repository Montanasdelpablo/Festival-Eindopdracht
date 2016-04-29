
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


	<div id="navbar" class="container">
		<div class="col-md-12">
		
		<!-- Shows navigation -->
		<?php
		showNav();
		?>
		</div>

	</div>