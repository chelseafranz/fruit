<?php
/*
Plugin Name: ThezocShortcodes
Description: A simple shortcode generator. Add buttons, columns, tabs, toggles and alerts to your theme.
Version: 1.1
Author: Thezoc Company
Author URI: http://thezoc.com
*/

class ThezocShortcodes {

    function __construct() 
    {	
    	define('THZ_TINYMCE_URI', get_template_directory_uri() .'/includes/tinymce');
		define('THZ_TINYMCE_DIR', get_template_directory_uri() .'/includes/tinymce');
		
        add_action('init', array(&$this, 'init'));
        add_action('admin_init', array(&$this, 'admin_init'));
	}
	
	/**
	 * Registers TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function init()
	{
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	
		if ( get_user_option('rich_editing') == 'true' )
		{
			add_filter( 'mce_external_plugins', array(&$this, 'add_rich_plugins') );
			add_filter( 'mce_buttons', array(&$this, 'register_rich_buttons') );
		}
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Defins TinyMCE rich editor js plugin
	 *
	 * @return	void
	 */
	function add_rich_plugins( $plugin_array )
	{
		$plugin_array['thz_button'] = THZ_TINYMCE_URI . '/plugin.js';
		return $plugin_array;
	}
	
	
	
	// --------------------------------------------------------------------------
	
	/**
	 * Adds TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function register_rich_buttons( $buttons )
	{
		array_push( $buttons, "|", 'thz_button' );
		return $buttons;
	}


	/**
	 * Enqueue Scripts and Styles
	 *
	 * @return	void
	 */
	function admin_init()
	{	
		wp_localize_script( 'jquery', 'Thezoc', array('plugin_folder' => THZ_TINYMCE_URI ) );
	}


    
}
$thz_shortcodes = new ThezocShortcodes();

?>