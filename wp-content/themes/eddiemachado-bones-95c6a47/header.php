<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
			<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
			<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
			<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

		<script type="text/javascript">         
		    jQuery( function( $ ){             
		                
		          $(document).ready(function(){
			        $('#slider2').tinycarousel({display: 3});			        
			    });
		        
		    });
		</script> 
               

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<div id="header-content">

						<ul class="social_icons">
										<li><a href="#" target="_blank"><img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/facebook.png" alt="Facebook Icon"></a></li>
										<li><a href="#" target="_blank"><img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/twitter.png" alt="Twitter Icon"></a></li>
										<li><a href="#" target="_blank"><img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/pinterest.png" alt="Pinterest Icon"></a></li>
										<li><a href="#" target="_blank"><img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/instagram.png" alt="Instagram Icon"></a></li>
										<li><a href="#" target="_blank"><img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/youtube.png" alt="Youtube Icon"></a></li>
										<li><a href="#" target="_blank"><img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/tumblr.png" alt="Tumblr Icon"></a></li>
										<li><a href="#" target="_blank"><img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/realityrunway.png" alt="Reality Runway"></a></li>

						</ul>

						<?php get_sidebar( 'sidebar3' ); ?>

					</div>

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/logo.png"></a></p>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>


					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
