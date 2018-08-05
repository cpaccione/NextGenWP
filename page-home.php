<?php

/*

Template Name: Home

*/


?>

<?php

$counter = 0;

?>

<?php get_header(); ?>



      <section class="slider-section">
        <?php if( have_rows('slider') ): ?>
          <div class="container">
                  <div class="home-slider">


            <?php while( have_rows('slider') ): the_row();

            //vars
            $background = get_sub_field('background_image');
            $product = get_sub_field('product_image');
            $fieldOne = get_sub_field('title_field_one');
            $fieldTwo = get_sub_field('title_field_two');
            $summary = get_sub_field('product_summary');

            ?>

        <div class="home-slider-wrapper">

          <div class="row d-flex align-items-center">
            <div class="col-md-6">
              <img class="mx-auto d-block" src="<?php echo $product['url']; ?>" alt="<?php echo $product['alt']; ?>">
            </div>
            <div class="col-md-6">
              <div class="copy-wrap">
                <p class="large"><?php echo $fieldOne; ?></p>
                <p class="large"><?php echo $fieldTwo; ?></p>
                <p class="medium"><?php echo $summary; ?></p><br>

                <?php if( have_rows('bulleted_list') ): ?>
                  <ul class="fa-ul">
                    <?php while( have_rows('bulleted_list') ): the_row(); ?>
                      <li><i class="fa-li fa fa-arrow-circle-o-right"></i><?php the_sub_field('list_item'); ?></li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>

              <?php endwhile; ?>
            </div>
      </div>
    <?php endif; ?>

      </section>

            <!-- MAIN CONTENT AREA -->
    		<div class="main-wrapper">
        		<div class="main-content">
            		<div class="container">


                <div class="row show-grid features-block mini-blocks">
                  <div class="col-md-9">


                    <!-- <div class="span4 block1">
                        <div class="mini-wrapper"> -->

                        <h2><?php the_field('news_title'); ?></h2>

                            <!-- <ul class="soft-updates"> -->
                              <!-- <div class="row"> -->

                                <?php if( have_rows('news') ): ?>
                                  <div class="row">


                                    <?php while( have_rows('news') ): the_row();

                                    //vars
                                    $month = get_sub_field('month');
                                    $day = get_sub_field('day');
                                    $image = get_sub_field('news_image');
                                    $editor = get_sub_field('editor');


                                    ?>

                                    <!-- <li> -->
                                    <!-- <div class="span4"> -->

                                        <!-- <div class="date-img">
                                            <span class="top-date"><?php echo $month; ?></span>
                                            <span class="bottom-date"><?php echo $day; ?></span>
                                        </div> -->
                                      <div class="col-md-6">
                                        <div class="row">
                                          <div class="col-md-5">
                                            <img class="news-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                          </div>
                                          <div class="col-md-7">
                                            <div class="editor">
                                              <?php echo $editor; ?>
                                            </div>
                                          </div>
                                        </div>
                                      </div>


                                    <!-- </li> -->
                                    <!-- </div> -->


                                    <?php endwhile; ?>

                                    </div>
                                <?php endif; ?>
                              <!-- </div> -->
                            <!-- </ul> -->
                </div>
                        <!-- </div>
                    </div> -->

                    <!-- <div class="span4 block2"> -->
                        <!-- <div class="mini-wrapper"> -->
                            <!-- <h2> -->
                              <?php //the_field('press_release_title'); ?>
                            <!-- </h2> -->
                            <!-- <ul> -->
                                <!-- <li> -->
                                  <?php //the_field('press_release_editor'); ?>
                                <!-- </li> -->
                            <!-- </ul>
                        </div>
                    </div> -->

                    <!-- <div class="span4 block3"> -->
                        <!-- <div class="mini-wrapper"> -->
                        <div class="col-md-3">


                        <h2><?php the_field('brand_title'); ?></h2>
                        <!-- <ul class="mini-clients"> -->
                            <?php if ( have_rows('brands') ): ?>

                                <?php while ( have_rows('brands') ): the_row();

	                                $link = get_sub_field('link');
	                                $brandImage = get_sub_field('brand_image');

                                ?>
                                <div class="row">
                                  <div class="col-12">
                                    <div class="home-logo">
                                      <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $brandImage['url']; ?>" alt="<?php echo $brandImage['alt']; ?>"></a>
                                    </div>
                                  </div>
                                </div>
                                    <!-- <li> -->

                                    <!-- </li> -->

                                <?php endwhile; ?>
                            <?php endif; ?>

                        <!-- </ul> -->
                        <!-- </div> -->
                    <!-- </div> -->
                  </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
