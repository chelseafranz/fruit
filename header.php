<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  user-scalable=no">

<!-- Website title -->
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<?php global $smof_data; ?>

<!-- Mobile Metas and Favourite icons -->
<?php if($smof_data['thz_favicon_url'] != "") { ?><link rel="shortcut icon" href="<?php echo $smof_data['thz_favicon_url']; ?>"><?php } ?>

<!-- WordPress Stuff -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<!-- Google Web Fonts -->
<?php get_template_part( 'includes/googlefonts'); ?>
        
<?php wp_head(); ?>
<!-- wp_head() -->

        <!-- Padding Sticky Header If User Is Logged In-->
		<?php if ( is_user_logged_in() ) { ?>
        <style type="text/css">
		 
		    
			  .navigation{margin-top:28px;}
			 
		      
			   @media only screen and (min-width: 960px) and (max-width: 980px) {
			  
			   .navigation{margin-top:28px;}
			   }
		 
		 	   @media only screen and (min-width: 768px) and (max-width: 959px) {
			   .navigation{margin-top:28px;}
			   }
		 
		       @media only screen and (max-width: 767px) {
             .navigation{margin-top:0px;}
			   }
			   
         </style>

		<?php } // end if ?>
        
</head>

<body <?php body_class('onepage'); ?> data-spy="scroll" data-target=".navigation">
 <div id="load"></div>
 	<nav id="navid" class="pushy pushy-left">
              <?php 
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => '',
                  'fallback_cb' => 'show_top_menu',
                  'menu_class' => 'main-menu large nav sf-menu sf-js-enabled',
                  'menu_id' => 'nav',
                  'echo' => true,
                  'walker' => new description_walker(),
                  'depth' => 0 
                )); 
              ?>
			</nav>
 <div class="site-overlay"></div>
  
     <!-- START PAGE WRAP -->    
    <div class="page-wrap">
     <!-- HEADER SECTION -->	

<div id="containerslider">