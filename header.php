<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!--font-->
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
		<!-- bootstrap-->
		<!-- Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
		
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		<!-- Latest compiled and minified JavaScript -->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
		<!-- end of bootstrap-->
		
		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
	
				<div id="inner-header" class="wrap">
					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<div class="header__top">
						
						
						<div class="row">
							<!--for mobile-->
							<div class="col-xs-12 col-md-12 visible-xs-inline visible-sm-inline text-center">
								<div class="header__hotline">
									<span class="purple-bg">hotline</span><a class="purple-border" href="tel:18779908595">1877-990-8595</a>
								</div>
							</div>
							<div class="col-xs-7 col-md-5">
								<a href="<?php echo home_url(); ?>" ><img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo.svg"></a>
							</div>
							<div class="col-xs-5 col-md-6 text-right visible-xs-inline visible-sm-inline">
								<div class="header__language">	
									<?php
										icl_post_languages();
									?>
								</div>
								<a href="#"  class="clearfix">
									<div class="header__menu-icon js-nav-toggle">menu</div>
								</a>
							</div>
							<!--end for mobile-->
							
							<!--for desktop-->
							<div class="col-md-7 text-right hidden-xs hidden-sm">
								<div class="header__right-top">
									<a href="#"><img class="icon-fb" src="<?php echo get_template_directory_uri(); ?>/library/images/FB@2x.png"></a>
									<span class="header__right-top__language">
										<!-- <a href="#">EN</a> / 
										<a href="#">中文</a> -->
										<?php
											icl_post_languages();
										?>
									</span>
									
								</div>
								<div class="header__right-bottom hidden-xs hidden-sm">
									<div class="header__hotline">
										<span class="purple-bg">hotline</span><a class="purple-border" href="tel:18779908595">1877-990-8595</a>
									</div>	
									<a href="http://www.nycharities.org/donate/charitydonate.asp?ID=2111" class="donate" target="_blank">
										<img class="donate__icon" src="<?php echo get_template_directory_uri(); ?>/library/images/donate_anime.gif">
									</a>
								</div>
								<!--end for desktop-->
							</div>
						</div>
					</div>
					

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="js-nav">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>

			</header>
