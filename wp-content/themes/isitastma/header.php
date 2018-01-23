<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KFDWTCD');</script>
	<!-- End Google Tag Manager -->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFDWTCD"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
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
	<div class="container-fluid shade-fluid">
	</div>
	<!-- header end -->