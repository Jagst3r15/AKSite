<?php
/*
Template Name: Full Width
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

						    <?php endwhile; // end of the loop. ?>
						
						    <footer class="article-footer">
							    <p class="clearfix"><?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>
							
						    </footer> <!-- end article footer -->
						    					
					    </article> <!-- end article -->
								
				    </div> <!-- end #main -->
    				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
