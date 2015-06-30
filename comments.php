<div id="comments"><!-- Start comments -->  
	<?php	
		if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
			die ('Please do not load this page directly. Thanks!');
	
		if ( post_password_required() ) { ?>
			<?php _e('This post is password protected. Enter the password to view comments.', 'thezoc'); ?>
		<?php
			return;
		}
	?>
	
	<?php if ( have_comments() ) : ?>		
		<h3 id="comments"><span><?php comments_number(__('Comments', 'thezoc'), __('Comment <span>(1)</span>', 'thezoc'), __('Comments <span>(%)</span>', 'thezoc') );?></span></h3>
	
		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>
	
		<ol class="commentlist clearfix">
			 <?php wp_list_comments(array( 'callback' => 'thezoc_comments' )); ?>
		</ol>
	
		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>
		
	 <?php else : ?>
	
		<?php if ( comments_open() ) : ?>
		 <?php else : ?>
			<p class="hidden"><?php _e('Comments are closed.', 'thezoc'); ?></p>	
		<?php endif; ?>		
	<?php endif; ?>
		
		
<?php if ( comments_open() ) : ?>

	<?php
	
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		//Fields
		$fields =  array(
			'author'=> '<div id="respond-inputs" class="clearfix"><p><input name="author" type="text" value="' . __('Name (required)', 'thezoc') . '" size="15"' . $aria_req . ' /></p>',
			
			'email' => '<p><input name="email" type="text" value="' . __('E-Mail (required)', 'thezoc') . '" size="15"' . $aria_req . ' /></p>',
			
			'url' 	=> '<p class="last"><input name="url" type="text" value="' . __('Website', 'thezoc') . '" size="15" /></p></div>',
		);

		//Comment Form Args
        $comments_args = array(
			'fields' => $fields,
			'title_reply'=>'<h3 class="title-comments"><span>'. __('Leave a reply', 'thezoc') .'</span></h4>',
			'comment_field' => '<div id="respond-textarea"><p><textarea id="comment" name="comment" aria-required="true" cols="58" rows="10" tabindex="4"></textarea></p></div>',
			'label_submit' => __('Submit comment','thezoc')
		);
		
		// Show Comment Form
		comment_form($comments_args); 
	?>


<?php endif; ?>
</div><!-- End comments -->  