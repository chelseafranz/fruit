<?php get_header(); ?> 

<?php
   get_template_part('menu_section'); 
if (have_posts()) : while (have_posts()) : the_post();

    global $post;
    
    $post_name = $post->post_name;
    
    $post_id = get_the_ID();
		
?>  

    <div id="<?php echo $post_name; ?>" class="page<?php echo $post_id; ?> section-white<?php if((get_post_meta($post_id, "thz_assign_home") == true) ){ echo ' fullscreen home';} else { echo ' '.$post_name; }?>"><!-- Section -->


    <?php if((get_post_meta( get_the_ID(), 'thz_disable_title', true )!= true) && (get_post_meta($post_id, 'thz_assign_home', true)!= true) ){ ?>    
		<div class="container">	
           <div class="row">	
			<div class="sixteen columns">            
	            <!-- Start title -->	            
				<div class="title">
				  <h1 class="header-text"><?php if(get_post_meta( get_the_ID(), 'thz_alt_title', true )){ echo get_post_meta( get_the_ID(), 'thz_alt_title', true ); } else { the_title(); } ?></h1>
                  <div class="subtitle">
                      <p><?php if(get_post_meta( get_the_ID(), 'thz_subtitle', true )){ echo get_post_meta( get_the_ID(), 'thz_subtitle', true ); } ?></p>
                  </div><!-- End subtitle -->
                </div><!-- End title -->
                	                           
			</div><!-- End sixteen columns -->  
           </div><!-- End row-->         
          </div><!-- End container -->       
  <?php } ?>   


      <div class="container"><!-- Start container -->         
           <?php the_content(); ?>
           <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
           <?php comments_template(); ?>  
      </div><!-- End container -->  

				

    </div><!--End section -->
<?php

    endwhile;
    endif; 
	wp_reset_query();
?>




<?php get_footer(); ?>
