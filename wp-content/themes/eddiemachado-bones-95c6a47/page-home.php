<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">

					    <div id="slider-area">

					    	<?php if (function_exists("easing_slider")){ easing_slider(); }; ?>

					    	<a class="button" href="http://localhost/wordpress/?page_id=18">post your pic to win a trip to NYC!!</a>

					    </div>

					    <div id="ask">

					    	<img class="fourcol" src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/askaliandkris.png">

					    	<p class="fourcol">
					    	<h7>HEY GIRLS!</h7>
							Want to know how to mix & match our styles? Need some fashion tips?
							<br>
							<br>
							<span class="strong">Send us any question and we will post it to our blog with answers!</span>
							</p>

							<?php echo do_shortcode( '[contact-form-7 id="1234" class="fourcol" title="Contact form 1"]' ); ?>

					    </div>

					    <div id="whatshot">

					    	<p class="fourcol">
						    	<img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/whatshot.png">

						    	Check out some of the hottest looks from our latest collection. Mix and match to make your Reality Runway come to life!
							</p>
							<span class="sevencol right">
					    		<img src="http://localhost/wordpress/wp-content/themes/eddiemachado-bones-95c6a47/library/images/girls.png">
							</span>

					    </div>
			
				    </div> <!-- end #main -->
    				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
