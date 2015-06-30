<?php

function thz_shortcodes_formatter($content) {
	$block = join("|",array(
						"button",
						"background_section_color",
						"service_box",
						"service_box_last",
						"service_box_bottom",
						"parallax_twitter",
						"testimonial_slider",
						"testimonial_slide",
						"clients",
						"milestone",
						"icon_feature",
						"pullquote",
						"pricing-options",
						"blockquote",
						"parallax_quote",
						"social",
						"alert_box",
						"skill_bar",
						"tabs",
						"tab_box",
						"callout_box",
						"toggle_box",
						"accordion",
						"accordion_box",
						"map",
						"member",
						"one_third", 
						"one_third_last", 
						"two_third", 
						"two_third_last", 
						"one_half", 
						"one_half_last", 
						"one_fourth", 
						"one_fourth_last", 
						"three_fourth", 
						"three_fourth_last", 
						"one_fifth", 
						"one_fifth_last", 
						"two_fifth", 
						"two_fifth_last", 
						"three_fifth", 
						"three_fifth_last", 
						"four_fifth", 
						"four_fifth_last",
						"one_sixth", 
						"one_sixth_last", 
						"five_sixth", 
						"five_sixth_last",
						"horrizontal_line",
						"center",
						"pre",
						"br",
						"space",
						"clear",
						"typography",
						"highlight",
						"home_callout",
						"home_callout_line",
						"textslide",
						"home_callout2",
						"home_callout2_line",
						"timeline_box",
						"timeline_three",
						"timeline_four"
						));

	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);

	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)/","[/$2]",$rep);

	return $rep;
}

add_filter('the_content', 'thz_shortcodes_formatter');
add_filter('widget_text', 'thz_shortcodes_formatter');


/*-----------------------------------------------------------------------------------*/
/* Button
/*-----------------------------------------------------------------------------------*/	
function thezoc_button( $atts, $content = null ) {	

	extract( shortcode_atts(array(
		"link_url" => '',
		"title" => '',
		"scroll" => '',
		"color" => '',
		"btn_style" => 'default ,hollow or full'
	), $atts) );

	if ( $scroll ){
		$scroll_to = 'scroll-to';
	}
	else{
		$scroll_to = '';
	}
	if ( $btn_style == 'default')
	$thz_button = '<a href="'. $link_url .'" class="button '. $scroll_to .'">'. $title .'</a>';
	
	if ( $btn_style == 'hollow')
	$thz_button = '<a href="'. $link_url .'" class="button-white'. $scroll_to .'"  style="color:'. $color .'; border-color:'. $color .';">'. $title .'</a>';
	
	if ( $btn_style == 'full')
	$thz_button = '<a href="'. $link_url .'" class="button-full'. $scroll_to .'" style="background-color:'. $color .'; border-color:'. $color .';">'. $title .'</a>';
    return $thz_button;  

}

add_shortcode('button', 'thezoc_button');

/*-----------------------------------------------------------------------------------*/
/* Button Round
/*-----------------------------------------------------------------------------------*/	
function thezoc_button_round( $atts, $content = null ) {	

	extract( shortcode_atts(array(
		"link_url" => '',
		"title" => '',
		"scroll" => '',
		"color" => '',
		"btn_style" => 'default, hollow or full'
	), $atts) );

	if ( $scroll ){
		$scroll_to = 'scroll-to';
	}
	else{
		$scroll_to = '';
	}

	if ( $btn_style == 'default')
	$thz_button = '<a href="'. $link_url .'" class="button-round '. $scroll_to .'">'. $title .'</a>';
	else
	if ( $btn_style == 'hollow')
	$thz_button = '<a href="'. $link_url .'" class="button-round-white'. $scroll_to .'"  style="color:'. $color .'; border-color:'. $color .';">'. $title .'</a>';

	if ( $btn_style == 'full')
	$thz_button = '<a href="'. $link_url .'" class="button-round-full'. $scroll_to .'" style="background-color:'. $color .'; border-color:'. $color .';">'. $title .'</a>';
    return $thz_button;  

}

add_shortcode('button_round', 'thezoc_button_round');

/*-----------------------------------------------------------------------------------*/
/* Button gplay
/*-----------------------------------------------------------------------------------*/	
function thezoc_button_gplay( $atts, $content = null ) {	

	extract( shortcode_atts(array(
			"btn_url_gplay" => '#',
			"btn_style" => 'white or black',
			"btn_align" => 'left, right or center'
	    ), $atts) );  
	 
	
	if ( $btn_style == 'white')
   return '<a class="store-button-'.$btn_align.' gplay-white" href="'. $btn_url_gplay .'"></a>';
   else
   if ( $btn_style == 'black')  
   return '<a class="store-button-'.$btn_align.' gplay-black" href="'. $btn_url_gplay .'"></a>';
}

add_shortcode('button_gplay', 'thezoc_button_gplay');

/*-----------------------------------------------------------------------------------*/
/* Button appstore
/*-----------------------------------------------------------------------------------*/	
function thezoc_button_appstore( $atts, $content = null ) {	

	extract( shortcode_atts(array(
			"btn_url_appstore" => '#',
			"btn_style" => 'white or black',
			"btn_align" => 'left, right or center'
	    ), $atts) );  
	 
	
	if ( $btn_style == 'white')
   return '<a class="store-button-'.$btn_align.' appstore-white" href="'. $btn_url_appstore .'"></a>';
   else
   if ( $btn_style == 'black')  
   return '<a class="store-button-'.$btn_align.' appstore-black" href="'. $btn_url_appstore .'"></a>';
}

add_shortcode('button_appstore', 'thezoc_button_appstore');

/*-----------------------------------------------------------------------------------*/
/* Button windows
/*-----------------------------------------------------------------------------------*/	
function thezoc_button_windows( $atts, $content = null ) {	

	extract( shortcode_atts(array(
			"btn_url_windows" => '#',
			"btn_style" => 'white or black',
			"btn_align" => 'left, right or center'
	    ), $atts) );  
	 
	
	if ( $btn_style == 'white')
   return '<a class="store-button-'.$btn_align.' windows-white" href="'. $btn_url_windows .'"></a>';
   else
   if ( $btn_style == 'black')  
   return '<a class="store-button-'.$btn_align.' windows-black" href="'. $btn_url_windows .'"></a>';
}

add_shortcode('button_windows', 'thezoc_button_windows');

/*-----------------------------------------------------------------------------------*/
/* Button blackberry
/*-----------------------------------------------------------------------------------*/	
function thezoc_button_blackberry( $atts, $content = null ) {	

	extract( shortcode_atts(array(
			"btn_url_blackberry" => '#',
			"btn_style" => 'white or black',
			"btn_align" => 'left, right or center'
	    ), $atts) );  
	 
	
	if ( $btn_style == 'white')
   return '<a class="store-button-'.$btn_align.' blackberry-white" href="'. $btn_url_blackberry .'"></a>';
   else
   if ( $btn_style == 'black')  
   return '<a class="store-button-'.$btn_align.' blackberry-black" href="'. $btn_url_blackberry .'"></a>';
}

add_shortcode('button_blackberry', 'thezoc_button_blackberry');


/*-----------------------------------------------------------------------------------*/
/* Full Width Color Boxes
/*-----------------------------------------------------------------------------------*/	
function thezoc_background_section_color( $atts, $content = null ) {
	
extract( shortcode_atts(array(
		"section_number" => '1',
		"bg_color" => '',
		"color" => '#333333',
		'img' 	=> '',
), $atts) );	

   
   $thz_background_section_color = '<div id="full-width-'.$section_number.'" class="full-width" style="color: '. $color .'!important;';
   $thz_background_section_color .= 'background-image: url('. $img .'); background-color: '. $bg_color .';  ';   
   $thz_background_section_color .= '">' . do_shortcode($content) . '</div>';
   
   return $thz_background_section_color;
}

add_shortcode('background_section_color', 'thezoc_background_section_color');
/*-----------------------------------------------------------------------------------*/
/* Double Background Section Color
/*-----------------------------------------------------------------------------------*/	
function thezoc_double_background_section_color( $atts, $content = null ) {
	
extract( shortcode_atts(array(
		
), $atts) );	

   
   $thz_double_background_section_color = '<div>' . do_shortcode($content) . '</div><div class="clear"></div>';
   
   return $thz_double_background_section_color;
}

add_shortcode('double_background_section_color', 'thezoc_double_background_section_color');

/*-----------------------------------------------------------------------------------*/
/* Left Full Width Color Boxes
/*-----------------------------------------------------------------------------------*/	
function thezoc_background_section_color_left( $atts, $content = null ) {
	
extract( shortcode_atts(array(
		"section_number" => '1',
		"bg_color" => '',
		"color" => '#333333',
		'img' 	=> '',
), $atts) );	

   
   $thz_left_background_section_color = '<div id="full-width-left-'.$section_number.'" class="full-width-left" style="color: '. $color .'!important;';
   $thz_left_background_section_color .= 'background-image: url('. $img .'); background-color: '. $bg_color .';';   
   $thz_left_background_section_color .= '">' . do_shortcode($content) . '</div>';
    
   return $thz_left_background_section_color;
}

add_shortcode('background_left_section_color', 'thezoc_background_section_color_left');


/*-----------------------------------------------------------------------------------*/
/* Right Full Width Color Boxes
/*-----------------------------------------------------------------------------------*/	
function thezoc_background_section_color_right( $atts, $content = null ) {
	
extract( shortcode_atts(array(
		"section_number" => '1',
		"bg_color" => '',
		"color" => '#333333',
		"img" 	=> '',
		"position" =>''
		
), $atts) );	

   
   $thz_right_background_section_color = '<div id="full-width-right-'.$section_number.'" class="full-width-right" style="color: '. $color .'!important;';
   $thz_right_background_section_color .= 'background-image: url('. $img .'); background-color: '. $bg_color .';';   
   $thz_right_background_section_color .= '"><div class="right-content">' . do_shortcode($content) . '</div></div><div class="clear"></div>';
    
   return $thz_right_background_section_color;
}

add_shortcode('background_right_section_color', 'thezoc_background_section_color_right');

/*-----------------------------------------------------------------------------------*/
/* Half Full Width Color Boxes
/*-----------------------------------------------------------------------------------*/	
function thezoc_background_section_color_half( $atts, $content = null ) {
	
extract( shortcode_atts(array(
		"section_number" => '1',
		"bg_color" => '',
		"color" => '#333333',
		"img" 	=> '',
		"position" =>''
		
), $atts) );	

   
   $thz_half_background_section_color = '<div id="full-width-'.$position.'-'.$section_number.'" class="full-width-'.$position.'" style="color: '. $color .'!important;';
   $thz_half_background_section_color .= 'background-image: url('. $img .'); background-color: '. $bg_color .';';   
   $thz_half_background_section_color .= '"><div class="'.$position.'-content">' . do_shortcode($content) . '</div></div>';
    
   return $thz_half_background_section_color;
}

add_shortcode('background_half_section_color', 'thezoc_background_section_color_half');



/*-----------------------------------------------------------------------------------*/
/*	Service Box Shortcode
/*-----------------------------------------------------------------------------------*/

function thezoc_service_box_shortcode( $atts, $content = null ){
          
    extract( shortcode_atts(array(
        "icon" => '',        // icon url or icon class
        "title" => '',
		"color" => '',
		"icon_display" =>''
    ), $atts) );    

	$thz_icon_type = '<i class="service-icon-'. $icon_display .' '. $icon .' grow" style="color:'.$color.';"></i>';    	
    
	$thz_service_box = '<div class="service-box">';
	$thz_service_box .= $thz_icon_type;
	$thz_service_box .= '<div class="service-info-'. $icon_display .'">';
	$thz_service_box .= '<h5>'. $title .'</h5>';
	$thz_service_box .= '<div class="service-description-'. $icon_display .'"><p>'. do_Shortcode($content) .'</p></div>';
	$thz_service_box .= '</div>';
	$thz_service_box .= '</div>';

	return $thz_service_box;

}

add_shortcode('service', 'thezoc_service_box_shortcode');



/*-----------------------------------------------------------------------------------*/
/* Parallax Twitter Feed */
/*-----------------------------------------------------------------------------------*/

function thezoc_parallax_tweets($atts) {

	extract( shortcode_atts(array(
        "count" => '3',
        "title" => 'Follow us on Twitter'
    ), $atts) );  
	
	global $smof_data;

	$consumer_key = $smof_data['thz_twitter_consumer_key'];
	$consumer_secret = $smof_data['thz_twitter_cosumer_secret'];
	$access_token = $smof_data['thz_twitter_access_token'];
	$access_token_secret =  $smof_data['thz_twitter_access_token_secret'];
	$twitter_id = $smof_data['thz_twitter_username'];

	if( $twitter_id && $consumer_key && $consumer_secret && $access_token && $access_token_secret && $count ) { 

		$transName = 'list_tweets_1';
		$cacheTime = 10;
		delete_transient($transName);

		if(false === ($twitterData = get_transient($transName))) {

			// require the twitter auth class
			@require_once 'widgets/twitteroauth/twitteroauth.php';

			$twitterConnection = new TwitterOAuth(
				$consumer_key,	// Consumer Key
				$consumer_secret,   	// Consumer secret
				$access_token,       // Access token
				$access_token_secret    	// Access token secret
			);

			$twitterData = $twitterConnection->get(
				'statuses/user_timeline',
				array(
					'screen_name'     => $twitter_id,
					'count'           => $count,
					'exclude_replies' => false
				)
			);

			if($twitterConnection->http_code != 200)
			{
				$twitterData = get_transient($transName);
			}

			// Save our new transient.
			set_transient($transName, $twitterData, 60 * $cacheTime);

		}

		$twitter = get_transient($transName);

		$thz_tweet_feed = '<div>';
		$thz_tweet_feed .= '<p class="twitter-feed-icon"><i class="icon-twitter"></i></p>';
		$thz_tweet_feed .= '<h3 class="twitter-author"><a href="http://twitter.com/'. $twitter_id .'" target="_blank">'. $title .'</a></h3>';
		$thz_tweet_feed .= '</div>';
		$thz_tweet_feed .= '<div class="line-twitter"></div>';
		$thz_tweet_feed .= '<div class="twitter-slider"><div id="twitter-feed"><div class="flexslider">';
		$thz_tweet_feed .= '<ul class="slides">';
		
		foreach($twitter as $tweet): 
		$thz_tweet_feed .= '<li class="slide">';
		$thz_tweet_feed .= '<div class="jtwt_tweet_text">';	
									$latestTweet = $tweet->text;
									$latestTweet = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '&nbsp;<a href="http://$1" target="_blank">http://$1</a>&nbsp;', $latestTweet);
									$latestTweet = preg_replace('/@([a-z0-9_]+)/i', '&nbsp;<a href="http://twitter.com/$1" target="_blank">@$1</a>&nbsp;', $latestTweet);
		$thz_tweet_feed .= $latestTweet . '</div>';
								$twitterTime = strtotime($tweet->created_at);
								$timeAgo = ago($twitterTime);
		$thz_tweet_feed .= '<a href="http://twitter.com/'. $twitter_id .'/statuses/'. $tweet->id_str .'" class="jtwt_date">'. $timeAgo .'</a>';
		$thz_tweet_feed .= '</li>';
		endforeach;

		$thz_tweet_feed .= '</ul></div>';


		$thz_tweet_feed .= '</div></div>';	
	
	}

	else{
		$thz_tweet_feed = '<h4>Configure the Twitter API Settings inside the Theme Options first.</h4>';
	}
	

	return $thz_tweet_feed;

}

add_shortcode('parallax_twitter', 'thezoc_parallax_tweets');



/*-----------------------------------------------------------------------------------*/
/*	Testimonial Slider Box Shortcode, Parallax
/*-----------------------------------------------------------------------------------*/

function thezoc_testimonial_slider_box_shortcode( $atts, $content = null ){
          
    extract( shortcode_atts(array(
        "title" => '',
	
    ), $atts) );   

	$thz_testimonial_slider = '<h3 class="testimonial-title"><span class="testimonial-blank">'. $title .'</span></h3>';
	$thz_testimonial_slider .= '<div class="testimonial-slider">';
	$thz_testimonial_slider .= '<div class="flexslider">';
	$thz_testimonial_slider .= '<ul class="slides styled-list">'. do_Shortcode($content) .'</ul>';
	$thz_testimonial_slider .= '</div>';
	$thz_testimonial_slider .= '</div>';

	return $thz_testimonial_slider;

}

function thezoc_testimonial_slides_shortcode( $atts, $content = null ){
          
    extract( shortcode_atts(array(
        "author" => '',
		"img" => '',
		"details" =>''
    ), $atts) );   

	$thz_testimonial_slides = '<li class="testimonial-slide"><div class="testimonial-imagewrp img-wrp"><img src="'. $img .'"/></div><div class="client-testimonial">'. do_Shortcode($content) .'</div><div class="line-twitter"></div><h5 class="client-info">'. $author .'</h5><div class="client-details">'. $details .'</div></li>';

	return $thz_testimonial_slides;

}

add_shortcode('testimonial_slider', 'thezoc_testimonial_slider_box_shortcode');
add_shortcode('testimonial_slide', 'thezoc_testimonial_slides_shortcode');




/*-----------------------------------------------------------------------------------*/
/*	Image Slider Box Shortcode
/*-----------------------------------------------------------------------------------*/

function thezoc_image_slider_box_shortcode( $atts, $content = null ){
          
    extract( shortcode_atts(array(
        "title" => '',
	
    ), $atts) );   

	$thz_image_slider = '<div class="image-slider">';
	$thz_image_slider .= '<div class="flexslider">';
	$thz_image_slider .= '<ul class="slides styled-list">'. do_Shortcode($content) .'</ul>';
	$thz_image_slider .= '</div>';
	$thz_image_slider .= '</div>';

	return $thz_image_slider;

}

function thezoc_image_slides_shortcode( $atts, $content = null ){
          
    extract( shortcode_atts(array(
       	"img" => '',
		"details" => ''
    ), $atts) );   

	$thz_image_slides = '<li class="image-slide"><div class="image-imagewrp img-wrp"><img src="'. $img .'"/></div></li>';

	return $thz_image_slides;

}

add_shortcode('image_slider', 'thezoc_image_slider_box_shortcode');
add_shortcode('image_slide', 'thezoc_image_slides_shortcode');





/*-----------------------------------------------------------------------------------*/
/* Pricing Table */
/*-----------------------------------------------------------------------------------*/

function thezoc_plan_table( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'name'      => 'Premium',
		'link'      => 'http://www.google.de',
		'linkname'      => 'Sign Up',
		'price'      => '39.00$',
		'per'      => false,
		'featured' => ''
    ), $atts));

    if($featured == true) {
    	$return = "featured";
    }
    else{
	    $return = "";
    }

    if($per != false) {
    	$return3 = "".$per."";
    }
    else{
    	$return3 = "";
    }
	
	$out = "
		<div class='plan ".$return."'>	
			
			<div class='planheader'><h3>".$name."</h3></div>
			<ul class='styled-list'>" .do_shortcode($content). "</ul><div class='price'>".$price." <span>".$return3."</span></div><div class='signup'><a class='button' href='".$link."'>".$linkname."<span></span></a></div>
		    
		</div>";
    return $out;
}
	add_shortcode('plan_table', 'thezoc_plan_table');

/*-----------------------------------------------------------------------------------*/

function thezoc_pricing( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'col'      => '3'
    ), $atts));
	
	$out = "<div class='pricing-table col-".$col."'>" .do_shortcode($content). "</div><div class='clear'></div>";
    return $out;
}
	add_shortcode('pricing-options', 'thezoc_pricing');
	

/*-----------------------------------------------------------------------------------*/
/*	Icon
/*-----------------------------------------------------------------------------------*/

function thezoc_icon($atts, $content = null) {	

	extract( shortcode_atts(array(
        "icon" => '',
		"color" => '',
		"size" => ''
    ), $atts) );  

	return '<div class="icon-content" font-size:'.$size.';"><i class="insert-icon '. $icon .'" style="color:'.$color.'; font-size:'.$size.';"></i>'. do_shortcode($content) . '</div>';

}

add_shortcode('icon', 'thezoc_icon');		

/*-----------------------------------------------------------------------------------*/
/*	Image
/*-----------------------------------------------------------------------------------*/

function thezoc_image($atts, $content = null) {	

	extract( shortcode_atts(array(
        "img" => ''
    ), $atts) );  

	return '<img src="'. $img .'">';

	return $thz_image;
}

add_shortcode('insert_image', 'thezoc_image');

/*-----------------------------------------------------------------------------------*/
/*	Link
/*-----------------------------------------------------------------------------------*/

function thezoc_link($atts, $content = null) {	

	extract( shortcode_atts(array(
        "link" => ''
    ), $atts) );  

	return '<a href="'. $link .'" class="link" >'. do_shortcode($content) . '<i class="link-icon icon-arrow-right "></i></a>';

	return $thz_image;
}

add_shortcode('insert_link', 'thezoc_link');

/*-----------------------------------------------------------------------------------*/
/*	Gallery Image
/*-----------------------------------------------------------------------------------*/

function thezoc_gallery_image($atts, $content = null) {	

	extract( shortcode_atts(array(
        "img" => '',
		'size'  =>  "",
		'name'  =>  ""
    ), $atts) );  

	return '<div class="gallery-image gallery-' .$size. '"><div class="gallery-thumb img-wrp"><a data-rel="prettyPhoto" href="'. $img .'"><span class="rollover" ></span><img src="'. $img .'" class="team-image" alt="'. $name .'" /></a></div></div>';

	return $thz_gallery_image;
}

add_shortcode('gallery_image', 'thezoc_gallery_image');


/*-----------------------------------------------------------------------------------*/
/*	Information
/*-----------------------------------------------------------------------------------*/

function thezoc_information_callout($atts, $content = null) {	


	$thz_information_callout = '<div class="text1">
					<div id="text-quote">
					  <p>'. do_shortcode($content) . '</p>
					</div>
					</div>';   

	return $thz_information_callout;           

}
add_shortcode('information_callout', 'thezoc_information_callout');

/*-----------------------------------------------------------------------------------*/
/* information 1 lines
/*-----------------------------------------------------------------------------------*/	
function thezoc_information_callout_lines( $atts, $content = null ) {	

	extract( shortcode_atts(array(
    		  "title" => '',
			  "btn_title" => 'Get this app on Google Play',
			"btn_url" => '#'
	    ), $atts) );  
	 
	
	
   return '<p class="text-info">'.  do_Shortcode($content).'</p> <div class="text-callout-button"></div>';  

}

add_shortcode('information_callout_line', 'thezoc_information_callout_lines');




/*-----------------------------------------------------------------------------------*/
/*	Clients
/*-----------------------------------------------------------------------------------*/

function thezoc_client($atts, $content = null) {	

	extract( shortcode_atts(array(
        "logo" => '',
        "url" => '#',       
        "title" => ''
    ), $atts) );  

	return '<a href="'. $url .'" title="'. $title .'" class="clients" target="_blank"><img src="'. $logo .'" alt="'. $title .'"></a>';

	return $$thz_client;
}

add_shortcode('client', 'thezoc_client');

function thezoc_clients( $atts, $content = null ){

	return '<div class="client-logos">'. do_shortcode($content) .'</div>';

}

add_shortcode('clients', 'thezoc_clients'); 


/*-----------------------------------------------------------------------------------*/
/*	Milestone Box Shortcode
/*-----------------------------------------------------------------------------------*/
/*function thezoc_milestone_box_shortcode( $atts, $content = null ){
	        
    extract( shortcode_atts(array(
		"icon" => '',        // icon url or icon class
        "count" => '234',       
        "title" => ''
    ), $atts) );   
	
	$thz_icon_type = '<i class="milestone-icon '. $icon .'"></i>';    	
	

	$thz_milestone_box = '<center><div class="milestone-counter" data-perc="'. $count .'">';
	$thz_milestone_box .= $thz_icon_type;
	$thz_milestone_box .= '<div>';
	$thz_milestone_box .= '<span class="milestone-count highlight">'. $count .'</span>';
	$thz_milestone_box .= '<center><div class="milestone-details">'. $title .'</div></center>';
	$thz_milestone_box .= '</div>';
	$thz_milestone_box .= '</div></center>';



    return $thz_milestone_box;

}

add_shortcode('milestone_box', 'thezoc_milestone_box_shortcode');
*/
function thezoc_milestone_box_shortcode( $atts, $content = null ){
          
    extract( shortcode_atts(array(
		"icon" => '',        // icon url or icon class
        "count" => '500',       
        "title" => ''
    ), $atts) );   
	
	$thz_icon_type = '<i class="milestone-icon '. $icon .'"></i>';
	
	$thz_milestone_box  = '<center>'.$thz_icon_type;
	$thz_milestone_box .= '<div class="milestone-counter" data-perc="'. $count .'">';
	$thz_milestone_box .= '<span class="milestone-count highlight">'. $count .'</span>';
	$thz_milestone_box .= '<p class="milestone-details">'. $title .'</p>';
	$thz_milestone_box .= '</div></center>';

    return $thz_milestone_box;

}

add_shortcode('milestone', 'thezoc_milestone_box_shortcode');


/*-----------------------------------------------------------------------------------*/
/*	Icon Box Shortcode
/*-----------------------------------------------------------------------------------*/
  function thezoc_icon_feature_shortcode( $atts, $content = null ){
          
    extract( shortcode_atts(array(
        "icon" => '',        
        "title" => '',
        "icon_type" => 'image'
    ), $atts) );    

    if ( $icon_type == 'image' ) {
    	$thz_icon_type = '<div class="img-container2">';
		$thz_icon_type .= '<img src="'. $icon .'" alt="'. $title .'">';
		$thz_icon_type .= '</div>  ';
    }
    else {
    	$thz_icon_type = '<div class="img-container">';
		$thz_icon_type .= '<i class="'. $icon .'"></i>';
		$thz_icon_type .= '</div>  ';
    }

	
	$thz_icon_feature = '<div class="service-features">';
	$thz_icon_feature .= $thz_icon_type;
	$thz_icon_feature .= '<h3>'. $title .'</h3>';     
	$thz_icon_feature .= '<p>'. do_Shortcode($content) .'</p>';
	$thz_icon_feature .= '</div>';
	

	return $thz_icon_feature;

}

add_shortcode('icon_feature', 'thezoc_icon_feature_shortcode');


/*-----------------------------------------------------------------------------------*/
/* Social Icons 
/*-----------------------------------------------------------------------------------*/

function thezoc_social( $atts, $content = null) {

extract( shortcode_atts( array(
      'icon' 	=> 'twitter',
      'url'		=> '#',
      'target' 	=> '_blank'
      ), $atts ) );
      
      $capital = ucfirst($icon);
      
      return '<div class="social-icon social-' . $icon . '"><a href="' . $url . '" title="' . $capital . '" target="' . $target . '">' . $capital . '</a></div>';
}

add_shortcode('social', 'thezoc_social');




/*-----------------------------------------------------------------------------------*/
/* Parallax Quote */
/*-----------------------------------------------------------------------------------*/

function thezoc_parallaxquote( $atts, $content = null){

	extract( shortcode_atts(array(
        "author" => 'John Doe'
    ), $atts) ); 
	
	$thz_parallaxquote = '<p class="quote">'. do_shortcode($content)  .'</p>';
	
	return $thz_parallaxquote;
}

add_shortcode('quote', 'thezoc_parallaxquote');


/*-----------------------------------------------------------------------------------*/
/*	Alert Boxes
/*-----------------------------------------------------------------------------------*/

function thezoc_alert($atts, $content = null) {	

	extract( shortcode_atts(array(
        "message" => 'Your Message Here',       
        "type" => 'notice' // Notice, Warning, Success, Error, Info
    ), $atts) );  	

	$thz_alerts = '<div class="alert-message '. $type .'">'. $message .'<span class="close" href="#">x</span></div>';   

	return $thz_alerts;           

}

add_shortcode('alert', 'thezoc_alert');


/*-----------------------------------------------------------------------------------*/
/*	Skill Bar
/*-----------------------------------------------------------------------------------*/

function thezoc_skill_bars($atts, $content = null) {	

	extract( shortcode_atts(array(
        "percentage" => '50',       
        "title" => ''
    ), $atts) );  

	$thz_skill = '<div class="skillbar" data-perc="'. $percentage .'">';
	$thz_skill .= '<div class="skill-title">'. $title .'</div>';
	$thz_skill .= '<div class="skill-percentage"></div>';
	$thz_skill .= '</div>';

	return $thz_skill;                  

}

add_shortcode('skill', 'thezoc_skill_bars');


/*-----------------------------------------------------------------------------------*/
/*	Tabs
/*-----------------------------------------------------------------------------------*/

function thezoc_tabs( $atts, $content = null ) {
	$GLOBALS['tab_count'] = 0;
	$i = 1;
	$randomid = rand();

	do_shortcode( $content );

	if( is_array( $GLOBALS['tabs'] ) ){
	
		foreach( $GLOBALS['tabs'] as $tab ){	
			if( $tab['icon'] != '' ){
				$icon = '<i class="'.$tab['icon'].'"></i>';
			}
			else{
				$icon = '';
			}
			$tabs[] = '<li class="tab"><a href="#panel'.$randomid.$i.'">'.$icon . $tab['title'].'</a></li>';
			$panes[] = '<div class="panel" id="panel'.$randomid.$i.'"><p>'.$tab['content'].'</p></div>';
			$i++;
			$icon = '';
		}
		$return = '<div class="tabset"><ul class="tabs styled-list">'.implode( "\n", $tabs ).'</ul>'.implode( "\n", $panes ).'</div>';
	}
	return $return;
}
add_shortcode( 'tabs', 'thezoc_tabs' );

function thezoc_tab_box( $atts, $content = null) {
	extract(shortcode_atts(array(
			'title' => '',
			'icon'  => ''
	), $atts));
	
	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'icon' => $icon, 'content' =>  do_shortcode($content) );
	$GLOBALS['tab_count']++;
}
add_shortcode( 'tab_box', 'thezoc_tab_box' );
/*-----------------------------------------------------------------------------------*/
/* Google Maps
/*-----------------------------------------------------------------------------------*/

function thezoc_googlemap( $atts, $content = null ){

	extract( shortcode_atts(array(
			      "width" => '100%',
				  "height" => '330px',
				  "url" => '#'
	), $atts) );  
	
	$thz_googlemap = '<div class="thz-google-map"><iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'. $url .'&amp;output=embed"></iframe></div>';
	
	return $thz_googlemap;

}

add_shortcode('map', 'thezoc_googlemap');


/*-----------------------------------------------------------------------------------*/
/* Callout Box
/*-----------------------------------------------------------------------------------*/

function thezoc_callout_box_shortcode( $atts, $content = null ){

	extract( shortcode_atts(array(
			"title" => 'Callout Title',
			"btn_title" => 'Purchase Now',
			"btn_url" => '#'
	), $atts) );  
	
	$thz_callout_box = '<div class="callout clearfix">';
	$thz_callout_box .= '<div class="callout-content">';
	$thz_callout_box .= '<h3 class="highlight">'. $title .'</h3>';
	$thz_callout_box .= '<p class="lead">' . do_shortcode($content) . '</p></div>';
	$thz_callout_box .= '<div class="callout-button">';
	$thz_callout_box .= '<a class="button-call large" href="'. $btn_url .'" target="_blank">'. $btn_title .'</a>';
	$thz_callout_box .= '</div>';
	$thz_callout_box .= '</div>';

	return $thz_callout_box;

}

add_shortcode('callout_box', 'thezoc_callout_box_shortcode');


/*-----------------------------------------------------------------------------------*/
/* Toggle Item
/*-----------------------------------------------------------------------------------*/

function thezoc_toggle_box_shortcode( $atts, $content = null ){

	extract( shortcode_atts(array(
			"title" => 'Accordion Title',
			"open" => '0'
	), $atts) );  
	
	if ( $open == '1' || $open == 'yes') {
		$active = 'active';
	}
	else{
		$active = '';
	}

	$thz_toggle_box_item = '<div class="toggle">';
	$thz_toggle_box_item .= '<div class="toggle-title '. $active .'">';
	$thz_toggle_box_item .= '<h3>';
	$thz_toggle_box_item .= '<i></i>';
	$thz_toggle_box_item .= '<span class="title-name">'. $title .'</span>';
	$thz_toggle_box_item .= '</h3>';
	$thz_toggle_box_item .= '</div>';
	$thz_toggle_box_item .= '<div class="toggle-inner">';
	$thz_toggle_box_item .= '<p>' . do_shortcode($content) . '</p>';
	$thz_toggle_box_item .= '</div>';
	$thz_toggle_box_item .= '</div><!-- END OF TOGGLE -->';

	return $thz_toggle_box_item;

}

add_shortcode('toggle_box', 'thezoc_toggle_box_shortcode');


/*-----------------------------------------------------------------------------------*/
/* Accordions
/*-----------------------------------------------------------------------------------*/

/* ACCORDION BLOCK */
function thezoc_accordion_shortcode( $atts, $content = null ){
		
	$thz_accordion = '<div class="accordion" rel="1">  ' . do_shortcode($content) . '</div>';
	
	return $thz_accordion;

}

add_shortcode('accordion', 'thezoc_accordion_shortcode');


/* ACCORDION ITEM */
function thezoc_accordion_box_shortcode( $atts, $content = null ){

	extract( shortcode_atts(array(
			"title" => 'Accordion Title'
	), $atts) );  
	
    $thz_acc_item = '<div class="accordion-title">';
	$thz_acc_item .= '<h3><span></span><a href="#">'. $title .'</a></h3>';
	$thz_acc_item .= '</div>';
	$thz_acc_item .= '<div class="accordion-inner">' . do_shortcode($content) . '</div>';
	
	return $thz_acc_item;

}

add_shortcode('accordion_box', 'thezoc_accordion_box_shortcode');


/*-----------------------------------------------------------------------------------*/
/*	Team Member
/*-----------------------------------------------------------------------------------*/

function thezoc_member( $atts, $content = null) {
	extract( shortcode_atts( array(
		'img' 	=> '',
		'name' 	=> '',
		'role'	=> '',
		'description'	=> '',
		'size'  =>  ""
    ), $atts ) );

$randomid = rand();

$thz_team_member  = '<div class="team-member team-' .$size. '">';
$thz_team_member .= '<div class="team-thumb img-wrp">';
$thz_team_member .= '<img src="'. $img .'" class="team-image" alt="'. $name .'" />';
$thz_team_member .= '<div class="team-overlay">';
$thz_team_member .= '<div class="img-overlay"></div>';
$thz_team_member .= '<div class="overlay-content"> ';                           
$thz_team_member .= '<div class="member-social">'.do_shortcode($content).'</div> ';


$thz_team_member .= '</div>';
$thz_team_member .= '</div>';
$thz_team_member .= '</div>';

$thz_team_member .= '<div class="team-desc">';
$thz_team_member .= '<h3 class="name-header">'. $name .'</h3>';
$thz_team_member .= '<p class="role-header">'. $role .'</p>';
$thz_team_member .= '<p class="member-description">'. $description .'</p> ';

$thz_team_member .= '</div>';


	  $thz_team_member .= '</div>';  

return $thz_team_member;

}

add_shortcode('member', 'thezoc_member');
/*-----------------------------------------------------------------------------------*/
/*	Animation slideRight
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_slideright( $atts, $content = null ) {

   $thz_animation_slideright = '<div class="animation_slideright slideRight" ';
   $thz_animation_slideright.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_slideright;
}

add_shortcode('animation_slideright', 'thezoc_animation_slideright');

/*-----------------------------------------------------------------------------------*/
/*	Animation slideLeft
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_slideleft( $atts, $content = null ) {

   $thz_animation_slideleft = '<div class="animation_slideleft slideLeft" ';
   $thz_animation_slideleft.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_slideleft;
}

add_shortcode('animation_slideleft', 'thezoc_animation_slideleft');

/*-----------------------------------------------------------------------------------*/
/*	Animation slideUp
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_slideup( $atts, $content = null ) {

   $thz_animation_slideup = '<div class="animation_slideup slideUp" ';
   $thz_animation_slideup.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_slideup;
}

add_shortcode('animation_slideup', 'thezoc_animation_slideup');

/*-----------------------------------------------------------------------------------*/
/*	Animation slideDown
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_slidedown( $atts, $content = null ) {

   $thz_animation_slidedown = '<div class="animation_slidedown slideDown" ';
   $thz_animation_slidedown.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_slidedown;
}

add_shortcode('animation_slidedown', 'thezoc_animation_slidedown');

/*-----------------------------------------------------------------------------------*/
/*	Animation slideExpandUp
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_slideexpandup( $atts, $content = null ) {

   $thz_animation_slideexpandup = '<div class="animation_slideexpandup slideExpandUp" ';
   $thz_animation_slideexpandup.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_slideexpandup;
}

add_shortcode('animation_slideexpandup', 'thezoc_animation_slideexpandup');

/*-----------------------------------------------------------------------------------*/
/*	Animation fadeIn
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_fadein( $atts, $content = null ) {

   $thz_animation_fadein = '<div class="animation_fadein fadeIn" ';
   $thz_animation_fadein.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_fadein;
}

add_shortcode('animation_fadein', 'thezoc_animation_fadein');
/*-----------------------------------------------------------------------------------*/
/*	Animation fadeInUp
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_fadeInUp( $atts, $content = null ) {

   $thz_animation_fadeInUp = '<div class="animation_fadeInUp fadeInUp" ';
   $thz_animation_fadeInUp.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_fadeInUp;
}

add_shortcode('animation_fadeInUp', 'thezoc_animation_fadeInUp');


/*-----------------------------------------------------------------------------------*/
/*	Animation fadeInDown
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_fadeInDown( $atts, $content = null ) {

   $thz_animation_fadeInDown = '<div class="animation_fadeInDown fadeInDown" ';
   $thz_animation_fadeInDown.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_fadeInDown;
}

add_shortcode('animation_fadeInDown', 'thezoc_animation_fadeInDown');


/*-----------------------------------------------------------------------------------*/
/*	Animation flipInX
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_flipInX( $atts, $content = null ) {

   $thz_animation_flipInX = '<div class="animation_flipInX flipInX" ';
   $thz_animation_flipInX.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_flipInX;
}

add_shortcode('animation_flipInX', 'thezoc_animation_flipInX');



/*-----------------------------------------------------------------------------------*/
/*	Animation flipInY
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_flipInY( $atts, $content = null ) {

   $thz_animation_flipInY = '<div class="animation_flipInY flipInY" ';
   $thz_animation_flipInY.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_flipInY;
}

add_shortcode('animation_flipInY', 'thezoc_animation_flipInY');



/*-----------------------------------------------------------------------------------*/
/*	Animation fadeInsimple
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_fadeInsimple( $atts, $content = null ) {

   $thz_animation_fadeInsimple = '<div class="animation_fadeInsimple fadeInsimple" ';
   $thz_animation_fadeInsimple.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_fadeInsimple;
}

add_shortcode('animation_fadeInsimple', 'thezoc_animation_fadeInsimple');

/*-----------------------------------------------------------------------------------*/
/*	Animation slideLeftsimple
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_slideLeftsimple( $atts, $content = null ) {

   $thz_animation_slideLeftsimple = '<div class="animation_slideLeftsimple slideLeftsimple" ';
   $thz_animation_slideLeftsimple.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_slideLeftsimple;
}

add_shortcode('animation_slideLeftsimple', 'thezoc_animation_slideLeftsimple');

/*-----------------------------------------------------------------------------------*/
/*	Animation slideRightsimple
/*-----------------------------------------------------------------------------------*/
function thezoc_animation_slideRightsimple( $atts, $content = null ) {

   $thz_animation_slideRightsimple = '<div class="animation_slideRightsimple slideRightsimple" ';
   $thz_animation_slideRightsimple.= '>' . do_shortcode($content) . '</div>';
   
   return $thz_animation_slideRightsimple;
}

add_shortcode('animation_slideRightsimple', 'thezoc_animation_slideRightsimple');


/*-----------------------------------------------------------------------------------*/
/*	Columns
/*-----------------------------------------------------------------------------------*/
function thezoc_one_third( $atts, $content = null ) {

   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}

function thezoc_one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}

function thezoc_two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}

function thezoc_one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}

function thezoc_one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}

function thezoc_three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_one_fifth( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}

function thezoc_one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_two_fifth( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}

function thezoc_two_fifth_last( $atts, $content = null ) {
   return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_three_fifth( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}

function thezoc_three_fifth_last( $atts, $content = null ) {
   return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_four_fifth( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}

function thezoc_four_fifth_last( $atts, $content = null ) {
   return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_one_sixth( $atts, $content = null ) {
   return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}

function thezoc_one_sixth_last( $atts, $content = null ) {
   return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function thezoc_five_sixth( $atts, $content = null ) {
   return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}

function thezoc_five_sixth_last( $atts, $content = null ) {
   return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('one_third', 'thezoc_one_third');
add_shortcode('one_third_last', 'thezoc_one_third_last');
add_shortcode('two_third', 'thezoc_two_third');
add_shortcode('two_third_last', 'thezoc_two_third_last');
add_shortcode('one_half', 'thezoc_one_half');
add_shortcode('one_half_last', 'thezoc_one_half_last');
add_shortcode('one_fourth', 'thezoc_one_fourth');
add_shortcode('one_fourth_last', 'thezoc_one_fourth_last');
add_shortcode('three_fourth', 'thezoc_three_fourth');
add_shortcode('three_fourth_last', 'thezoc_three_fourth_last');
add_shortcode('one_fifth', 'thezoc_one_fifth');
add_shortcode('one_fifth_last', 'thezoc_one_fifth_last');
add_shortcode('two_fifth', 'thezoc_two_fifth');
add_shortcode('two_fifth_last', 'thezoc_two_fifth_last');
add_shortcode('three_fifth', 'thezoc_three_fifth');
add_shortcode('three_fifth_last', 'thezoc_three_fifth_last');
add_shortcode('four_fifth', 'thezoc_four_fifth');
add_shortcode('four_fifth_last', 'thezoc_four_fifth_last');
add_shortcode('one_sixth', 'thezoc_one_sixth');
add_shortcode('one_sixth_last', 'thezoc_one_sixth_last');
add_shortcode('five_sixth', 'thezoc_five_sixth');
add_shortcode('five_sixth_last', 'thezoc_five_sixth_last');


/*-----------------------------------------------------------------------------------*/
/* Container
/*-----------------------------------------------------------------------------------*/

function thezoc_container( $atts, $content = null ) {
   return '<div class="container clearfix">' . do_shortcode($content) . '</div>';
}

add_shortcode('container', 'thezoc_container');


/*-----------------------------------------------------------------------------------*/
/* Align Center
/*-----------------------------------------------------------------------------------*/

function thezoc_align_center( $atts, $content = null ) {
   return '<div class="aligncenter">' . do_shortcode($content) . '</div>';
}

add_shortcode('center', 'thezoc_align_center');

/*-----------------------------------------------------------------------------------*/
/* Horizontal Line
/*-----------------------------------------------------------------------------------*/

function thezoc_horrizontal_line( $atts, $content = null ) {
	
extract( shortcode_atts( array(
      'display' 	=> 'left',
	   'color' 	=> ''
      ), $atts ) );
	
	$thz_horrizontal_line = '<div class="hr" style="float:'.$display.'; background-color:'.$color.'; "></div><div class="clear"></div>';
	
   return $thz_horrizontal_line;
}

add_shortcode('horizontal_line', 'thezoc_horrizontal_line');


/*-----------------------------------------------------------------------------------*/
/* Preformatted Boxes
/*-----------------------------------------------------------------------------------*/

function thezoc_pre_box( $atts, $content = null ){	

return '<pre>' . $content . '</pre>';

}

add_shortcode('pre', 'thezoc_pre_box');

/*-----------------------------------------------------------------------------------*/
/*	Br-Tag
/*-----------------------------------------------------------------------------------*/

function thezoc_br() {
   return '<br />';
}

 add_shortcode('br', 'thezoc_br');



/*-----------------------------------------------------------------------------------*/
/*	Space Dividers
/*-----------------------------------------------------------------------------------*/

function thezoc_space( $atts, $content = null) {

extract( shortcode_atts( array(
      'height' 	=> '30'
      ), $atts ) );
      
      if($height == '') {
		  $thz_space_height = '';
	  }
	  else{
		  $thz_space_height = 'style="height: '.$height.'px;"';
	  }
      
      return '<div class="space" ' . $thz_space_height . '></div>';
}

add_shortcode('space', 'thezoc_space');

/*-----------------------------------------------------------------------------------*/
/*	Clear-Tag
/*-----------------------------------------------------------------------------------*/

function thezoc_clear() {  
    return '<div class="clear"></div>';  
}

add_shortcode('clear', 'thezoc_clear');

/*-----------------------------------------------------------------------------------*/
/*	Custom Typography 
/*-----------------------------------------------------------------------------------*/

function thezoc_typography( $atts, $content = null) {
extract( shortcode_atts( array(
      	'font' => 'Oswald',
      	'size' => '42px',
      	'margin' => '0px',
      	'weight' => '400'
      ), $atts ) );
	  
	  global $thezoc_fonts_regular;
	  
	  if(!in_array($font,$thezoc_fonts_regular)) {
	  
      $google = preg_replace("/ /","+",$font);
      
     $typography = '<link href="http://fonts.googleapis.com/css?family='.$google.'" rel="stylesheet" type="text/css">';
	 
	  } else { $typography = '';}
      		return	$typography.'<div class="custom-typography" style="font-family:\'' .$font. '\', serif !important; font-size:' .$size. ' !important; margin: ' .$margin. ' !important; font-weight:' .$weight .'">' . do_shortcode($content) . '</div>';

}

add_shortcode('typography', 'thezoc_typography');

/*-----------------------------------------------------------------------------------*/
/*	Timeline Three Black
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_three_black($atts, $content = null) {	
	
	extract( shortcode_atts(array(
    ), $atts) ); 
	
	$thz_timeline_three_black = '<div class="our-process proc3level">'. do_shortcode($content) . '</div>';  

	return $thz_timeline_three_black;           

}

add_shortcode('timeline_three_black', 'thezoc_timeline_three_black');

/*-----------------------------------------------------------------------------------*/
/*	Timeline Three White
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_three_white($atts, $content = null) {	
	
	extract( shortcode_atts(array(
    ), $atts) ); 
	
	$thz_timeline_three_white = '<div class="our-process-white proc3level">'. do_shortcode($content) . '</div>';  

	return $thz_timeline_three_white;           

}

add_shortcode('timeline_three_white', 'thezoc_timeline_three_white');

/*-----------------------------------------------------------------------------------*/
/*	Timeline Four White
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_four_white($atts, $content = null) {	
	
	extract( shortcode_atts(array(
		"color" => ''
    ), $atts) ); 
	
	$thz_timeline_four_white = '<div class="our-process-white proc4level">'. do_shortcode($content) . '</div>';  

	return $thz_timeline_four_white;           

}

add_shortcode('timeline_four_white', 'thezoc_timeline_four_white');
/*-----------------------------------------------------------------------------------*/
/*	Timeline Three Dark
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_three_dark($atts, $content = null) {	
	
	extract( shortcode_atts(array(
    ), $atts) ); 
	
	$thz_timeline_three_dark = '<div class="our-process-dark proc3level">'. do_shortcode($content) . '</div>';  

	return $thz_timeline_three_dark;           

}

add_shortcode('timeline_three_dark', 'thezoc_timeline_three_dark');

/*-----------------------------------------------------------------------------------*/
/*	Timeline Four Dark
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_four_dark($atts, $content = null) {	
	
	extract( shortcode_atts(array(
		"color" => ''
    ), $atts) ); 
	
	$thz_timeline_four_dark = '<div class="our-process-dark proc4level">'. do_shortcode($content) . '</div>';  

	return $thz_timeline_four_dark;           

}

add_shortcode('timeline_four_dark', 'thezoc_timeline_four_dark');


/*-----------------------------------------------------------------------------------*/
/*	Timeline Four Black
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_four_black($atts, $content = null) {	
	
	extract( shortcode_atts(array(
		"color" => ''
    ), $atts) ); 
	
	$thz_timeline_four_black = '<div class="our-process proc4level">'. do_shortcode($content) . '</div>';  

	return $thz_timeline_four_black;           

}

add_shortcode('timeline_four_black', 'thezoc_timeline_four_black');

/*-----------------------------------------------------------------------------------*/
/*	Timeline Box Black
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_box_black($atts, $content = null) {	
	
	extract( shortcode_atts(array(
        "day" => '',
		"month" => '',
		"title" => ''
    ), $atts) ); 
	
	$thz_timeline_box_black = '<div class="our-process-item">
								<div class="date-circle">
									<div class="day-timeline">'.$day.'</div>
									<div class="month-timeline">'.$month.'</div>
								</div>
							<div class="our-process-content">
								<h3>'.$title.'</h3><p>'. do_shortcode($content) . '</p></div>
						</div>
						';  

	return $thz_timeline_box_black;           

}

add_shortcode('timeline_box_black', 'thezoc_timeline_box_black');



/*-----------------------------------------------------------------------------------*/
/*	Timeline Box White
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_box_white($atts, $content = null) {	
	
	extract( shortcode_atts(array(
        "day" => '',
		"month" => '',
		"title" => ''
    ), $atts) ); 
	
	$thz_timeline_box_white = '<div class="our-process-item-white">
								<div class="date-circle-white">
									<div class="day-timeline">'.$day.'</div>
									<div class="month-timeline">'.$month.'</div>
								</div>
							<div class="our-process-content-white">
								<h3>'.$title.'</h3><p>'. do_shortcode($content) . '</p></div>
						</div>
						';  

	return $thz_timeline_box_white;           

}

add_shortcode('timeline_box_white', 'thezoc_timeline_box_white');

/*-----------------------------------------------------------------------------------*/
/*	Timeline Box Dark
/*-----------------------------------------------------------------------------------*/

function thezoc_timeline_box_dark($atts, $content = null) {	
	
	extract( shortcode_atts(array(
        "day" => '',
		"month" => '',
		"title" => ''
    ), $atts) ); 
	
	$thz_timeline_box_dark = '<div class="our-process-item-dark">
								<div class="date-circle-dark">
									<div class="day-timeline">'.$day.'</div>
									<div class="month-timeline">'.$month.'</div>
								</div>
							<div class="our-process-content-dark">
								<h3>'.$title.'</h3><p>'. do_shortcode($content) . '</p></div>
						</div>
						';  

	return $thz_timeline_box_dark;           

}

add_shortcode('timeline_box_dark', 'thezoc_timeline_box_dark');



/*-----------------------------------------------------------------------------------*/
/* Highlight
/*-----------------------------------------------------------------------------------*/	
function thezoc_highlight( $atts, $content = null ) {	

   return '<span class="highlight">'. do_shortcode($content) . '</span>';  

}

add_shortcode('highlight', 'thezoc_highlight');

/*-----------------------------------------------------------------------------------*/
/*	Home 1
/*-----------------------------------------------------------------------------------*/

function thezoc_home_callout($atts, $content = null) {	
	
	extract( shortcode_atts(array(
        "img" => ''
    ), $atts) ); 

	$thz_home_callout = '<div class="container clearfix home1">
					<div class= "seven columns">
					<div id="home-quote">
					  <div>'. do_shortcode($content) . '</div>
					</div>
					</div>
					<div id="image-container" class="eight columns">
					<div id="home-image">
					<img src="'. $img .'">
					</div>
					</div>
				 </div>';   

	return $thz_home_callout;           

}

add_shortcode('home_callout', 'thezoc_home_callout');

/*-----------------------------------------------------------------------------------*/
/* Home 1 lines
/*-----------------------------------------------------------------------------------*/	
function thezoc_home_callout_lines( $atts, $content = null ) {	

	extract( shortcode_atts(array(
			  "img" => '',
    		  "title" => '',
			  "subtitle" => '',
			 "style" => 'black or white'
	    ), $atts) );  
	 
	
	if ($style == 'white' )
   return '<p class="home-title">'. $title .'</p><p class="home-subtitle">'. $subtitle .'</p><p class="home-info">'.  do_Shortcode($content).'</p> <div class="home-callout-button"></div>';  
   
   if ($style == 'black' )
return '<p class="home-title black">'. $title .'</p><p class="home-subtitle black">'. $subtitle .'</p><p class="home-info black">'.  do_Shortcode($content).'</p> <div class="home-callout-button"></div>'; 

}

add_shortcode('home_callout_line', 'thezoc_home_callout_lines');


/*-----------------------------------------------------------------------------------*/
/*	Home 2
/*-----------------------------------------------------------------------------------*/

function thezoc_home_callout2($atts, $content = null) {	
	

	$thz_home_callout2 = '<div class="container clearfix home2">
					<div class="home-quote2">
					  <div>'. do_shortcode($content) . '</div>
					</div>
				 </div>';   

	return $thz_home_callout2;           

}

add_shortcode('home_callout2', 'thezoc_home_callout2');

/*-----------------------------------------------------------------------------------*/
/* Home 2 lines
/*-----------------------------------------------------------------------------------*/	
function thezoc_home_callout_lines2( $atts, $content = null ) {	

	extract( shortcode_atts(array(
			  "img" => '',
    		  "title" => '',
			"btn_url" => '#',
			"style" => 'black or white'
	    ), $atts) );  
	 
	
	if ($style == 'white')
   return '<div class="logo-container2"><center><img src="'. $img .'"></center></div><h1 class="home-title2">'. $title .'</h1><center><h2 class="home-info2">'.  do_Shortcode($content).'</h2></center>';
   if ($style == 'black')
   return '<div class="logo-container2"><center><img src="'. $img .'"></center></div><h1 class="home-title2 black">'. $title .'</h1><center><h2 class="home-info2 black">'.  do_Shortcode($content).'</h2></center>';  

}

add_shortcode('home_callout_line2', 'thezoc_home_callout_lines2');