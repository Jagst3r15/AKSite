<?php
/*
Template Name: Content and Featured Image
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

					    <?php while ( have_posts() ) : the_post(); ?>
						
						    <section class="entry-content">
						    <header class="article-header">
							    <?php if(get_post_meta($post->ID, 'headline_gfk')) { ?>
							    	<img src="<?php  echo get_post_meta($post->ID, 'headline_gfk', true); ?>" class="headline-image" />
							    <?php } else { ?>
							     <h1 class="page-title"><?php the_title(); ?></h1>
								<?php } ?>
						    </header> <!-- end article header -->
							    <?php the_content(); ?>
						    </section> <!-- end article section -->

						    <?php echo get_the_post_thumbnail( $id, 'full' ); ?> 

						    <?php endwhile; // end of the loop. ?>
						
						    <footer class="article-footer">
							    <p class="clearfix"><?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>
							
						    </footer> <!-- end article footer -->
						    					
					    </article> <!-- end article -->

					    		<?php 
						    		if(is_page('18')) {
						    	?>

									    <div id="entertowin">
										    <?php echo do_shortcode( '[contact-form-7 id="85"]' ); ?>
										    
										    <div id="entertowin-right">
										    	<p class="largetext"><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook-large.png">Like Us on Facebook</p>
										    	<p class="largetext"><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter-large.png">Follow Us on Twitter</p>
										    	<p class="largetext"><img src="<?php echo get_template_directory_uri(); ?>/library/images/instagram-large.png">Tag Us on Instagram</p>
										    	<p>minimum of one selection required</p>
										    </div>

									    </div>
								<?php
							    	}
						    	?>
								
				    </div> <!-- end #main -->
    				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
