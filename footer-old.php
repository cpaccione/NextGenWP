<!-- FOOTER STARTS HERE -->
<footer id="footer">
	<div class="footer-top"></div>
	<div class="footer-wrapper">
		<div class="container">
			<div class="row show-grid">
				<div class="span12">
					<div class="row show-grid">

						<!-- FOOTER: LOGO -->
						<div class="span4">
							<img class="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/nextgen_logo.png" alt="NextGen Lifelabs">
							<!-- FOOTER: ADDRESS -->
							<address class="address">

							</address>
						</div>

						<!-- FOOTER: ABOUT US -->
						<div class="span4 footer-center">
							<h4 class="center-title">Contact</h4>
							<p> NextGen Life Labs<br>
								384 Nina Way<br>
								Warminster, PA 18974<br>
								Office: <a href="tel:215-672-4838">215-672-4838</a><br>
								Fax: <a href="tel:215-672-4904">215-672-4904</a>
							</p>
						</div>

						<!-- FOOTER: NAVIGATION LINKS -->
						<div class="span4 footer-right">
							<h4 class="center-title">Navigate</h4>
							<ul class="footer-navigate">
								<li>
									<a href="<?php bloginfo('url') ;?>">Home</a>
								</li>

								<li>
									<a href="about_us.html">About Us</a>
								</li>
								<li>
									<a href="product.html">Products</a>
								</li>
								<li>
									<a href="services.html">Services</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row show-grid">
				<!-- FOOTER: COPYRIGHT TEXT -->
				<div class="span12">
					<p>All content Copyright 2016 NextGen LifeLabs</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

		<script>
			jQuery(function($) {
			    if($(window).width()>769){
			        $('.navbar .dropdown').hover(function() {
			            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

			        }, function() {
			            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

			        });

			        $('.navbar .dropdown > a').click(function(){
			            location.href = this.href;
			        });

			    }
			});
		</script>
		<?php wp_footer(); ?>
	</body>
</html>
