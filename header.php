<!DOCTYPE html>
<html>
	
	<!-- Hier begint de header -->
	<head>
		<title>Festival Website</title>
		<!-- Main wordpress functions -->
		<?php wp_head(); ?>

		


		<!-- Link stylesheets -->
		<!-- Bootstrap-->
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/css/bootstrap.min.css">
		<!-- Dropdown menu -->
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/css/styles.css">
		<!-- Main stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url')?>/style.css">


	</head>
	
	<body>


	<!-- Oude navigatiebar --> 
	<!--
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
	  -->
		

		<!-- Shows navigation -->
		<div id="mainnavigation">
		<?php
		
				wp_nav_menu(
					array(
						'menu'            => 'Main Navigation',
						'container'       => 'div',
						'container_class' => 'menu-{menu slug}-container',
						'container_id'    => 'cssmenu',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul>%3$s</ul>',
						'walker'          => new CSS_Menu_Maker_Walker()
						)
					);
			
		?>
		</div>

	</div>