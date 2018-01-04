<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
	  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
	  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
	<style>

	.navbar-default .navbar-nav>.current-menu-item>a, .navbar-default .navbar-nav>.current-menu-item>a:focus,
	.navbar-default .navbar-nav>.current-menu-item>a:hover{
		color: #515251;
		background-color: transparent;
		border-bottom: 5px solid #1abcd5;
	}
	</style>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<div class="navbar navbar-default iia-header">
			
			<div class="container navbar_container">
				<div class="hidden-sm hidden-xs top-image pull-right">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-right-logo.png" class="pull-right">
				</div>
				<div class="hidden-lg hidden-md text-center top-image_sm">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-right-logo.png">
				</div>
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="<?php echo home_url().'/';?>"><img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" class="img-responsive"></a>
				</div>

				<?php 
					$defaults = array(
						'theme_location'  =>'primary' ,
						'menu'            => '',
						'container'       => '',					
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => 'menu-header-menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '%3$s',//
						'depth'           => 0,
						'walker'          =>''
					);
				?>
				 
				

				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">						
						<?php wp_nav_menu( $defaults ); ?>
						<!-- li class='<?php echo ($filename == "index.php") ? "active" : "" ?>'><a href="index.php">WHAT IS ASTHMA?</a></li>
						<li class='<?php echo ($filename == "symptoms.php") ? "active" : "" ?>'><a href="symptoms.php">ASTHMA SYMPTOMS & DIAGNOSIS</a></li>
						<li class='<?php echo ($filename == "misdiagnosing.php") ? "active" : "" ?>'><a href="misdiagnosing.php">MISDIAGNOSING ASTHMA</a></li> -->
					</ul>
				</div>
			</div>
		</div>
			
		<div id="content" class="site-content">
