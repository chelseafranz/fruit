 <?php global $smof_data; ?> 


    <!-- Start navigation -->
    <nav class="<?php  echo 'page_scroll' ?> navigation <?php echo $smof_data['thz_menu_type']; ?> <?php if($smof_data['thz_menu_type']!= 'transparent'){ echo 'sticky-nav'; } ?> push">
     <!-- Start container -->	
      <div class="container clearfix">			
     
          <div id="container-logo" class="four columns">			
            <div class="menu-btn">&#9776;</div>
                	
               <div id="responsive" class="wpml-desktop">
                <?php do_action ('icl_language_selector')?> 
               </div> 				 		
              <!-- Start logo -->	
              <div class="logo large">
              
			    <?php if($smof_data['thz_logo_url'] != "") { ?>
                              
                              <img src="<?php echo $smof_data['thz_logo_url']; ?>" 
                              alt="<?php bloginfo('name'); ?>" 
                              width="<?php echo $smof_data['thz_logo_width']; ?>" 
                              height="<?php echo $smof_data['thz_logo_height'];?>"  
                          />
					<?php } else { ?>
						<h1><a href="#" class="scroll-to"><?php bloginfo('name'); ?></a></h1>
                        
					<?php } ?>
              </div> <!-- End logo -->	
              <div class="logo-transparent large-transparent">
              
			    <?php if($smof_data['thz_logo_transparent_url'] != "") { ?>
                              
                              <img src="<?php echo $smof_data['thz_logo_transparent_url']; ?>" 
                              alt="<?php bloginfo('name'); ?>" 
                              width="<?php echo $smof_data['thz_logo_width']; ?>" 
                              height="<?php echo $smof_data['thz_logo_height'];?>"  
                          />
					
				<?php } ?>
              </div> <!-- End logo -->			
              
          </div><!-- End four columns -->                
         
           <!-- Begin navigation section --> 
               <div class="menu-align">       		
              <!-- Start menu items -->
 				   <?php 
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => '',
                  'fallback_cb' => 'show_top_menu',
                  'menu_class' => 'main-menu large nav sf-menu sf-js-enabled',
                  'menu_id' => 'nav2',
                  'echo' => true,
                  'walker' => new description_walker(),
                  'depth' => 0 
                )); 
              ?>
			</div>
              <!-- End menu items -->	
               <div id="desktop" class="wpml-desktop">
                <?php do_action ('icl_language_selector')?> 
               </div> 						
          <!-- End twelve columns -->	
      </div><!-- End container -->	
     
    </nav><!-- End navigation -->
    <div id="containerpush">
	