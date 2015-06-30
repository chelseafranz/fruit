<?php 
$quote =  get_post_meta($post->ID, 'thz_blogquote', true);
$quote = htmlspecialchars_decode($quote);
?>
<div class="post clearfix">	
	<div class="post-single-content">
		
		<div class="post-quote">
              <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'thezoc'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><i class="icon-quote-left"></i>&nbsp;&nbsp;<?php echo $quote; ?>&nbsp;&nbsp;<i class="icon-quote-right"></i></a><br /><p class="quote-source"><a href="<?php the_permalink(); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'thz_blogquotesource', true); ?></a></p></h2>
		</div>   

		<div class="post-meta">
	    		 <?php the_time('d'); ?> <?php the_time('M'); ?>, <?php the_time('Y'); ?> &nbsp; / &nbsp;<?php _e('By&nbsp;', 'thezoc'); the_author(', '); ?> &nbsp; / &nbsp; <?php _e('in&nbsp;', 'thezoc'); the_category(', '); ?> <span><?php if ( comments_open() ) { comments_popup_link(__('No Comments', 'thezoc'), __('1 Comment', 'thezoc'), __('% Comments', 'thezoc'), 'comments-link', ''); } ?></span> 
        </div> <!-- End Meta Date -->
          <div class="post-excerpt"><?php the_content(); ?></div>	  
        <div class="post-tags styled-list">
            <ul>
               <?php the_tags( '<ul> <li>Tags:&nbsp;&nbsp;</li> <li>', '&nbsp;&nbsp;&nbsp; </li><li> ', ' </li> </ul>'); ?>
            </ul>
        </div><!-- End of Tags -->
	</div>

</div>
