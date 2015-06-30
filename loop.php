<li <?php post_class(); ?> id="post_<?php the_ID(); ?>">
		
	<?php if ( has_post_thumbnail() ) get_template_part( 'post', get_post_format() ); ?>
			
	<div class="blog_section_post <?php if ( ! has_post_thumbnail() ) echo 'full_width'; ?>">
		
		<span class="post_title">
			<a title="<?php printf( esc_attr__('Permalink to %s', 'thezoc'), the_title_attribute('echo=0') ); ?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php echo platform_filter( get_the_title() ? get_the_title() : get_the_time('F j') ); ?></a>
		</span>
		
		<div class="clr"></div>
		
		<h4 style="color:#c3c3c3;"><?php _e('Author:', 'thezoc'); ?> <?php the_author_posts_link(); ?> // <?php _e('Category:', 'thezoc'); ?> <?php the_category(', '); ?>  // <?php echo platform_filter( get_the_time('j') ); ?> <?php echo platform_filter( get_the_time('M') ); ?></h4>
	
		<span class="post_comments"><?php comments_popup_link( __('No Comments', 'thezoc') , __('1 Comment', 'thezoc') , __('% Comments', 'thezoc') ); ?></span>
		
		<div class="clr"></div>
		
	</div>
	
	<?php the_content( __('Continue reading ...', 'thezoc') ); ?>
	
	<div class="clr"></div>
		
</li>