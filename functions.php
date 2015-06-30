<?php

global $smof_data;
/* Translation */
load_theme_textdomain( 'thezoc', get_template_directory() . '/includes/languages' );
$locale = get_locale();
$wc_posts_perpage = '';
$locale_file = get_template_directory() . "/includes/languages/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);
	
if ( ! isset( $content_width ) )
	$content_width = 1000;	


define('THZ_FUNCTIONS', get_template_directory()  . '/includes');
define('THZ_INDEX_JS', get_template_directory_uri()  . '/js');
define('THZ_INDEX_CSS', get_template_directory_uri()  . '/css');

/** Slightly Modified Options Framework **/
require_once ('admin/index.php');

/* WP 3.1 Post Formats */
add_theme_support( 'post-formats', array( 'audio', 'video', 'quote')); 


/* Include Meta Box Framework */
define( 'RWMB_URL', trailingslashit( get_template_directory_uri() . '/includes/metaboxes' ) );
define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/includes/metaboxes' ) );

require_once RWMB_DIR . 'meta-box.php';

include_once(THZ_FUNCTIONS.'/tgm-plugin-activation/class-tgm-plugin-activation.php'); // Plugin Activation Class
include_once(THZ_FUNCTIONS.'/tgm-plugin-activation/tgm-plugin-activator.php'); // Plugin Activator 
include_once THZ_FUNCTIONS.'/tinymce/thz-shortcodes.php';
include_once THZ_FUNCTIONS.'/shortcodes.php';
include_once THZ_FUNCTIONS.'/metaboxes.php';
include_once THZ_FUNCTIONS.'/custom-style.php';


/* Include Widgets */
include_once(THZ_FUNCTIONS.'/widgets/flickr.php');
include_once(THZ_FUNCTIONS.'/widgets/twitter.php');



function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );


if (is_admin() ){
	function thezoc_admin_scripts(){	
		wp_register_script('thzmetajs', THZ_INDEX_JS .'/admin/init.js', array('jquery','media-upload','thickbox'));
		wp_enqueue_script('thzmetajs');
	}
}

add_action('admin_enqueue_scripts', 'thezoc_admin_scripts');

	if (!is_admin() ){
		function thezoc_front_scripts(){		
		
		    global $smof_data;
			wp_register_script('thzForm', THZ_INDEX_JS .'/jquery.form.js', true);	
	        wp_register_script('superfish', THZ_INDEX_JS. '/superfish.js', TRUE);
			wp_register_script('thzImagesload', THZ_INDEX_JS .'/jquery.waitforimages.js', true);	
			wp_register_script('thzQueryLoader', THZ_INDEX_JS .'/jquery.queryloader2.js', true);	
			wp_register_script('thzFitVids', THZ_INDEX_JS .'/jquery.fitvids.js', true);	
			wp_register_script('thzPushy', THZ_INDEX_JS .'/pushy.js', true);	
			wp_register_script('thzAppear', THZ_INDEX_JS .'/jquery.appear.js', true);	
			wp_register_script('thzSlabText', THZ_INDEX_JS .'/jquery.slabtext.min.js', true);	
			wp_register_script('thzFitText', THZ_INDEX_JS .'/jquery.fittext.js', true);	
			wp_register_script('thzParallax', THZ_INDEX_JS .'/jquery.parallax-1.1.3.js', true);	
			wp_register_script('thzPrettyPhoto', THZ_INDEX_JS .'/jquery.prettyPhoto.js', true);
			wp_register_script('thzmatchMedia', THZ_INDEX_JS .'/matchMedia.js', true);	
			wp_register_script('thzmatchMediaListener', THZ_INDEX_JS .'/matchMedia.addListener.js', true);	
			wp_register_script('thzSticky', THZ_INDEX_JS .'/jquery.sticky.js', true);	
			wp_register_script('thzSmoothScroll', THZ_INDEX_JS .'/SmoothScroll.js', true);	
			wp_register_script('thzFlexslider', THZ_INDEX_JS .'/jquery.flexslider-min.js', true);	
			wp_register_script('thzBootstrapModal', THZ_INDEX_JS .'/bootstrap-modal.js', true);	
			wp_register_script('thzEasing', THZ_INDEX_JS .'/jquery.easing.min.js', true);
			wp_register_script('thzIsotope', THZ_INDEX_JS .'/isotope.js', true);			
			wp_register_script('selectnav', THZ_INDEX_JS .'/selectnav.min.js', true);	
			wp_register_script('thzscripts', THZ_INDEX_JS .'/scripts.js', true);	
			wp_register_script('thzmodernizer2', THZ_INDEX_JS .'/modernizr.custom.71422.js', true);	
			wp_register_script('thzanimations', THZ_INDEX_JS .'/animations.js', true);	
			wp_register_script('shortcodes', THZ_INDEX_JS .'/shortcodes.js', true);	
			wp_register_script('thzSupersized', THZ_INDEX_JS .'/supersized.3.2.7.min.js', true);	
			wp_register_script('thzSupersizedFun', THZ_INDEX_JS .'/supersized.shutter.min.js', true);
			wp_register_script('thzClassyLoader', THZ_INDEX_JS .'/jquery.classyloader.js', true);
		
								
			wp_enqueue_script( 'jquery', false, array(), false, true);
			wp_enqueue_script('thzForm');
          	wp_enqueue_script('superfish');
			wp_enqueue_script('thzClassyLoader');
			wp_enqueue_script('thzmatchMediaListener');
			wp_enqueue_script('thzQueryLoader');
			wp_enqueue_script('thzImagesload');
			wp_enqueue_script('thzAppear');
			wp_enqueue_script('thzPushy');
			wp_enqueue_script('thzmodernizer2');
			wp_enqueue_script('thzAnimate');
			wp_enqueue_script('thzSlabText');
			wp_enqueue_script('thzParallax');
			wp_enqueue_script('thzPrettyPhoto');
			wp_enqueue_script('thzmatchMedia');
			wp_enqueue_script('thzSticky');
			wp_enqueue_script('thzSmoothScroll');
			wp_enqueue_script('thzFlexslider');
			wp_enqueue_script('thzBootstrapModal');
			wp_enqueue_script('thzEasing');
			wp_enqueue_script('thzFitText');
			wp_enqueue_script('thzFitVids');
			wp_enqueue_script('thzIsotope');
			wp_enqueue_script('selectnav');
			wp_enqueue_script('thzscripts');
			wp_enqueue_script('thzanimations');
			wp_enqueue_script('shortcodes');	
			
			if( ($smof_data['thz_home_type']=="FullScreen Slider") ) { 
			   wp_enqueue_script('thzSupersized');
			   wp_enqueue_script('thzSupersizedFun');
			}				
			
	wp_localize_script( 'thzscripts', 'thz_global_vars', array( 
		'contact_form_required_fields_label_ajax' =>  __('This is a required field', 'thezoc'),
		'contact_form_warning' => __('Please verify fields and try again.', 'thezoc'),
		'contact_form_email_warning' =>  __('Please enter a valid e-mail address and try again.', 'thezoc'),
		'contact_form_error' => __('There was an error sending your email. Please try again later.', 'thezoc'),
		'contact_form_success_message' => __('Thanks, we got your mail and will get back to you soon!', 'thezoc'),
		'contactFormDefaults_name' => __('Name', 'thezoc'),
		'contactFormDefaults_email' => __('E-mail', 'thezoc'),
		'contactFormDefaults_subject' => __('Subject', 'thezoc'),
		'contactFormDefaults_message' => __('Message', 'thezoc'),
		'commentFormDefaults_author' => __('Name', 'thezoc'),
		'commentFormDefaults_email' => __('E-mail', 'thezoc'),
		'commentFormDefaults_url' => __('http://', 'thezoc'),
		'searchFormDefaults_search' => __('Search', 'thezoc')
	) );				
	
	}
  add_action('wp_footer', 'thezoc_front_scripts'); 


	
      if( $smof_data['thz_enable_googlemap']) {	
		function thezoc_head_scripts(){		
		  wp_register_script('gmap', 'https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places', array('jquery'), '2.1', false );  
	      wp_register_script('infoBox', 'http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js', array('jquery'), '2.1', false );	
			wp_enqueue_script( 'gmap');
			wp_enqueue_script( 'infoBox');
	
		}
      add_action('wp_print_scripts', 'thezoc_head_scripts'); 

	  }


}
/* Register Stylesheets */
function thezoc_print_styles() {  	
	if ( !is_admin() ){
		
		global $smof_data;
		wp_register_style( 'thzSkeleton', THZ_INDEX_CSS. '/skeleton.css', array(), '1', 'all' );
		wp_register_style( 'thzReset', THZ_INDEX_CSS. '/reset.css', array(), '1', 'all' );		
		wp_register_style( 'thzPushy', THZ_INDEX_CSS. '/pushy.css', array(), '1', 'all' );	
		wp_register_style( 'thzSocial', THZ_INDEX_CSS. '/social.css', array(), '1', 'all' );	
		wp_register_style( 'thzAnimate', THZ_INDEX_CSS. '/animations.css', array(), '1', 'all' );	
		wp_register_style( 'thzHover', THZ_INDEX_CSS. '/hover.css', array(), '1', 'all' );	
		wp_register_style( 'thzFlexslider', THZ_INDEX_CSS. '/flexslider.css', array(), '1', 'all' );	
		wp_register_style( 'thzFontawesome', THZ_INDEX_CSS. '/font-awesome.css', array(), '1', 'all' );	
		wp_register_style( 'thzPrettyPhoto', THZ_INDEX_CSS. '/prettyPhoto.css', array(), '1', 'all' );
		wp_register_style( 'thzShortcodes', THZ_INDEX_CSS. '/shortcodes.css', array(), '1', 'all' );	
		wp_register_style( 'thzTheme', THZ_INDEX_CSS. '/theme.css', array(), '1', 'all' );			
		wp_register_style( 'thzSupersized', THZ_INDEX_CSS. '/supersized.css', array(), '1', 'all' );				
		wp_register_style( 'thzSupersizedFun', THZ_INDEX_CSS. '/supersized.shutter.css', array(), '1', 'all' );						
		wp_register_style( 'thzMedia', THZ_INDEX_CSS. '/media.css', array(), '1', 'all' );
		
		
	    wp_enqueue_style( 'thzSkeleton' ); 					
		wp_enqueue_style( 'reset' ); 	  		   	
		  			
	    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1', 'all' );
		wp_enqueue_style( 'thzSocial' ); 	 
		wp_enqueue_style( 'thzGrayscale' ); 	 
		wp_enqueue_style( 'thzAnimate' );
		wp_enqueue_style( 'thzNormalize' );
		wp_enqueue_style( 'thzPushy' );
		wp_enqueue_style( 'thzHover' ); 	 
		wp_enqueue_style( 'thzFlexslider' ); 	 
		wp_enqueue_style( 'thzFontawesome' ); 	 
		wp_enqueue_style( 'thzPrettyPhoto' );	 
		wp_enqueue_style( 'thzShortcodes' ); 	 
		wp_enqueue_style( 'shortcodes' ); 
		wp_enqueue_style( 'thzTheme' );	
		wp_enqueue_style( 'thzMedia' ); 
			
		if($smof_data['thz_home_type']=="FullScreen Slider") { 
		   wp_enqueue_style('thzSupersized');
		   wp_enqueue_style('thzSupersizedFun');
		}
		
						
	}  
}
add_action( 'wp_print_styles', 'thezoc_print_styles' );











/* Post Thumbnails */
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
  	    
/* Custom Image Sizes */	
//if($smof_data['thz_enable_widescreen'] == "1") {
	
	  // RESPONSIVE GRID SIZES

		  add_image_size( 'blog-standard', 770, 360, true );
		  add_image_size( 'span12', 1172, 400, true ); 
		  add_image_size( 'span7', 670, 400, true );		  
		  add_image_size( 'span6', 570, 372, true );		
		  add_image_size( 'span4', 370, 241, true ); 		
		  add_image_size( 'span3', 270, 176, true );	  
		  add_image_size( 'blog-span6', 570, 210, true );		
		  add_image_size( 'blog-span4', 370, 150, true ); 		
		  add_image_size( 'blog-span3', 270, 120, true );			  
		  add_image_size( 'mini', 60, 60, true ); 			


 function ago($time) {
	   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	   $lengths = array("60","60","24","7","4.35","12","10");

	   $now = time();

	       $difference     = $now - $time;
	       $tense         = "ago";

	   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	       $difference /= $lengths[$j];
	   }

	   $difference = round($difference);

	   if($difference != 1) {
	       $periods[$j].= "s";
	   }

	   return "$difference $periods[$j] ago ";
	}
	 
	 
	
/* Comments Function */		
function thezoc_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>	
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   <div id="comment-<?php comment_ID(); ?>" class="comment-body clearfix"> 	   		
		<div class="avatar"><?php echo get_avatar($comment, $size = '50'); ?></div>	         
		 <div class="comment-text">	         
			 <div class="author">
				<span><?php printf( __( '%s', 'thezoc'), get_comment_author_link() ) ?></span>
				<div class="date">
				<?php printf(__('%1$s at %2$s', 'thezoc'), get_comment_date(),  get_comment_time() ) ?></a><?php edit_comment_link( __( '(Edit)', 'thezoc'),'  ','' ) ?>
				&middot; <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>  </div>  
			 </div>				 
			 <div class="text"><?php comment_text() ?></div>				 
			 <?php if ( $comment->comment_approved == '0' ) : ?>
			 <em><?php _e( 'Your comment is awaiting moderation.', 'thezoc' ) ?></em>
			 <br />
			<?php endif; ?>		      	
		</div>	      
   </div>	
<?php }



   
  
/* Pagination Function*/   
function thezoc_pagination($pages = '', $range = 4) {
	$showitems = ($range * 2)+1;
	
	global $paged;
	if(empty($paged)) $paged = 1;
	
	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}
	
	if(1 != $pages) {
		echo "<span class='allpages'>" . __('Page', 'thezoc') . " ".$paged." " . __('of', 'thezoc') . " ".$pages."</span>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; " . __('First', 'thezoc') . "</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; " . __('Previous', 'thezoc') . "</a>";
		
		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
			}
		}
	
		if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">" . __('Next', 'thezoc') . " &rsaquo;</a>";
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>" . __('Last', 'thezoc') . " &raquo;</a>";
	}
}
	
function custom_excerpt_length( $length ) {
	return 999;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );	

/* Add RSS Links to head section */
add_theme_support( 'automatic-feed-links' );
add_filter('widget_text', 'do_shortcode');
/* Add prettyPhoto to content anchor tags */	
add_filter( 'wp_get_attachment_link', 'thezoc_custom_prettyphoto');

function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 80);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
return $excerpt;
}
	

function thezoc_custom_prettyphoto($content) {
	$content = preg_replace("/<a/","<a data-rel=\"prettyPhoto\"",$content,1);
	return $content;
}

  
  register_sidebar(array(
	 'name' => __('Blog Sidebar','thezoc' ),
	 'id'   => 'blog-widgets',
	  'description'   => __( 'These are widgets for the Blog page.','thezoc' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h3>',
	  'after_title'   => '</h3>'
  ));  


function register_menus() {
	register_nav_menus( array( 'main-menu' => 'Primary Navigation Menu') );
}
add_action('init', 'register_menus');
 
class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $object, $depth = 0, $args = Array() , $current_object_id = 0) {
           
           global $wp_query;

           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $object->classes ) ? array() : (array) $object->classes;
           $icon_class = $classes[0];
		   $classes = array_slice($classes,1);

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           

           $attributes  = ! empty( $object->attr_title ) ? ' title="'  . esc_attr( $object->attr_title ) .'"' : '';
           $attributes .= ! empty( $object->target )     ? ' target="' . esc_attr( $object->target     ) .'"' : '';
           $attributes .= ! empty( $object->xfn )        ? ' rel="'    . esc_attr( $object->xfn        ) .'"' : '';
          	
          	if( $icon_class != '' ) {
            	$icon_classes = '<i class="'. $icon_class .'"></i>';
		   	}
		   	else{
		   		$icon_classes = '';
		   	}

           if($object->object == 'page')
           {
                $varpost = get_post($object->object_id);                
                $separate_page = get_post_meta($object->object_id, "thz_separate_page", true);
                $disable_menu = get_post_meta($object->object_id, "thz_disable_section_from_menu", true);
				$current_page_id = get_option('page_on_front');

                if ( ( $disable_menu != true ) && ( $varpost->ID != $current_page_id ) ) {

                	$output .= $indent . '<li id="menu-item-'. $object->ID . '"' . $value . $class_names .'>';

                	if ( $separate_page == true )
	                	$attributes .= ! empty( $object->url ) ? ' href="'   . esc_attr( $object->url ) .'"' : '';
	                else{
	                	if (is_front_page()) 
	                		$attributes .= ' href="#' . $varpost->post_name . '"'; 
	                	else 
	                		$attributes .= ' href="' . home_url() . '#' . $varpost->post_name . '"';
	                }	

	                $object_output = $args->before;
		            $object_output .= '<a'. $attributes .'>';
		            $object_output .= $args->link_before . $icon_classes . '<span>' . apply_filters( 'the_title', $object->title, $object->ID ) . '</span>';
		            $object_output .= $args->link_after;
		            $object_output .= '</a>';
		            $object_output .= $args->after;    

		             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );            	              	
                }
                                         
           }
           else{

           		$output .= $indent . '<li id="menu-item-'. $object->ID . '"' . $value . $class_names .'>';

                $attributes .= ! empty( $object->url ) ? ' href="' . esc_attr( $object->url ) .'"' : '';

	            $object_output = $args->before;
	            $object_output .= '<a'. $attributes .'>';
	            $object_output .= $args->link_before . $icon_classes . '<span>' . apply_filters( 'the_title', $object->title, $object->ID ) . '</span>';
	            $object_output .= $args->link_after;
	            $object_output .= '</a>';
	            $object_output .= $args->after;

	             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
	        }

           
      }
}

add_filter( 'posts_orderby', 'sort_query_by_post_in', 10, 2 );
function sort_query_by_post_in( $sortby, $thequery ) {
	if ( !empty($thequery->query['post__in']) && isset($thequery->query['orderby']) && $thequery->query['orderby'] == 'post__in' )
		$sortby = "find_in_set(ID, '" . implode( ',', $thequery->query['post__in'] ) . "')";
	return $sortby;
}

if(function_exists('icl_get_languages')) {
function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
            if(!$l['active']) echo '</a>';
        }
    }
}
add_action('wpml_languages_list', 'language_selector_flags');
}

// THIS GIVES US SOME OPTIONS FOR STYLING THE ADMIN AREA
function custom_colors() {
   echo '<style type="text/css">
     i.mce-ico.mce-i-rnrscg:before {
	content: "R";
	font-size: 12px;
	font-weight: bold;
	color: white;
	background: #000000;
	padding: 5px 7px;
	border-radius: 4px;
}
         </style>';
}

add_action('admin_head', 'custom_colors');


if( !function_exists('thz_add_image_placeholders') ){

	function thz_add_image_placeholders( $content ) {
		
		if( is_feed() || is_preview() )
			return $content;
		
		/* Don't lazy-load if the content has already been run through previously */
		if ( false !== strpos( $content, 'data-original' ) ) {
			return $content;
		}
		
		$placeholder_image = NULL;
		
		// This is a pretty simple regex, but it works
		$content = preg_replace( '#<img([^>]+?)src=[\'"]?([^\'"\s>]+)[\'"]?([^>]*)>#', sprintf( '<img${1}src="${2}" data-original="${2}"${3}><noscript><img${1}src="${2}"${3}></noscript>', $placeholder_image ), $content );
		$content = preg_replace('/(<img.*? class=".*?)(".*?>)/', '$1 portfolio-lazyLoad$2', $content);
		
		return $content;
		
	}
	
	add_filter( 'the_content', 'thz_add_image_placeholders', 99 );
		
}


