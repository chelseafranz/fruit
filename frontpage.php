<?php get_header(); 

/*
Template name: Frontpage Template
*/
global $current_page_id;
$current_page_id = get_option('page_on_front');

if ( ( $locations = get_nav_menu_locations() ) && $locations['main-menu'] ) {
    $menu = wp_get_nav_menu_object( $locations['main-menu'] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $test_include = array();
    foreach($menu_items as $item) {
        if($item->object == 'page')
            $test_include[] = $item->object_id;
    }
	

	
	if( function_exists('CPTOrderPosts') )
    	remove_filter('posts_orderby', 'CPTOrderPosts', 99, 2);
 
 	$main_query = new WP_Query(array( 'post_type' => 'page', 'post__in' => $test_include, 'posts_per_page' => count($test_include), 'orderby' => 'post__in',  'suppress_filters'=> true ));
	   
		if( function_exists('CPTOrderPosts') )
		add_filter('posts_orderby', 'CPTOrderPosts', 99, 2);
	
	

}
else{
    $args=array(
    'post_type' => 'page',
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'posts_per_page' => '-1',
	'suppress_filters'=> true
  );
    $main_query = new WP_Query($args); 
}


$menu = 1;

    while ($main_query->have_posts()) : $main_query->the_post();

    global $post;

    $post_name = $post->post_name;
    
    global $post_id;
	$post_id = get_the_ID();



	
		/* section post parent */
	$first_parent = array_reverse( get_post_ancestors( $post_id ) );
	if( !empty( $first_parent[0] ) ) {
		
		$first_parent = get_page($first_parent[0]);
		$post_parent = 'data-parent="' . $first_parent->post_name . '"';
		
	} else {
		
		$post_parent = NULL;
	
	}	
    
    $separate_page = get_post_meta($post_id, "thz_separate_page", true); 
    if (($separate_page!= true )&& ($post_id != $current_page_id ))
    {
		
?>

<?php if (get_post_meta($post_id, "thz_assign_type", true) == "parallax-section") { ?>
   
	<!-- START PARALLAX SECTION -->	
	<div id="<?php echo $post_name; ?>" class="parallax">
		<div id="bg<?php echo $post_id; ?>" class="parallax-bg"></div><!-- END PARALLAX BACKGROUND -->
		<div class="overlay"></div><!-- END PATTERN OVERLAY -->
		<div class="container clearfix">
			<div class="parallax-content">
				<?php the_content(); ?>
			</div><!-- END PARALLAX CONTENT -->
		</div><!-- END CONTAINER -->
	</div>
	<!-- END PARALLAX SECTION -->   
    
<?php } else { ?>  
 

    <div id="<?php echo $post_name; ?>" class="page<?php echo $post_id; ?> section <?php if((get_post_meta($post_id, "thz_assign_type", true) == "home-section") ){ if(($smof_data['thz_home_type']=="Video")) { echo ' fullscreen home-video '; } else if(($smof_data['thz_home_type']=="FullScreen Slider")) { echo ' fullscreen home-fullscreenslider '; } else { echo ' fullscreen home-parallax '; }  if($smof_data['thz_home_look_type'] == "Regular"){ echo ' home-banner2'; }} else { echo ' '.$post_name; }?> "><!-- Section -->

<?php if((get_post_meta($post_id, "thz_assign_type", true) != "home-section") ){ ?>    

<?php if((get_post_meta( $post_id, 'thz_disable_title', true )!= true) ){ ?>    
  
		<div class="container">	
           <div class="row">	
			<div class="sixteen columns">            
	            <!-- Start titled -->	            
				<div class="title">
				  <h1 class="header-text"><?php if(get_post_meta( get_the_ID(), 'thz_alt_title', true )){ echo get_post_meta( get_the_ID(), 'thz_alt_title', true ); } else { the_title(); } ?></h1>
                  <div class="subtitle">
                      <p><?php if(get_post_meta( get_the_ID(), 'thz_subtitle', true )){ echo get_post_meta( get_the_ID(), 'thz_subtitle', true ); } ?></p>
                  </div><!-- End subtitle -->
                </div><!-- End title --> 
              	                           
			</div><!-- End sixteen columns -->  
           </div><!-- End row -->         
         </div><!-- End container -->  
              
  <?php } ?>   
  <?php } ?>   
  

   <?php
	if (get_post_meta($post_id, "thz_assign_type", true) == "home-section") { ?>
      <?php get_template_part('home_section');
	  
	}

	else if (get_post_meta($post_id, "thz_assign_type", true) == "video-section") { ?>
      <!-- Start parallax section -->	
	<div id="<?php echo $post_name; ?>" class="parallax">
	<video id="bgvid" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
    <source src="<?php echo (get_post_meta( get_the_ID(), 'video_parallax_webm', true )) ?>" type="video/webm">
    <source src="<?php echo (get_post_meta( get_the_ID(), 'video_parallax_ogv', true )) ?>" type="video/ogv">
    <source src="<?php echo (get_post_meta( get_the_ID(), 'thz_video_parallax', true )) ?>" type="video/mp4">
    </video>
      <!-- End parallax background -->
		<div class="overlay"></div><!-- End pattern overlay -->
		<div class="container clearfix">
			<div class="parallax-content">
				<?php the_content(); ?>
			</div><!-- End parallax content -->
		</div><!-- End container -->
	</div>
	<!-- End parallax section -->   
    <?php
	}
	else if (get_post_meta($post_id, "thz_assign_type", true) == "contact-section") { ?>
      <div class="container">	
			<div class="sixteen columns">     
                <?php the_content(); ?>
            </div>
      </div>	
      <?php get_template_part('contact_section');
	}
	else if (get_post_meta($post_id, "thz_assign_type", true) == "recent-section") { ?>
      <div class="container">	
			<div class="sixteen columns">     
                <?php the_content(); ?>
            </div>
      </div>	
      <?php get_template_part('blog_section');
	}
	else { ?>

      <div class="container">	
			<div class="sixteen columns">     
                <?php the_content(); ?>
            </div>
      </div>	
		
	<?php } ?> 

    </div><!-- End section -->

    
<?php
    } ?>
    
    
    
   <?php if($menu==1){
        get_template_part('menu_section');
     } 	
	  $menu=2;
  }
    endwhile;
	wp_reset_postdata();


wp_reset_query();
 get_footer(); ?>
