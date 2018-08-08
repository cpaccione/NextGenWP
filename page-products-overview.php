<?php

/*

Template name: Product Overview
*/

?>

<?php get_header(); ?>

        <!-- MAIN CONTENT AREA -->
        <div class="main-wrapper">
        <div class="main-content">

            <div class="container">
                <div class="row show-grid">
                    <!-- <div class="span12"> -->
                        <!-- <div class="row show-grid"> -->
                            <div id="left-sidebar" class="col-md-3 sidebar">
                                <div class="sidebar-baloon sidebar-grey-box">
                                    <?php the_field('left_sidebar'); ?>

                                    <?php
                                      $image = get_field('product_overview_image');

                                      if( !empty($image) ): ?>

                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-9 main-column two-columns-left">

	                            <br><?php the_title('<h2 class="faq-title">', '</h2>'); ?>
	                            <div id="accordion1" class="accordion">
		                            <ul><br>
			                            <?php if( have_rows('overview_links') ): ?>
                                            <?php while( have_rows('overview_links') ): the_row();

                                            //vars

                                            $pagelink = get_sub_field('link');
                                            $pagetitle = get_sub_field('title');


                                            ?>


			                                 <li><a href="<?php echo $pagelink; ?>"><?php echo $pagetitle; ?></a></li>

                                            <?php endwhile; ?>
                                        <?php endif; ?>

		                            </ul>

	                            </div>


                            </div> <!-- end span9 -->

                    <!-- </div> -->
                <!-- </div> -->
            </div>
            </div>

            <!-- <div class="recent-tweets">
                <div class="container">
                    <div class="row show-grid">
                    </div>
                </div>
            </div> -->
        </div>
      </div>

        <!-- <div class="about-us-spacer-100"></div> -->

<?php get_footer(); ?>
