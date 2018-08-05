<?php

/*

Template name: Contact

*/


?>


<?php get_header(); ?>

	<!-- MAIN CONTENT AREA -->
	<div class="main-wrapper">
	<div class="main-content">
		<div class="container">
			<div class="row show-grid">
				<!-- BEGIN LEFT-SIDEBAR -->
				<div class="col-md-3 sidebar" id="left-sidebar">
					<!-- LEFT-SIDEBAR: SIDEBAR NAVIGATION -->
					<div class="side-nav sidebar-block left-side-nav">
						<div class="widget-wrap">
							<?php dynamic_sidebar( 'about' ); ?>
						</div>
					</div>
				</div>
				<!-- END LEFT-SIDEBAR -->

				<!-- BEGIN MAIN/PRIMARY CONTENT AREA -->
				<div class="col-md-9 main-column two-columns-left">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_title('<h2 style="font-size: 28px;">', '</h2>'); ?>

							<?php the_content(); ?>

						<?php endwhile; else: ?>

							<h1>Oh no!</h1>
							<p>No content is appearing on this page!</p>

						<?php endif; ?>

					</div>
				</div>
			</div>

		<!-- END MAIN/PRIMARY CONTENT AREA -->

		</div>
	</div>

<?php get_footer(); ?>
