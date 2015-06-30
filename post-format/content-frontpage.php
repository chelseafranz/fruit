</span><div id="post-<?php the_ID(); ?>" <?php post_class('post-recent clearfix'); ?>>
<div class="post_thumbnail_recent">
<div class="overlay-thumbnail three columns">
     	<?php if ( has_post_thumbnail() ) { ?>

		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'thezoc'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
		<?php the_post_thumbnail('span7'); ?>
		</a>
</div>    
	<?php } if ( has_post_thumbnail() == '' ) { ?>
   
</div>
	<div class="post-media">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'thezoc'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><div class="no-post-image"></div></a>
	</div>
	<?php } ?>

	<div class="post-title-recent four columns">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('Permalink to %s', 'thezoc'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
	</div><!-- End of Title -->
    <div class="post-content-recent four columns">
	<?php echo get_excerpt(); ?>&nbsp;[...]&nbsp;    
    </div>                                    
</div><!-- End of Post -->


