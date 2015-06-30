<?php global $smof_data; ?>
<?php 	
	if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) == '') {
		$nameError = __('Please enter your name.', 'thezoc');
		$hasError = true;
	} else {
		$contactName = trim($_POST['contactName']);
	}

	if(trim($_POST['contactEmail']) == '')  {
		$emailError = __('Please enter your email address.', 'thezoc');
		$hasError = true;
	} else if (!preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,8})$/", trim($_POST['contactEmail']))) {
		$emailError = __('You entered an invalid email address.', 'thezoc');
		$hasError = true;
	} else {
		$contactEmail = trim($_POST['contactEmail']);
	}

	$contactSubject = trim($_POST['contactSubject']);

	if(trim($_POST['contactMessage']) == '') {
		$messageError = __('Please enter a message.', 'thezoc');
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$contactMessage = stripslashes(trim($_POST['contactMessage']));
		} else {
			$contactMessage = trim($_POST['contactMessage']);
		}
	}
	
	if(!isset($hasError)) {
		$emailTo = get_option('admin_email');
		$subject = $contactSubject;
		$body = $contactMessage;
		$headers = 'From: '.$contactName.' <'.$contactEmail.'>' . "\r\n" . 'Reply-To: ' . $contactEmail;

		if( wp_mail($emailTo, $subject, $body, $headers) ) {
			$emailSent = true;
		}
	}
	
	if(isset($_POST['ajax'])) {		
		if(isset($emailSent) && $emailSent == true) {
			die('Mail sent');
		} else if(isset($hasError) && $hasError == true) {
			die('error');
		}
	}
} ?>

            

       <div class="container"><!-- Start container -->
            <div class="row">
        
              <div class="sixteen columns">                
                      <!-- Start contact -->
                       <div id="contact-form">	
                              <!-- Start contact details -->	
                              <div id="contact-details"> 
                              <div class="contact-informations"> 
                              <p><span class="contact-text"><?php echo $smof_data['thz_contact_opinformations']; ?></span></p>
                              <h3 class="contact-titles"><i class="icon-map-marker contact-icon"></i><?php echo $smof_data['thz_contact_titleaddress']; ?></h3>
                              <p><span class="contact-text"><?php echo $smof_data['thz_contact_address']; ?></span></p>
                              <h3 class="contact-titles"><i class="icon-pencil contact-icon"></i><?php echo $smof_data['thz_contact_titlecontact']; ?></h3>
                              <p><span class="contact-text"><?php echo $smof_data['thz_contact_infocontact']; ?></span></p>
                              </div>
                              </div>
                              </div>
                              
                              <!-- End contact details -->	
				
                           <form action="<?php the_permalink(); ?>" method="post" class="contactForm form" id="contact-form">		

                              <div id="contact-input">
                              <input type="text" name="contactName" class="required" id="contactName" value="<?php _e('Name', 'thezoc'); ?>" />
                              <input type="text" name="contactEmail" class="required" id="contactEmail" value="<?php _e('E-mail', 'thezoc'); ?>" />
                              <input type="text" name="contactSubject" class="required" id="contactSubject" value="<?php _e('Subject', 'thezoc'); ?>" />
                              </div>
                              
                              
                              <div id="contact-textarea">
                              <textarea  class="required" name="contactMessage" id="contactMessage" rows="" cols=""><?php _e('Message', 'thezoc'); ?></textarea>
                              </div>
                              
                              <div id="contact-submit">
                              <input type="hidden" name="submitted" id="submitted" value="true" />
                              <input type="submit" value="<?php _e('Send!', 'thezoc'); ?>" class="comment-submit button submit" id="submitform" />
                              
                              <span id="msg"></span>
                              
                              
                              </div>
                              
                           </form> 
                           <div class="clear"></div>
                        </div>
                      <!-- End contact -->
               </div><!-- End span5 -->

  
            </div><!-- End container -->                  