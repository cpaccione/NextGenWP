<?php

/*

Template name: Products
*/

?>

  <?php get_header(); ?>

    <div class="page-title page-title-blue stacked-title">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <?php the_title('<h1>', '</h1>'); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT AREA -->
    <div class="main-wrapper">
      <div class="main-content">

            <div class="container">
                <div class="row show-grid">
                    <!-- <div class="span12"> -->
                        <!-- <div class="row show-grid"> -->
                            <div id="left-sidebar" class="col-md-3 sidebar left-box-height">
                                <div class="sidebar-baloon sidebar-grey-box">
                                    <?php the_field('left_sidebar'); ?>

                                    <?php
                                      $image = get_field('product_page_image');

                                      if( !empty($image) ): ?>

                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                                </div>
                            </div>

                            <div class="col-md-9 main-column two-columns-left">

                            <?php if( have_rows('accordion') ): ?>
                                <?php while( have_rows('accordion') ): the_row();

                                $name = get_sub_field('section_name');

                                ?>

                                  <?php if( get_sub_field( 'section_title') ): ?>
                                      <h2 class="faq-title"><?php the_sub_field('section_title'); ?></h2>
                                  <?php endif; ?>



                                            <?php if( have_rows('product') ): ?>
                                              <div class="accordion" id="accordionExample">

                                                <?php while( have_rows('product') ): the_row(); ?>

                                                    <!-- <div class="accordion"> -->
                                                      <div class="card">

                                                        <div class="card-header accordion-heading" id="<?php the_sub_field('accordion_name'); ?>">
                                                          <h5 class="mb-0">

                                                            <button class="products-button btn btn-link" type="button" data-toggle="collapse" data-target="#<?php the_sub_field('accordion_id'); ?>" aria-expanded="true" aria-controls="<?php the_sub_field('accordion_id'); ?>">
                                                              <?php the_sub_field('product_title'); ?>
                                                            </button>

                                                          </h5>
                                                        </div>

                                                        <div id="<?php the_sub_field('accordion_id'); ?>" class="collapse" aria-labelledby="<?php the_sub_field('accordion_name'); ?>" data-parent="#accordionExample">
                                                          <div class="card-body">
                                                            <?php the_sub_field('product_editor'); ?>
                                                          </div>
                                                        </div>

                                                      </div> <!-- card close -->
                                                    <!-- </div>  -->
                                                    <!-- accordion close -->

                                                <?php  endwhile; ?>
                                                </div>
                                            <?php endif; ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

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

<?php get_footer(); ?>
