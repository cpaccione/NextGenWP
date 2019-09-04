<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php bloginfo('title'); ?> <?php wp_title();?></title>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

	      <!-- THE LINE AT THE VERY TOP OF THE PAGE -->
        <div class="top_line"></div>
        <!-- HEADER AREA -->
        <header>
            <div class="container">
                <div class="row">
                    <!-- HEADER: LOGO AREA -->
                    <div class="col-md-4 logo">
                        <a class="logo" href="<?php bloginfo('url') ;?>">
                            <img alt="logo" title="ReDesign" src="<?php bloginfo('template_directory'); ?>/images/nextgen_logo.png">
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- PRIMARY SITE NAVIGATION -->
        <div class="navbar-wrapper">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">

                        <div class="buttons-container"></div>

                            <?php wp_nav_menu( array(
                                    'menu' => 'primary',
                                    'theme_location' => 'primary',
                                    'depth' => 2,
                                    'container' => 'ul',
                                    'menu_class' => 'blue nav',
                                    'menu_id' => 'css3-menu',
                                    'walker' => new wp_bootstrap_navwalker()
                                    )
                                );
                             ?>

                    </div>
                    <div class="social-media">
                        <ul>
                            <li><a href="https://www.facebook.com/nextgenlifelabs" target="_blank"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/nextgen-lifelabs-llc" target="_blank"><i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
