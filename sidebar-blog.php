<div id="sidebar" class="five columns">
<div class="sidebar-content">

    <?php 
	global $thz_sidebar_name;
	
	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Blog Sidebar') );
	?>

</div>
</div>