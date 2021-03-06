<div class="post clearfix">

	<div class="post-audio">
		<?php echo get_post_meta($post->ID, 'thz_blogaudiourl', true); ?>
	</div>	
	<div class="post-single-content">
    	<div class="post-title"><h2>
				<?php if(get_post_meta( get_the_ID(), 'thz_alt_title', true )){ echo get_post_meta( get_the_ID(), 'thz_alt_title', true ); } else { the_title(); } ?></h2>
        </div><!-- End Post Title -->
		<div class="post-meta">
	    		 <?php the_time('d'); ?> <?php the_time('M'); ?>, <?php the_time('Y'); ?> &nbsp; / &nbsp;<?php _e('By&nbsp;', 'thezoc'); the_author(', '); ?> &nbsp; / &nbsp; <?php _e('in&nbsp;', 'thezoc'); the_category(', '); ?> <span><?php if ( comments_open() ) { comments_popup_link(__('No Comments', 'thezoc'), __('1 Comment', 'thezoc'), __('% Comments', 'thezoc'), 'comments-link', ''); } ?></span> 
        </div> <!-- End Meta Date -->
        <div class="post-excerpt"><?php the_content(); ?></div>	
        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?> 
			
		
        
        <div class="post-tags styled-list">
            <ul>
                <?php the_tags( '<ul> <li>Tags:&nbsp;&nbsp;</li> <li>', '&nbsp;&nbsp;&nbsp; </li><li> ', ' </li> </ul>'); ?>
            </ul>
        </div><!-- End of Tags -->
	</div>

</div>
