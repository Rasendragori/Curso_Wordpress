<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
	<head>
		<title>Halcyonic by HTML5 UP</title>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php bloginfo('stylesheet_directory'); ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>"/><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">
						<div class="row">
							<div class="12u">

								<!-- Logo -->
									<h1><a href="<?php home_url(); ?>" id="logo"><?php bloginfo('name'); ?></a></h1>

								<!-- Nav -->
									<!--<nav id="nav">
										<a href="<?php home_url(); ?>">Homepage</a>
										<a href="threecolumn.html">Three Column</a>
										<a href="twocolumn1.html">Two Column #1</a>
										<a href="twocolumn2.html">Two Column #2</a>
										<a href="onecolumn.html">One Column</a>
									</nav>-->

                  					<?php    /**
                  						* Displays a navigation menu
                  						* @param array $args Arguments
                  						*/
                  						$args = array(
                  							'theme_location' => 'princi',
                  							'container' => 'nav',
                  							'container_id' => 'nav'
                  						);

                  						wp_nav_menu( $args ); ?>

							</div>
						</div>
					</header>
					<div id="banner">
						<div class="container">
							<div class="row">
								<div class="6u 12u(mobile)">

									<!-- Banner Copy -->
										<p>We do something really useful, important, and unique. Learn all about it here ...</p>
										<a href="#" class="button-big">Go on, click me!</a>

								</div>
								<div class="6u 12u(mobile)">

									<!-- Banner Image -->
										<a href="#" class="bordered-feature-image"><img src="<?php bloginfo('template_directory'); ?>/images/banner.jpg" alt="" /></a>

								</div>
							</div>
						</div>
					</div>
				</div>
