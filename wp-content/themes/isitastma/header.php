<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<!-- header start -->
	<div class="container-fluid asthma-fluid">
		<div class="container asthma-container">
			<div class="aafa-logo hidden-xs">
				<a href="http://www.aafa.org"><img src="<?php echo THEME_URL.'/assets/images/top-right-logo.png'; ?>"></a>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#asthma-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo get_site_url();?>"><img id="logo" src="<?php echo THEME_URL.'/assets/images/logo.png'; ?>" class="img-responsive"></a>
				<div class="mobile-aafa-logo hidden-md hidden-sm">
					<a href="http://www.aafa.org"><img src="<?php echo THEME_URL.'/assets/images/top-right-logo.png'; ?>"></a>
				</div>
			</div>
			<?php
				wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'container'         => 'div',
						'container_id'      => 'asthma-menu',
						'container_class'   => 'collapse navbar-collapse asthma-navbar',
						'menu_class'        => 'nav navbar-nav nav nav-pills navbar-right',

					)
				);
			?>
		</div>
	</div>
	<!-- header end -->