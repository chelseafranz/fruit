<!--Home Section -->
<?php global $smof_data; 

if($smof_data['thz_home_type']=="Video") { ?>
   <video id="bgvid" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
    <source src="" type="video/webm">
    <source src="" type="video/ogv">
    <source src="<?php echo $smof_data['thz_home_video_mp4']; ?>" type="video/mp4">
    </video>        
 <?php } ?>


<div class="home-overlay"></div> 
<div class="home-text-wrapper">
 
<?php 

  if ( ( $test_locations = get_nav_menu_locations() ) && $test_locations['main-menu'] ) {
	  
      $test_menu = wp_get_nav_menu_object( $test_locations['main-menu'] );
      $test_menu_items = wp_get_nav_menu_items($test_menu->term_id);
	  $k = 0;
      foreach($test_menu_items as $test_key => $test_item) {
		  
          if($test_item->object == 'page'){
			  			  
			    $test_varpost = get_post($test_item->object_id);    
				$test_post_name = $test_varpost->post_name;            
                $test_separate_page = get_post_meta($test_item->object_id, "thz_separate_page", true);
                $test_disable_menu = get_post_meta($test_item->object_id, "thz_disable_section_from_menu", true);
				
				if ( $test_separate_page != true ) // && $test_disable_menu != true
				  {
					if ($k==1) {
					  $home_link = "#" . $test_post_name;
					  break; // breaks foreach loop
					}
					$k++;					
				  } // ends if block "separate page"	
				  	
		  } // ends if block "is_page"         
		  		  
      } // ends foreach loop
	  
  } // ends if block "menu locations"
 

  if($smof_data['thz_home_type']=="Revolution Slider") { ?>
      
       <div class="home-slider">
          <?php if (get_post_meta( get_the_ID(), 'thz_revolutionslider', true ) != '0') { ?>
          
              <?php if(class_exists('RevSlider')){ putRevSlider(get_post_meta( get_the_ID(), 'thz_revolutionslider', true )); } ?>
          
          <?php } /* end slidertype = revslider */ ?>
      </div>	  


 <?php } 
  else if($smof_data['thz_home_type']=="Boxed Content") { ?>
	
        <div class="container">
				
				<div class="sixteen columns">
                  <?php   the_content(); ?>
				</div>
		</div>
 

 <?php } else {
	 
	 the_content();
 }?>      
</div><!-- End home text wrapper  -->
