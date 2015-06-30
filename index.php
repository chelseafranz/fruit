<?php get_header(); ?> 

<?php  get_template_part('menu_section');   ?>

  <div class="section-page post-single"><!-- Section -->
       <?php   
       
       if (!is_front_page()) {
           
           $current_blog_page_id = get_option('page_for_posts'); 
      ?> 
        
      <?php  } ?>  

      <div class="container">  <!-- Start Container -->
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

               </div><!-- End Span8 -->
                    
					<?php get_sidebar('blog'); ?>
                
           </div>   <!-- End Row -->
      </div><!-- End Container -->	
		

    </div><!--End Section -->



<?php get_footer(); ?>