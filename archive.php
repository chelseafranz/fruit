<?php get_header(); ?> 

<?php  get_template_part('menu_section');  ?>


    <div class="section-page post-single"><!-- Section -->


        <div class="container">

            <!--  Begin section title -->
            <div class="header">
                <h1 class="header-text">
			
            </h1>			
            </div>
            <!-- End section title -->
	
    	<div class="container">	
           <div class="row">	
			<div class="sixteen columns">            
	            <!-- Start title -->	            
				
				  <h2 class="header-text">
					  <?php if (is_category()) { ?>
                    <?php _e('Category Archive for:', 'thezoc') ?> <?php single_cat_title(); ?>
    
                      <?php } elseif( is_tag() ) { ?>
                          <?php _e('Posts Tagged:', 'thezoc') ?><?php single_tag_title(); ?>
          
                      <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                          <?php _e('Blog Archives:', 'thezoc') ?>
                      <?php } ?>
                  </h2>
  	                           
			</div><!-- End sixteen columns -->  
           </div><!-- End row -->         
          </div><!-- End container -->    

        </div>   


      <div class="container">   
            <div class="row">        
                <div class="eleven columns">                


                   <?php if (have_posts()) : while (have_posts()) : the_post();  

                        get_template_part( 'post-format/content', get_post_format() ); 

                    endwhile; 

                     get_template_part( 'post-format/pagination' ); 

                     else : ?>

                    <h2><?php _e('No Posts Found', 'thezoc') ?></h2>

                    <?php

                    endif; 

                    wp_reset_query();


                    ?>

                </div><!-- End span8 -->
                <?php get_sidebar('blog'); ?>
             </div>   
      </div>		

    </div><!-- End section -->





<?php get_footer(); ?>