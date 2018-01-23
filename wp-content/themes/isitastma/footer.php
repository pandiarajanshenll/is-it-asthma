	<!-- footer start -->
	<div class="container-fluid footer-fluid">
		<div class="footer-shadow">
			<img src="<?php echo THEME_URL.'/assets/images/shadow.png';?>">
		</div>
		<div class="container  footer-container">
			<div class="col-md-10 col-sm-8 col-xs-12">
			<?php if(is_front_page()) {
				echo '<h3 class="footer-head">Reference</h3>
					  <p class="footer-content">1. Shawn D. Aaron, Katherine L. Vandemheen, J. Mark FitzGerald, Martha Ainslie, Samir Gupta, Catherine Lemière, Stephen K. Field, R. Andrew McIvor, Paul Hernandez, Irvin Mayers, Sunita Mulpuru, Gonzalo G. Alvarez, Smita Pakhale, Ranjeeta Mallick, Louis-Philippe Boulet. Revaluation of Diagnosis in Adults With Physician-Diagnosed Asthma. JAMA. 2017;317(3):269–279. doi:10.1001/jama.2016.19627.</p>';
			} ?>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-12 social-menu">
				<div class="col-md-5 col-sm-4 col-xs-6 twitter-icon footer-icon">
					<a href="https://twitter.com/aafanational?lang=en" target="_blank"><img src="<?php echo THEME_URL.'/assets/images/twitter.png';?>"></a>
				</div>
				<div class="col-md-5 col-sm-4 col-xs-6 footer-icon fb-icon">
					<a href="https://www.facebook.com/AAFANational/the" target="_blank"><img src="<?php echo THEME_URL.'/assets/images/fb.png';?>"></a>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>
<?php wp_footer(); ?>