<div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>

    <?php global $blog_post_type; ?>
    
    <div class="post-media">      
        <div class="post-video">
            <?php  
            if (get_post_meta( get_the_ID(), 'thz_blog_video_type', true ) == 'vimeo') {  
              echo '<iframe src="http://player.vimeo.com/video/'.get_post_meta( get_the_ID(), 'thz_blog_video_embed', true ).'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="960" height="540" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';  
            }  
            else if (get_post_meta( get_the_ID(), 'thz_blog_video_type', true ) == 'youtube') {  
              echo '<iframe width="960" height="540" src="http://www.youtube.com/embed/'.get_post_meta( get_the_ID(), 'thz_blog_video_embed', true ).'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>';  
            }  
            else {  
                echo get_post_meta( get_the_ID(), 'thz_blog_video_embed', true ); 
            }  
            ?> 
        </div>
    </div><!-- Ends Post Media -->
     <div class="post-date"> 
    <div class="post-time"><?php the_time('d'); ?></div>
    <div class="post-month"><?php the_time('M'); ?>, <?php the_time('Y'); ?></div>
    </div>
    <div class="post-content-right">
	<div class="post-title">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'thezoc'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
	</div><!-- End of Title -->
	
    <div class="post-meta">
	By&nbsp;<?php _e('', 'thezoc'); the_author(', '); ?>&nbsp;in&nbsp;<?php _e('', 'thezoc'); the_category(', '); ?>&nbsp;-&nbsp;<?php if ( comments_open() ) { comments_popup_link(__('No Comments', 'thezoc'), __('One Comment', 'thezoc'), __('% Comments', 'thezoc'), 'comments-link', ''); } ?></span> 
	</div><!-- End of Meta Date -->
    </div> 
    
    <div class="post-content" style="width:83%; float:right">
    							<?php
								global $more;
									   $more = 0;   ?>
								<?php  the_excerpt(); ?>
        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?> 
    <div class="button-read"><a href="<?php  echo get_permalink(); ?>"><?php _e( 'Continue reading', 'thezoc' ); ?></a></div>    
    </div><!-- End of Content -->

</div><!-- End of Post -->