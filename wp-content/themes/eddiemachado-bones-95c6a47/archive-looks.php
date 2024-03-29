<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
				
				    <div id="main" class="twelvecol first clearfix" role="main">
										
						<section class="entry-content">

							<header class="article-header">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/looks.png" alt="test" class="headline-image">	
						    </header> <!-- end article header -->

							<div id="slider2">
							    <a class="buttons prev" href="#">left</a>
							    <div class="viewport">
							        <ul class="overview">
						
								    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										            <li><?php echo get_the_post_thumbnail( $id, 'full' ); ?> </li>
								
								
								    <?php endwhile; ?>	
							        </ul>
							    </div>
							    <a class="buttons next" href="#">right</a>
							</div>

						</section>
					
					        <?php if (function_exists('bones_page_navi')) { ?>
					            <?php bones_page_navi(); ?>
					        <?php } else { ?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="entry-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("This is the error message in the custom posty type archive template.", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
                    
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>
