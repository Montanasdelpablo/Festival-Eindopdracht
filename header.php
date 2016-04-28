
<html>
	<head>
		<title>Festival Website</title>
		<?php wp_head(); ?>


		
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/style.css">

	</head>
	
	<body>


	<div  id="navbar" class="container">
		<div class="col-md-12">
		<?php
		showNav();
		?>
		</div>

	</div>