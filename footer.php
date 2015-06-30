<?php global $smof_data; ?>

      <!-- Start copyright section -->   	
  <div class="copyright aligncenter">
     <div class="container clearfix"> <!-- Start container section --> 
        <div class="sixteen columns">   
        <div class="copyright-logo"> <!-- Start copyright logo --> 
           <?php if($smof_data['thz_footer_logo_url'] != "") { ?>
						<a href="<?php echo home_url(); ?>/">
                         <img src="<?php echo $smof_data['thz_footer_logo_url']; ?>" 
                              alt="<?php bloginfo('name'); ?>" />
                       </a>
		   <?php } ?>
        </div> <!-- End copyright logo -->   
           <div class="social-icons">

<?php if($smof_data['thz_social_behance'] != "") { ?>
    <div class="social-icon social-behance"><a href="<?php echo $smof_data['thz_social_behance']; ?>" target="_blank" title="<?php _e( 'Behance', 'thezoc' ) ?>"><?php _e( 'Behance', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_grooveshark'] != "") { ?>
    <div class="social-icon social-grooveshark"><a href="<?php echo $smof_data['thz_social_grooveshark']; ?>" target="_blank" title="<?php _e( 'Grooveshark', 'thezoc' ) ?>"><?php _e( 'Grooveshark', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_html5'] != "") { ?>
    <div class="social-icon social-html5"><a href="<?php echo $smof_data['thz_social_html5']; ?>" target="_blank" title="<?php _e( 'Html5', 'thezoc' ) ?>"><?php _e( 'Html5', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_blogger'] != "") { ?>
    <div class="social-icon social-blogger"><a href="<?php echo $smof_data['thz_social_blogger']; ?>" target="_blank" title="<?php _e( 'Blogger', 'thezoc' ) ?>"><?php _e( 'Blogger', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_email'] != "") { ?>
    <div class="social-icon social-email"><a href="<?php echo $smof_data['thz_social_email']; ?>" target="_blank" title="<?php _e( 'Email', 'thezoc' ) ?>"><?php _e( 'Email', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_delicious'] != "") { ?>
    <div class="social-icon social-delicious"><a href="<?php echo $smof_data['thz_social_delicious']; ?>" target="_blank" title="<?php _e( 'Delicious', 'thezoc' ) ?>"><?php _e( 'Delicious', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_deviantart'] != "") { ?>
    <div class="social-icon social-deviantart"><a href="<?php echo $smof_data['thz_social_deviantart']; ?>" target="_blank" title="<?php _e( 'Deviantart', 'thezoc' ) ?>"><?php _e( 'Deviantart', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_aim'] != "") { ?>
    <div class="social-icon social-aim"><a href="<?php echo $smof_data['thz_social_aim']; ?>" target="_blank" title="<?php _e( 'Aim', 'thezoc' ) ?>"><?php _e( 'Aim', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_apple'] != "") { ?>
    <div class="social-icon social-apple"><a href="<?php echo $smof_data['thz_social_apple']; ?>" target="_blank" title="<?php _e( 'Apple', 'thezoc' ) ?>"><?php _e( 'Apple', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_ember'] != "") { ?>
    <div class="social-icon social-ember"><a href="<?php echo $smof_data['thz_social_ember']; ?>" target="_blank" title="<?php _e( 'Ember', 'thezoc' ) ?>"><?php _e( 'Ember', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_google'] != "") { ?>
    <div class="social-icon social-google"><a href="<?php echo $smof_data['thz_social_google']; ?>" target="_blank" title="<?php _e( 'Google', 'thezoc' ) ?>"><?php _e( 'Google', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_facebook'] != "") { ?>
    <div class="social-icon social-facebook"><a href="<?php echo $smof_data['thz_social_facebook']; ?>" target="_blank" title="<?php _e( 'Facebook', 'thezoc' ) ?>"><?php _e( 'Facebook', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_flickr'] != "") { ?>
    <div class="social-icon social-flickr"><a href="<?php echo $smof_data['thz_social_flickr']; ?>" target="_blank" title="<?php _e( 'Flickr', 'thezoc' ) ?>"><?php _e( 'Flickr', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_digg'] != "") { ?>
    <div class="social-icon social-digg"><a href="<?php echo $smof_data['thz_social_digg']; ?>" target="_blank" title="<?php _e( 'Digg', 'thezoc' ) ?>"><?php _e( 'Digg', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_dribbble'] != "") { ?>
    <div class="social-icon social-dribbble"><a href="<?php echo $smof_data['thz_social_dribbble']; ?>" target="_blank" title="<?php _e( 'Dribbble', 'thezoc' ) ?>"><?php _e( 'Dribbble', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_forrst'] != "") { ?>
    <div class="social-icon social-forrst"><a href="<?php echo $smof_data['thz_social_forrst']; ?>" target="_blank" title="<?php _e( 'Forrst', 'thezoc' ) ?>"><?php _e( 'Forrst', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_googleplus'] != "") { ?>
    <div class="social-icon social-googleplus"><a href="<?php echo $smof_data['thz_social_googleplus']; ?>" target="_blank" title="<?php _e( 'Googleplus', 'thezoc' ) ?>"><?php _e( 'Googleplus', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_gowalla'] != "") { ?>
    <div class="social-icon social-gowalla"><a href="<?php echo $smof_data['thz_social_gowalla']; ?>" target="_blank" title="<?php _e( 'Gowalla', 'thezoc' ) ?>"><?php _e( 'Gowalla', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_lastfm'] != "") { ?>
    <div class="social-icon social-lastfm"><a href="<?php echo $smof_data['thz_social_lastfm']; ?>" target="_blank" title="<?php _e( 'Lastfm', 'thezoc' ) ?>"><?php _e( 'Lastfm', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_linkedin'] != "") { ?>
    <div class="social-icon social-linkedin"><a href="<?php echo $smof_data['thz_social_linkedin']; ?>" target="_blank" title="<?php _e( 'Linkedin', 'thezoc' ) ?>"><?php _e( 'Linkedin', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_metacafe'] != "") { ?>
    <div class="social-icon social-metacafe"><a href="<?php echo $smof_data['thz_social_metacafe']; ?>" target="_blank" title="<?php _e( 'Metacafe', 'thezoc' ) ?>"><?php _e( 'Metacafe', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_mixx'] != "") { ?>
    <div class="social-icon social-mixx"><a href="<?php echo $smof_data['thz_social_mixx']; ?>" target="_blank" title="<?php _e( 'Mixx', 'thezoc' ) ?>"><?php _e( 'Mixx', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_netvibes'] != "") { ?>
    <div class="social-icon social-netvibes"><a href="<?php echo $smof_data['thz_social_netvibes']; ?>" target="_blank" title="<?php _e( 'Netvibes', 'thezoc' ) ?>"><?php _e( 'Netvibes', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_rss'] != "") { ?>
    <div class="social-icon social-rss"><a href="<?php echo $smof_data['thz_social_rss']; ?>" target="_blank" title="<?php _e( 'Rss', 'thezoc' ) ?>"><?php _e( 'Rss', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_yahoo'] != "") { ?>
    <div class="social-icon social-yahoo"><a href="<?php echo $smof_data['thz_social_yahoo']; ?>" target="_blank" title="<?php _e( 'Yahoo', 'thezoc' ) ?>"><?php _e( 'Yahoo', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_yelp'] != "") { ?>
    <div class="social-icon social-yelp"><a href="<?php echo $smof_data['thz_social_yelp']; ?>" target="_blank" title="<?php _e( 'Yelp', 'thezoc' ) ?>"><?php _e( 'Yelp', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_youtube'] != "") { ?>
    <div class="social-icon social-youtube"><a href="<?php echo $smof_data['thz_social_youtube']; ?>" target="_blank" title="<?php _e( 'Youtube', 'thezoc' ) ?>"><?php _e( 'Youtube', 'thezoc' ) ?></a></div>
<?php } ?>   
<?php if($smof_data['thz_social_instagram'] != "") { ?>
    <div class="social-icon social-instagram"><a href="<?php echo $smof_data['thz_social_instagram']; ?>" target="_blank" title="<?php _e( 'Instagram', 'thezoc' ) ?>"><?php _e( 'Instagram', 'thezoc' ) ?></a></div>
<?php } ?>  
<?php if($smof_data['thz_social_xing'] != "") { ?>
    <div class="social-icon social-xing"><a href="<?php echo $smof_data['thz_social_xing']; ?>" target="_blank" title="<?php _e( 'Xing', 'thezoc' ) ?>"><?php _e( 'Xing', 'thezoc' ) ?></a></div>
<?php } ?>    
<?php if($smof_data['thz_social_angellist'] != "") { ?>
    <div class="social-icon social-angellist"><a href="<?php echo $smof_data['thz_social_angellist']; ?>" target="_blank" title="<?php _e( 'Angel List', 'thezoc' ) ?>"><?php _e( 'Angel List', 'thezoc' ) ?></a></div>
<?php } ?>  
<?php if($smof_data['thz_social_skype'] != "") { ?>
    <div class="social-icon social-skype"><a href="<?php echo $smof_data['thz_social_skype']; ?>" target="_blank" title="<?php _e( 'Skype', 'thezoc' ) ?>"><?php _e( 'Skype', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_stumbleupon'] != "") { ?>
    <div class="social-icon social-stumbleupon"><a href="<?php echo $smof_data['thz_social_stumbleupon']; ?>" target="_blank" title="<?php _e( 'Stumbleupon', 'thezoc' ) ?>"><?php _e( 'Stumbleupon', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_technorati'] != "") { ?>
    <div class="social-icon social-technorati"><a href="<?php echo $smof_data['thz_social_technorati']; ?>" target="_blank" title="<?php _e( 'Technorati', 'thezoc' ) ?>"><?php _e( 'Technorati', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_tumblr'] != "") { ?>
    <div class="social-icon social-tumblr"><a href="<?php echo $smof_data['thz_social_tumblr']; ?>" target="_blank" title="<?php _e( 'Tumblr', 'thezoc' ) ?>"><?php _e( 'Tumblr', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_twitter'] != "") { ?>
    <div class="social-icon social-twitter"><a href="<?php echo $smof_data['thz_social_twitter']; ?>" target="_blank" title="<?php _e( 'Twitter', 'thezoc' ) ?>"><?php _e( 'Twitter', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_reddit'] != "") { ?>
    <div class="social-icon social-reddit"><a href="<?php echo $smof_data['thz_social_reddit']; ?>" target="_blank" title="<?php _e( 'Reddit', 'thezoc' ) ?>"><?php _e( 'Reddit', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_vimeo'] != "") { ?>
    <div class="social-icon social-vimeo"><a href="<?php echo $smof_data['thz_social_vimeo']; ?>" target="_blank" title="<?php _e( 'Vimeo', 'thezoc' ) ?>"><?php _e( 'Vimeo', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_wordpress'] != "") { ?>
    <div class="social-icon social-wordpress"><a href="<?php echo $smof_data['thz_social_wordpress']; ?>" target="_blank" title="<?php _e( 'Wordpress', 'thezoc' ) ?>"><?php _e( 'Wordpress', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_paypal'] != "") { ?>
    <div class="social-icon social-paypal"><a href="<?php echo $smof_data['thz_social_paypal']; ?>" target="_blank" title="<?php _e( 'Paypal', 'thezoc' ) ?>"><?php _e( 'Paypal', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_picasa'] != "") { ?>
    <div class="social-icon social-picasa"><a href="<?php echo $smof_data['thz_social_picasa']; ?>" target="_blank" title="<?php _e( 'Picasa', 'thezoc' ) ?>"><?php _e( 'Picasa', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_pinterest'] != "") { ?>
    <div class="social-icon social-pinterest"><a href="<?php echo $smof_data['thz_social_pinterest']; ?>" target="_blank" title="<?php _e( 'Pinterest', 'thezoc' ) ?>"><?php _e( 'Pinterest', 'thezoc' ) ?></a></div>
<?php } ?>
<?php if($smof_data['thz_social_plurk'] != "") { ?>
    <div class="social-icon social-plurk"><a href="<?php echo $smof_data['thz_social_plurk']; ?>" target="_blank" title="<?php _e( 'Plurk', 'thezoc' ) ?>"><?php _e( 'Plurk', 'thezoc' ) ?></a></div>
<?php } ?>

           </div>
			<p><?php echo $smof_data['thz_footer_caption']; ?></p>
            
         </div> <!-- End sixteen columns -->        
	  </div><!-- End container -->
     </div>
     <!-- End copyright section -->	 
     

	<?php if($smof_data['thz_custom_js'] != '') { echo $smof_data['thz_custom_js']; } ?>
        </div>
      
        <div id="back-to-top"><a href="#">Back to Top</a></div>
 	<?php wp_footer(); ?>	 
        </div>  
    </body>
</html>        