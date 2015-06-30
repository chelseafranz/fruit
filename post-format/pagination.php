<div id="pagination" class="clearfix">
                            <!-- Next posts link -->
							<div class="pager fl" >
								<?php next_posts_link( __('&larr; Older posts', 'thezoc') ); ?>
							</div>
                              <!-- Previous posts link -->
	                        <div class="pager fr" >
								<?php previous_posts_link( __('Newer posts &rarr;', 'thezoc') ); ?>
							</div>
							
							
</div>
<p class="hidden"><?php posts_nav_link(); ?></p>
