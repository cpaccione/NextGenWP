        <!-- FOOTER STARTS HERE -->
        <footer id="footer">
            <div class="footer-top"></div>
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row show-grid">
                        <!-- <div class="span12"> -->
                            <!-- <div class="row show-grid"> -->
                                <!-- FOOTER: LOGO -->
                                <div class="col-md-4">
                                	<?php dynamic_sidebar( 'footer-first' ); ?>
                                </div>
                                <!-- FOOTER: ABOUT US -->
                                <div class="col-md-4 footer-center">
	                                <?php dynamic_sidebar( 'footer-second' ); ?>
                                </div>
                                <!-- FOOTER: NAVIGATION LINKS -->
                                <div class="col-md-4 footer-right">
	                                <?php dynamic_sidebar( 'footer-third' ); ?>
                                </div>
                            <!-- </div> -->
                        <!-- </div>         -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row show-grid">
                        <!-- FOOTER: COPYRIGHT TEXT -->
                        <div class="col-12">
                            <p>All content Copyright <?php echo date('Y'); ?> NextGen LifeLabs</p>
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
