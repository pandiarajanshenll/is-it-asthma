<?php
$twitterlink = get_option('twitter_link');
$facebook_link = get_option('facebook_link');
$twitterlink = ($twitterlink!='')?$twitterlink:'#';
$facebook_link = ($facebook_link!='')?$facebook_link:'#';
?>
		</div><!-- .site-content -->

		<div class="container footer_container">
			<div class="padd_none">
				<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
					<h3 class="footer_head">Reference</h3>
					<p class="footer_content">1. Shawn D. Aaron, Katherine L. Vandemheen, J. Mark FitzGerald, Martha Ainslie, Samir Gupta, Catherine Lemière, Stephen K. Field, R. Andrew McIvor, Paul Hernandez, Irvin Mayers, Sunita Mulpuru, Gonzalo G. Alvarez, Smita Pakhale, Ranjeeta Mallick, Louis-Philippe Boulet. Reevaluation of Diagnosis in Adults With Physician-Diagnosed Asthma. JAMA. 2017;317(3):269–279. doi:10.1001/jama.2016.19627.</p>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs footer_icon">
						<a href="<?php echo $twitterlink;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png" class="img-responsive"></a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs footer_icon">
						<a href="<?php echo $facebook_link;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb.png" class="img-responsive"></a>
					</div>
					<div class="hidden-lg hidden-md hidden-sm col-xs-12 footer_icon text-center">
						<div class="col-xs-6 text-right">
							<a href="<?php echo $twitterlink;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png"></a>
						</div>
						<div class="col-xs-6 text-left">
							<a href="<?php echo $facebook_link;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- .site-inner -->
</div><!-- .site -->
<script type="text/javascript">
	(function($) {
		$(window).on( "load", function() {
	        function firstPageLoads() {
	        	var link = '<?php echo get_stylesheet_directory_uri(); ?>';
	        	var full_link = link+'/assets/images/logo.gif';
				$("#logo").attr("src",full_link);
			}
			if(localStorage.getItem('page') === null) {
				firstPageLoads();
				localStorage.setItem('page','first_time_loads_already');
			} else {
				var link = '<?php echo get_stylesheet_directory_uri(); ?>';
				var full_link = link+'/assets/images/logo.png';
				$("#logo").attr("src",full_link);
			}
	    });
    })(jQuery);
</script>

<?php wp_footer(); ?>
</body>
</html>
