<?php global $smof_data; ?>


 <div class="blog-content-full-width"> <!-- Section -->             


      <div class="container"> <!-- Start container -->  
            <div class="row">        
                              

						
			<article><!-- Start article -->
				<?php
				if ( get_query_var('paged') ) {
					$paged = get_query_var('paged');
				} else if ( get_query_var('page') ) {
					$paged = get_query_var('page');
				} else {
					$paged = 1;
				}

				$args= array(
					'paged' 		=> $paged,
					'post_types' 	=> 'post',
					'posts_per_page' => '6', // Number posts per page
					'orderby' => 'date'
				);
				query_posts($args);
						
				if(have_posts()) :
					while ( have_posts() ) : the_post(); ?>
						<!-- Start article format -->  
                        <article id="post-<?php the_ID(); ?>" <?php post_class('eight columns blog-wrap'); ?>>
							<?php get_template_part( "post-format/content-frontpage" ); ?>
							
						</article><!-- End article format -->  
                   
                        	<?php endwhile; // End the loop.  ?>
				<?php endif; ?>
				<?php // wp_reset_query(); ?>
               
                </div><!-- End span8 -->
                
 			</article><!-- End article -->
                
            <div> <!-- Start article info -->      
 			  <center><h2 class="paragraf_blog"><?php echo $smof_data['thz_paragraf_blog']; ?></h2></center><br/>
 			  <center> <a href="<?php echo $smof_data['thz_link_blog']; ?>" class="button-blog-recent"><span><?php echo $smof_data['thz_name_blog']; ?></span></a></center>
              <br/><br/><br/>
             
            </div> <!-- End article info -->  
             
      </div><!-- End container -->  
		

</div><!-- End section -->

