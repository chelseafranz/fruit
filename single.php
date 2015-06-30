<?php get_header(); ?> 

<?php  get_template_part('menu_section');  

if (have_posts()) : while (have_posts()) : the_post();

    global $post;
    
    $post_name = $post->post_name;
    
    $post_id = get_the_ID();
		
?>  


    <div class="section-page post-single"><!-- Section -->



      <div class="container">   
            <div class="row">        
                <div class="eleven columns">                

                    <?php 

                    if(get_query_var('paged')){
                        $paged = get_query_var('paged');
                    } elseif ( get_query_var('page') ) { 
                        $paged = get_query_var('page');
                    } else {
                        $paged = 1;
                    }

                    $args = array( 
                        'post_type' => 'post',
                        'posts_per_page' => '2',
                        'paged' => $paged 
                    );

                    if(is_page()){
                        query_posts($args);
                    }else{
                        global $wp_query;
                        $query_args = array_merge( $wp_query->query, $args );
                        query_posts($query_args);
                    } 

                    if (have_posts()) : while (have_posts()) : the_post();  

                        get_template_part( 'post-format/single', get_post_format() );  ?>
     
			
			
			<?php if($smof_data['thz_blog_socialshare'] == true) { ?>
				<?php get_template_part( 'includes/share' ); ?>
			<?php } ?>
			

			<?php if($smof_data['thz_blog_authorinfo'] == true) { ?>
			<div id="author-info" class="clearfix">
				    <div class="author-image">
				    	<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar( get_the_author_meta('user_email'), '50', '' ); ?></a>
				    </div>   
				    <div class="author-bio">
				        <h4><?php _e('About the author', 'thezoc'); ?></h4>
				        <?php the_author_meta('description'); ?>
				    </div>
			</div>
			<?php } ?>

			
		
		
		<div class="comments"><?php comments_template(); ?></div>
								

                  <?php  endwhile; 


                     else : ?>

                    <h2><?php _e('No Post Found', 'thezoc') ?></h2>

                    <?php

                    endif; 

                    wp_reset_query();

                    ?>

                </div><!-- END SPAN8 -->
                <?php get_sidebar('blog'); ?>
             </div>   
      </div>	
      
    </div><!--End Section -->
    
<?php
  
    endwhile;
    endif; 
	wp_reset_query();
?>


<?php get_footer(); ?>