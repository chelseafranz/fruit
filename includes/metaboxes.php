<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'thz_';

global $meta_boxes;

$meta_boxes = array();

global $smof_data;


/* ----------------------------------------------------- */
// Page Sections Metaboxes
/* ----------------------------------------------------- */


/* ----------------------------------------------------- */
// Revolution Slider
/* ----------------------------------------------------- */

$revolutionslider = array();
$revolutionslider[0] = 'No Slider';

if(class_exists('RevSlider')){
    $slider = new RevSlider();
	$arrSliders = $slider->getArrSliders();
	foreach($arrSliders as $revSlider) { 
		$revolutionslider[$revSlider->getAlias()] = $revSlider->getTitle();
	}
}

/* Page Section Background Settings */

$grid_array = array('2 Columns','3 Columns','4 Columns');

$pagebg_type_array = array(
	'image' => 'Image',
	'gradient' => 'Gradient',
	'color' => 'Color'
);


/* ----------------------------------------------------- */
// portfolio Settings
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id' => 'portfoliosettings',
	'title' => 'Page Settings',
	'pages' => array( 'page' ),
	'context' => 'normal',
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
	    array(
			'name'		=> 'Select your page type',
			'id'		=> $prefix . "assign_type",
			'type'		=> 'select',
			'options'	=> array(
			    'select'		=> 'Select a Section',
				'home-section'		=> 'Home Section',
				'video-section'		=> 'Video Section',
				'parallax-section'	=> 'Parallax Section',
				'contact-section'		=> 'Contact Section',
				'recent-section'	  	=> 'Blog Section'
			),
			'multiple'	=> false,
			'std'		=> 'select',
		),	

		array(
			'name'		=> 'Open as a separate page',
			'id'		=> $prefix . 'separate_page',
			'type' => 'checkbox',
			// Value can be 0 or 1
			'std'  => 0,
		),
	
		array(
			'name' => 'Disable page title',
			'id'   => $prefix . "disable_title",
			'type' => 'checkbox',
			// Value can be 0 or 1
			'std'  => 0,
		),
		
		array(
			'name'		=> 'Disable section from menu',
			'id'		=> $prefix . 'disable_section_from_menu',
			'type' => 'checkbox',
			// Value can be 0 or 1
			'std'  => 0,
		),	

		array(
			'name'		=> 'Alternate Page Title',
			'id'		=> $prefix . "alt_title",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

		array(
			'name'		=> 'Page Subtitle',
			'id'		=> $prefix . "subtitle",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),		
		array(
			'name'		=> 'Video background .webm',
			'id'		=> $prefix . "video_parallax_webm",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Link for.webm video format. Example: http://namesite.com/animation.webm </br> Before paste link select "Video Section" from page type.',
		),	
		
		array(
			'name'		=> 'Video background .mp4',
			'id'		=> $prefix . "video_parallax",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Link for.mp4 video format. Example: http://namesite.com/animation.mp4</br> Before paste link select "Video Section" from page type.',
		),
		
		array(
			'name'		=> 'Video background .ogv',
			'id'		=> $prefix . "video_parallax_ogv",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Link for.ogv video format. Example: http://namesite.com/animation.ogv </br> Before paste link select "Video Section" from page type.',
		),	

		array(
			'name'		=> 'Revolution Slider',
			'id'		=> $prefix . "revolutionslider",
			'type'		=> 'select',
			'options'	=> $revolutionslider,
			'multiple'	=> false,
			'desc'		=> 'Select any one of the revolution sliders.',
		)		
	)
);




/* ----------------------------------------------------- */
// Blog Post Metaboxes
/* ----------------------------------------------------- */



/*  Blog Quote Post Settings */

$meta_boxes[] = array(
	'id' => 'thz-blogmeta-quote',
	'title' => 'Quote Settings',
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(	
		array(
			'name'		=> 'Quote',
			'id'		=> $prefix . 'blogquote',
			'desc'		=> 'Enter Quote here.',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
	)
);
/*  Blog Audio Post Settings */

$meta_boxes[] = array(
	'id' => 'thz-blogmeta-audio',
	'title' => 'Audio Settings',
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(	
		array(
			'name'		=> 'Audio Code',
			'id'		=> $prefix . 'blogaudiourl',
			'desc'		=> 'Enter your Audio URL(Oembed) or Embed Code.',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
	)
);

/*  Blog Video Metabox */
$meta_boxes[] = array(
	'id'		=> 'thz-blogmeta-video',
	'title'		=> 'Blog Video Settings',
	'pages'		=> array( 'post' ),
	'context' => 'normal',

	'fields'	=> array(
		array(
			'name'		=> 'Video Type',
			'id'		=> $prefix . 'blog_video_type',
			'type'		=> 'select',
			'options'	=> array(
				'youtube'		=> 'Youtube',
				'vimeo'			=> 'Vimeo',
				'own'			=> 'Embed Code'
			),
			'multiple'	=> false,
			'std'		=> array( 'no' )
		),
		array(
			'name'	=> 'ID of the video',
			'id'	=> $prefix . 'blog_video_embed',
			'desc'	=> 'Just paste the ID of the video (E.g. http://www.youtube.com/watch?v=<strong>D43SAx5bR19</strong>)<br /><strong>Notice:</strong> The Preview Image will be the Image set as Featured Image.',
			'type' 	=> 'text',
			'std' 	=> "",
			'cols' 	=> "40",
			'rows' 	=> "8"
		)
	)
);



/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function thezoc_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'thezoc_register_meta_boxes' );
