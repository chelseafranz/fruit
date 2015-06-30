if (tinymce.majorVersion >= 4) { 	
(function() {
    tinymce.PluginManager.add('thz_button', function( editor, url ) {
        editor.addButton( 'thz_button', {
            title: 'Insert Thezoc Shortcode',
            type: 'menubutton',
            icon : 'wp_code',
            menu: [
					{
                    text: 'Buttons',
                	menu: [
                {
                    text: 'Appweaver Button',
                    value: "[button title=\"Button Text\" link_url=\"http://\" color=\"#fc5652\" btn_style=\"default, hollow or full\"]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },	
				  {
                    text: 'Appweaver Rounded Button',
                    value: "[button_round title=\"Button Text\" link_url=\"http://\" color=\"#fc5652\" btn_style=\"default, hollow or full\"]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },	
				  {
                    text: 'Gplay Button',
                    value: "[button_gplay btn_url_gplay=\"http://\" btn_style=\"white or black\" btn_align=\"left, right or center\"]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				 {
                    text: 'Appstore Button',
                    value: "[button_appstore btn_url_appstore=\"http://\" btn_style=\"white or black\" btn_align=\"left, right or center\"]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				 {
                    text: 'Windows Button',
                    value: "[button_windows btn_url_windows=\"http://\" btn_style=\"white or black\" btn_align=\"left, right or center\"]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				 {
                    text: 'Blackberry Button',
                    value: "[button_blackberry btn_url_blackberry=\"http://\" btn_style=\"white or black\" btn_align=\"left, right or center\"]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                }
				]
				},
				{
                    text: 'Background Section',
                    value: '[background_section_color section_number=\"1\" bg_color=\"#F5F5F5\" color=\"#333333\" img=\"Pattern Link Here\"]Your Content Here[/background_section_color]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				{
                    text: 'Double Background Section',
                    value: '[double_background_section_color][background_half_section_color section_number=\"1\" bg_color=\"#F5F5F5\" color=\"#333333\" img=\"Pattern Link Here\" position=\"left\"]Your Content Here[/background_half_section_color][background_half_section_color section_number=\"1\" bg_color=\"#F5F5F5\" color=\"#333333\" img=\"Pattern Link Here\" position=\"right\"]Your Content Here[/background_half_section_color][/double_background_section_color]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				{
					text: 'Pricing Options',				
                    menu: [
                        {
                    
                        text: 'Pricing Options Three',
                        onclick: function() {
                            editor.insertContent('[pricing-options col=\"3\"]<br>\
[plan_table name=\"Basic License\" link=\"http://\" linkname=\"Purchase\" price=\"19$\" per=\"per month\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong> 50</strong> Products</li><li><strong>10GB</strong> Upload</li><li><strong>150GB</strong> Bandwith</li><li><strong>Basic</strong> Access</li><li><strong>Basic</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Advanced License\" link=\"http://\" linkname=\"Purchase\" price=\"39$\" per=\"per month\"]<br>\
<ul><li><strong>Technical</strong> Support </li><li><strong>100</strong> Products</li><li><strong>20GB</strong> Upload</li><li><strong>250GB</strong> Bandwith</li><li><strong>Medium</strong> Access</li><li><strong>Medium</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Developer License\" link=\"http://\" linkname=\"Purchase\" price=\"59$\" per=\"per month\" featured=\"true\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong>250</strong> Products</li><li><strong>40GB</strong> Upload</li><li><strong>650GB</strong> Bandwith</li><li><strong>Advanced</strong> Access</li><li><strong>Advanced</strong> Package</li></ul><br>\
[/plan_table][/pricing-options]');
                        }
                    },
					  {
                    
                        text: 'Pricing Options Four',
                        onclick: function() {
                            editor.insertContent('[pricing-options col=\"4\"]<br>\
[plan_table name=\"Basic License\" link=\"http://\" linkname=\"Purchase\" price=\"19$\" per=\"per month\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong> 50</strong> Products</li><li><strong>10GB</strong> Upload</li><li><strong>150GB</strong> Bandwith</li><li><strong>Basic</strong> Access</li><li><strong>Basic</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Advanced License\" link=\"http://\" linkname=\"Purchase\" price=\"39$\" per=\"per month\"]<br>\
<ul><li><strong>Technical</strong> Support </li><li><strong>100</strong> Products</li><li><strong>20GB</strong> Upload</li><li><strong>250GB</strong> Bandwith</li><li><strong>Medium</strong> Access</li><li><strong>Medium</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Developer License\" link=\"http://\" linkname=\"Purchase\" price=\"59$\" per=\"per month\" featured=\"true\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong>250</strong> Products</li><li><strong>40GB</strong> Upload</li><li><strong>650GB</strong> Bandwith</li><li><strong>Advanced</strong> Access</li><li><strong>Advanced</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Unlimited License\" link=\"http://\" linkname=\"Purchase\" price=\"79$\" per=\"month\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong>Unlimited</strong> Products</li><li><strong>100GB</strong> Upload</li><li><strong>1050GB</strong> Bandwith</li><li><strong>Full</strong> Access</li><li><strong>Complete</strong> Package</li></ul><br>\
[/plan_table][/pricing-options]');
                        }
                    }
					]
				},				
                {
                    text: 'Alert Boxes',				
                    menu: [
                        {
                            text: 'Alert Success Box',
                            value: '[alert message=\"Your Content Here\" type=\"success\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
                        {
                            text: 'Alert Warning Box',
                            value: '[alert message=\"Your Content Here\" type=\"warning\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Alert Error Box',
                            value: '[alert message=\"Your Content Here\" type=\"error\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Alert Notice Box',
                            value: '[alert message=\"Your Content Here\" type=\"notice\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Alert Info Box',
                            value: '[alert message=\"Your Content Here\" type=\"info\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }
                    ]
                },
				  {
                    text: 'Boxes',				
                    menu: [
                        {
                            text: 'Accordions Box',
                            value: '[accordion]<br>\
										[accordion_box title=\"First Accordion Title\"]Accordion Content Here[/accordion_box]<br>\
										[accordion_box title=\"Second Accordion Title\"]Accordion Content Here[/accordion_box]<br>\
										[accordion_box title=\"Third Accordion Title\"]Accordion Content Here[/accordion_box]<br>\
										[/accordion]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
                        {
                            text: 'Toggles Box',
                            value: '[toggle_box title=\"First Toggle Title\" open=\"0\"]Your Content Here[/toggle_box]<br>\
									[toggle_box title=\"Second Toggle Title(Open by Default)\" open=\"1\"]Your Content Here[/toggle_box]<br>\
									[toggle_box title=\"Third Toggle Title\" open=\"0\"]Your Content Here[/toggle_box]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Callout Box',
                            value: '[callout_box title=\"Your Callout Title Here\" btn_title=\"Your Button Title Here\" btn_url=\"Your Button Url Link Here(Ex:http://)\"]Your Callout Here[/callout_box]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Tabs Box',
                            value: '[tabs]<br>\
										[tab_box title=\"Tab Title Here\"]Tabs Content Here[/tab_box]<br>\
										[/tabs]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Clients Box',
                            value: '[clients]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[/clients]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Milestone Box',
                            value: '[milestone icon=\"icon-class\" count=\"234\" title=\"Cupcakes\"]Your Content Here[/milestone]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Skill Bar Box',
                            value: '[skill percentage=\"50\" title=\"UX Design\"]<br>\
										[skill percentage=\"40\" title=\"Typography\"]<br>\
										[skill percentage=\"90\" title=\"Web Design\"]<br>\
										[skill percentage=\"60\" title=\"Branding\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }
                    ]
                },				
                {
                    text: 'Icon Features',
                    value: '[icon_feature icon=\"icon-class or Icon image URL\" title=\"Icon Feature Title Here\" icon_type=\"image or icon-font\"]Your Content Here[/icon_feature]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
					
                },
				{
                    text: 'Service Box',
                    value: '[service icon=\"icon-class\" title=\"service box title here\" icon_display=\"left or right\" color=\"#333333\"]Your Content Here[/service]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				{
                    text: 'Animations',				
                    menu: [
                        {
                            text: 'Animation slideRight',
                            value: '[animation_slideright]Your Content Here[/animation_slideright]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
                        {
                            text: 'Animation slideRightsimple',
                            value: '[animation_slideRightsimple]Your Content Here[/animation_slideRightsimple]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Animation slideLeft',
                            value: '[animation_slideleft]Your Content Here[/animation_slideleft]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Animation slideLeftsimple',
                            value: '[animation_slideLeftsimple]Your Content Here[/animation_slideLeftsimple]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Animation slideUp',
                            value: '[animation_slideup]Your Content Here[/animation_slideup]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Animation slideDown',
                            value: '[animation_slidedown]Your Content Here[/animation_slidedown]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Animation fadeIn',
                            value: '[animation_fadein]Your Content Here[/animation_fadein]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Animation fadeInUp',
                            value: '[animation_fadeInUp]Your Content Here[/animation_fadeInUp]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Animation fadeInDown',
                            value: '[animation_fadeInDown]Your Content Here[/animation_fadeInDown]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Animation flipInX',
                            value: '[animation_flipInX]Your Content Here[/animation_flipInX]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Animation flipInY',
                            value: '[animation_flipInY]Your Content Here[/animation_flipInY]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }
						
                    ]
                },
				{
                    text: 'Columns',				
                    menu: [
                        {
                            text: 'One Half',
                            value: '[one_half]Your Content Here[/one_half]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Half Last',
                            value: '[one_half_last]Your Content Here[/one_half_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Third',
                            value: '[one_third]Your Content Here[/one_third]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Third Last',
                            value: '[one_third_last]Your Content Here[/one_third_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Fourth',
                            value: '[one_fourth]Your Content Here[/one_fourth]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Fourth Last',
                            value: '[one_fourth_last]Your Content Here[/one_fourth_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Fifth',
                            value: '[one_fifth]Your Content Here[/one_fifth]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Fifth Last',
                            value: '[one_fifth_last]Your Content Here[/one_fifth_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Sixth',
                            value: '[one_sixth]Your Content Here[/one_sixth]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'One Sixth Last',
                            value: '[one_sixth_last]Your Content Here[/one_sixth_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Two Third',
                            value: '[two_third]Your Content Here[/two_third]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Two Third Last',
                            value: '[two_third_last]Your Content Here[/two_third_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Two Fifth',
                            value: '[two_fifth]Your Content Here[/two_fifth]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Two Fifth Last',
                            value: '[two_fifth_last]Your Content Here[/two_fifth_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },						
						 {
                            text: 'Three Fourth',
                            value: '[three_fourth]Your Content Here[/three_fourth]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Three Fourth Last',
                            value: '[three_fourth_last]Your Content Here[/three_fourth_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Three Fifth',
                            value: '[three_fifth]Your Content Here[/three_fifth]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Three Fifth Last',
                            value: '[three_fifth_last]Your Content Here[/three_fifth_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Four Fifth',
                            value: '[four_fifth]Your Content Here[/four_fifth]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Four Fifth Last',
                            value: '[four_fifth_last]Your Content Here[/four_fifth_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Five Sixth',
                            value: '[five_sixth]Your Content Here[/five_sixth]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Five Sixth Last',
                            value: '[five_sixth_last]Your Content Here[/five_sixth_last]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }                      
                    ]
                },
				 {
                    text: 'Home Quotes',				
                    menu: [
                {
                    text: 'Home Quote Side',
                    value: '[home_callout  img=\"Home Quote Image Here\"]<br>\
						[home_callout_line title=\"Home Title Here\" subtitle=\"Home Subtitle Here \" style=\"black or white\"]Description here[/home_callout_line]<br>\
						[/home_callout]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
					
                },
				 {
                    text: 'Home Quote Central',
                    value: '[home_callout2]<br>\
						[home_callout_line2 img=\"Logo image URL\" title=\"Home Title Here\" style=\"black or white\"]Description here[/home_callout_line2]<br>\
						[/home_callout2]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
					
                }
				]
				 },
				{
                    text: 'Helpers',				
                    menu: [
					 {
                            text: 'Insert Image',
                            value: '[insert_image img=\"Image Link Here\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Insert Link',
                            value: '[insert_link link=\"Insert Link Here\"]Insert Description Here[/insert_link]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                            text: 'Insert Icon',
                            value: '[icon icon=\"icon-class\" color=\"#5e5e5e\" size=\"32px\"]Your Description Here[/icon]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
                        {
                            text: 'Break',
                            value: '[br]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
                        {
                            text: 'Center',
                            value: '[center]Your Content Here[/center]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
                        {
                            text: 'Clear',
                            value: '[clear]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
                        {
                            text: 'Highlight',
                            value: '[highlight]Your Content Here[/highlight]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
                        {
                            text: 'Horizontal Line',
                            value: '[horizontal_line display=\"left or right\" color=\"#f5f5f5\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Container',
                            value: '[container]Your Content Here[/container]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
						},
                        {
                            text: 'Space',
                            value: '[space]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
						}
						]
				},
				 {
                    text: 'Social Icons',
                    value: '[social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
					
                },
				
				
				{
                    text: 'Parallax Section',				
                    menu: [
                        {
                            text: 'Quote',
                            value: '[quote]Your Quote Here[/quote]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						 {
                    text: 'Testimonial Slider',
                    value: '[testimonial_slider]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[/testimonial_slider]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
					
                },
						 {
                            text: 'Tweet Box',
                            value: '[parallax_twitter count=\"5\" title=\"Check us out on Twitter\"]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }
						]
				},	
				 {
                    text: 'Image Slider',
                    value: '[image_slider]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[/image_slider]',
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
					
                },
				{
                    text: 'Timeline',				
                    menu: [
				 {			
				 			 text: 'Timeline Three',				
                    menu: [
				 {
                            text: 'Timeline Three White',
                            value: '[timeline_three_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white]<br>\
							[/timeline_three_white]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Timeline Three Dark',
                            value: '[timeline_three_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark]<br>\
							[/timeline_three_dark]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
				
						 {
                            text: 'Timeline Three Black',
                            value: '[timeline_three_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][/timeline_three_black]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }
						
						]
				 },
				 {
						 text: 'Timeline Four',				
                    menu: [
				 {
                            text: 'Timeline Four White',
                            value: '[timeline_four_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white][/timeline_four_white]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Timeline Four Dark',
                            value: '[timeline_four_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark][/timeline_four_dark]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
				
						 {
                            text: 'Timeline Four Black',
                            value: '[timeline_four_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][/timeline_four_black]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }
						
						]
				 }
						]
				},				
				{
                    text: 'Team',				
                    menu: [
                        {
                            text: 'Two Team Members',
                            value: '[member img=\"href://#\" name=\"Member Name Here\" role=\"Member Function Here\" description=\"Member Description Here\" size=\"two\"][social icon=\"facebook\" url=\"#\" target=\"_self or _blank\"][social icon=\"behance\" url=\"#\" target=\"_self or _blank\"][social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"][social icon=\"github\" url=\"#\" target=\"_self or _blank\"][social icon=\"instagram\" url=\"#\" target=\"_self or _blank\"][/member]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Three Team Members',
                            value: '[member img=\"href://#\" name=\"Member Name Here\" role=\"Member Function Here\" description=\"Member Description Here\" size=\"three\"][social icon=\"facebook\" url=\"#\" target=\"_self or _blank\"][social icon=\"behance\" url=\"#\" target=\"_self or _blank\"][social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"][social icon=\"github\" url=\"#\" target=\"_self or _blank\"][/member]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Four Team Members',
                            value: '[member img=\"href://#\" name=\"Member Name Here\" role=\"Member Function Here\" description=\"Member Description Here\" size=\"four\"][social icon=\"facebook\" url=\"#\" target=\"_self or _blank\"][social icon=\"behance\" url=\"#\" target=\"_self or _blank\"][social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"][/member]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }
						]
				},
				{
                    text: 'Gallery',				
                    menu: [
                       	{
                            text: 'Three Gallery Images',
                            value: '[gallery_image img=\"href://#\"  size=\"three\"][/gallery_image]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        },
						{
                            text: 'Four Gallery Images',
                            value: '[gallery_image img=\"href://#\" size=\"four\"][/gallery_image]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }       
                        }
						]
				}
           ]
        });
    });
})();
}
else
{
	(function ()
{
	// create thz_button plugin
	tinymce.create("tinymce.plugins.thz_button",
	{
		init: function ( ed, url )
		{

		},
		createControl: function ( btn, e )
		{
			if ( btn == "thz_button" )
			{	
				var a = this;

				var btn = e.createSplitButton('thz_button', {
                    title: "Insert Thezoc Shortcode",
					image: Thezoc.plugin_folder +"/images/icon.png",
					icons: false
                });

                btn.onRenderMenu.add(function (c, b)
				{		

					c = b.addMenu({
							title: "Buttons"
					});
					a.addImmediate( c, "Appweaver Button", "[button title=\"Button Text\" link_url=\"http://\" color=\"#fc5652\" btn_style=\"default, hollow or full\"]" );
					a.addImmediate( c, "Appweaver Rounded Button", "[button_round title=\"Button Text\" link_url=\"http://\"  color=\"#fc5652\" btn_style=\"default, hollow or full\"]" );
					a.addImmediate( c, "Gplay Button", "[button_gplay btn_url_gplay=\"http://\" btn_style=\"white or black\" btn_align=\"left, right or center\"]");
					a.addImmediate( c, "Appstore Button", "[button_appstore btn_url_appstore=\"http://\" btn_style=\"white or black\" btn_align=\"left, right or center\"]");
					a.addImmediate( c, "Windows Button", "[button_windows btn_url_windows=\"http://\" btn_style=\"white or black\" btn_align=\"left, right or center\"]");
					a.addImmediate( c, "Blackberry Button", "[button_blackberry btn_url_blackberry=\"http://\" btn_style=\"white or black\" btn_align=\"left, right or center\"]");
						a.addImmediate( b, "Background Section","[background_section_color section_number=\"1\" bg_color=\"#F5F5F5\" color=\"#333333\" img=\"Pattern Link Here\"]Your Content Here[/background_section_color]" );
						a.addImmediate( b, " Double Background Section","[double_background_section_color][background_half_section_color section_number=\"1\" bg_color=\"#F5F5F5\" color=\"#333333\" img=\"Pattern Link Here\" position=\"left\"]Your Content Here[/background_half_section_color][background_half_section_color section_number=\"1\" bg_color=\"#F5F5F5\" color=\"#333333\" img=\"Pattern Link Here\" position=\"right\"]Your Content Here[/background_half_section_color][/double_background_section_color]" );
							c = b.addMenu({
							title: "Pricing Options"
					});
						a.addImmediate( c, "Pricing Options Three","[pricing-options col=\"3\"]<br>\
[plan_table name=\"Basic License\" link=\"http://\" linkname=\"Purchase\" price=\"19$\" per=\"per month\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong> 50</strong> Products</li><li><strong>10GB</strong> Upload</li><li><strong>150GB</strong> Bandwith</li><li><strong>Basic</strong> Access</li><li><strong>Basic</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Advanced License\" link=\"http://\" linkname=\"Purchase\" price=\"39$\" per=\"per month\"]<br>\
<ul><li><strong>Technical</strong> Support </li><li><strong>100</strong> Products</li><li><strong>20GB</strong> Upload</li><li><strong>250GB</strong> Bandwith</li><li><strong>Medium</strong> Access</li><li><strong>Medium</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Developer License\" link=\"http://\" linkname=\"Purchase\" price=\"59$\" per=\"per month\" featured=\"true\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong>250</strong> Products</li><li><strong>40GB</strong> Upload</li><li><strong>650GB</strong> Bandwith</li><li><strong>Advanced</strong> Access</li><li><strong>Advanced</strong> Package</li></ul><br>\
[/plan_table][/pricing-options]" );
					a.addImmediate( c, "Pricing Options Four","[pricing-options col=\"4\"]<br>\
[plan_table name=\"Basic License\" link=\"http://\" linkname=\"Purchase\" price=\"19$\" per=\"per month\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong> 50</strong> Products</li><li><strong>10GB</strong> Upload</li><li><strong>150GB</strong> Bandwith</li><li><strong>Basic</strong> Access</li><li><strong>Basic</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Advanced License\" link=\"http://\" linkname=\"Purchase\" price=\"39$\" per=\"per month\"]<br>\
<ul><li><strong>Technical</strong> Support </li><li><strong>100</strong> Products</li><li><strong>20GB</strong> Upload</li><li><strong>250GB</strong> Bandwith</li><li><strong>Medium</strong> Access</li><li><strong>Medium</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Developer License\" link=\"http://\" linkname=\"Purchase\" price=\"59$\" per=\"per month\" featured=\"true\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong>250</strong> Products</li><li><strong>40GB</strong> Upload</li><li><strong>650GB</strong> Bandwith</li><li><strong>Advanced</strong> Access</li><li><strong>Advanced</strong> Package</li></ul><br>\
[/plan_table][plan_table name=\"Unlimited License\" link=\"http://\" linkname=\"Purchase\" price=\"79$\" per=\"month\"]<br>\
<ul><li><strong>Technical</strong> Support</li><li><strong>Unlimited</strong> Products</li><li><strong>100GB</strong> Upload</li><li><strong>1050GB</strong> Bandwith</li><li><strong>Full</strong> Access</li><li><strong>Complete</strong> Package</li></ul><br>\
[/plan_table][/pricing-options]" );
						
						c = b.addMenu({
							title: "Alert Boxes"
					});
					a.addImmediate( c, "Alert Success Box", "[alert message=\"Your Content Here\" type=\"success\"]" );	
					a.addImmediate( c, "Alert Warning Box", "[alert message=\"Your Content Here\" type=\"warning\"]" );	
					a.addImmediate( c, "Alert Error Box", "[alert message=\"Your Content Here\" type=\"error\"]" );	
					a.addImmediate( c, "Alert Notice Box", "[alert message=\"Your Content Here\" type=\"notice\"]" );
					a.addImmediate( c, "Alert Info Box", "[alert message=\"Your Content Here\" type=\"info\"]" );		

					c = b.addMenu({
							title: "Boxes"
					});
					  					  a.addImmediate( c, "Accordions Box", "[accordion]<br>\
										[accordion_box title=\"First Accordion Title\"]Accordion Content Here[/accordion_box]<br>\
										[accordion_box title=\"Second Accordion Title\"]Accordion Content Here[/accordion_box]<br>\
										[accordion_box title=\"Third Accordion Title\"]Accordion Content Here[/accordion_box]<br>\
										[/accordion]" );

					  	a.addImmediate( c, "Toggles Box", "[toggle_box title=\"First Toggle Title\" open=\"0\"]Your Content Here[/toggle_box]<br>\
									[toggle_box title=\"Second Toggle Title(Open by Default)\" open=\"1\"]Your Content Here[/toggle_box]<br>\
									[toggle_box title=\"Third Toggle Title\" open=\"0\"]Your Content Here[/toggle_box]" );	
					
					
								
					a.addImmediate( c, "Callout Box", "[callout_box title=\"Your Callout Title Here\" btn_title=\"Your Button Title Here\" btn_url=\"Your Button Url Link Here(Ex:http://)\"]Your Callout Here[/callout_box]" );					
					
						a.addImmediate( c, "Tabs Box", "[tabs]<br>\
										[tab_box title=\"Tab Title Here\"]Tabs Content Here[/tab_box]<br>\
										[/tabs]" );
					a.addImmediate( c, "Clients Box", "[clients]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[client logo=\"Your Client Logo Link Here\" url=\"#\" title=\"Client Title Here\"]<br>\
										[/clients]" );
							
				
					
						a.addImmediate( c, "Milestone Box","[milestone icon=\"icon-class\" count=\"234\" title=\"Cupcakes\"]Your Content Here[/milestone]" );	
							a.addImmediate( c, "Skill Bar Box","[skill percentage=\"50\" title=\"UX Design\"]<br>\
										[skill percentage=\"40\" title=\"Typography\"]<br>\
										[skill percentage=\"90\" title=\"Web Design\"]<br>\
										[skill percentage=\"60\" title=\"Branding\"]" );	
										
					a.addImmediate( b, "Icon Features","[icon_feature icon=\"icon-class or Icon image URL\" title=\"Icon Feature Title Here\" icon_type=\"image or icon-font\"]Your Content Here[/icon_feature]" );
					a.addImmediate( b, "Service Box","[service icon=\"icon-class\" title=\"service box title here\" icon_display=\"left or right\" color=\"#333333\"]Your Content Here[/service]" );
				
				
					c = b.addMenu({
							title: "Animations"
					});
					a.addImmediate( c, "Animation slideRight", "[animation_slideright]Your Content Here[/animation_slideright]" );
					a.addImmediate( c, "Animation slideRightsimple", "[animation_slideRightsimple]Your Content Here[/animation_slideRightsimple]" );
					a.addImmediate( c, "Animation slideLeft", "[animation_slideleft]Your Content Here[/animation_slideleft]" );
					a.addImmediate( c, "Animation slideLeftsimple", "[animation_slideLeftsimple]Your Content Here[/animation_slideLeftsimple]" );
					a.addImmediate( c, "Animation slideUp", "[animation_slideup]Your Content Here[/animation_slideup]" );
					a.addImmediate( c, "Animation slideDown", "[animation_slidedown]Your Content Here[/animation_slidedown]" );
					a.addImmediate( c, "Animation fadeIn", "[animation_fadein]Your Content Here[/animation_fadein]" );
					a.addImmediate( c, "Animation fadeInDown", "[animation_fadeInDown]Your Content Here[/animation_fadeInDown]" );
					a.addImmediate( c, "Animation fadeInUp", "[animation_fadeInUp]Your Content Here[/animation_fadeInUp]" );
					a.addImmediate( c, "Animation flipInX", "[animation_flipInX]Your Content Here[/animation_flipInX]" );
					a.addImmediate( c, "Animation flipInY", "[animation_flipInY]Your Content Here[/animation_flipInY]" );
					
					
					
					c = b.addMenu({
							title: "Columns"
					});
					
					a.addImmediate( c, "One Half", "[one_half]Your Content Here[/one_half]" );
					a.addImmediate( c, "One Half Last", "[one_half_last]Your Content Here[/one_half_last]" );
					a.addImmediate( c, "One Third", "[one_third]Your Content Here[/one_third]" );
					a.addImmediate( c, "One Third Last", "[one_third_last]Your Content Here[/one_third_last]" );
					a.addImmediate( c, "One Fourth", "[one_fourth]Your Content Here[/one_fourth]" );
					a.addImmediate( c, "One Fourth Last", "[one_fourth_last]Your Content Here[/one_fourth_last]" );
					a.addImmediate( c, "One Fifth", "[one_fifth]Your Content Here[/one_fifth]" );
					a.addImmediate( c, "One Fifth Last", "[one_fifth_last]Your Content Here[/one_fifth_last]" );
					a.addImmediate( c, "One Sixth", "[one_sixth]Your Content Here[/one_sixth]" );
					a.addImmediate( c, "One Sixth Last", "[one_sixth_last]Your Content Here[/one_sixth_last]" );
					a.addImmediate( c, "Two Third", "[two_third]Your Content Here[/two_third]" );
					a.addImmediate( c, "Two Third Last", "[two_third_last]Your Content Here[/two_third_last]" );
					a.addImmediate( c, "Two Fifth", "[two_fifth]Your Content Here[/two_fifth]" );
					a.addImmediate( c, "Two Fifth Last", "[two_fifth_last]Your Content Here[/two_fifth_last]" );
					a.addImmediate( c, "Three Fourth", "[three_fourth]Your Content Here[/three_fourth]" );
					a.addImmediate( c, "Three Fourth Last", "[three_fourth_last]Your Content Here[/three_fourth_last]" );					
					a.addImmediate( c, "Three Fifth", "[three_fifth]Your Content Here[/three_fifth]" );
					a.addImmediate( c, "Three Fifth Last", "[three_fifth_last]Your Content Here[/three_fifth_last]" );				
					a.addImmediate( c, "Four Fifth", "[four_fifth]Your Content Here[/four_fifth]" );
					a.addImmediate( c, "Four Fifth Last", "[four_fifth_last]Your Content Here[/four_fifth_last]" );					
					a.addImmediate( c, "Five Sixth", "[five_sixth]Your Content Here[/five_sixth]" );
					a.addImmediate( c, "Five Sixth Last", "[five_sixth_last]Your Content Here[/five_sixth_last]" );			
					
					
					
					c = b.addMenu({
							title: "Home Quotes"
					});

						a.addImmediate( c, "Home Quote Side","[home_callout  img=\"Home Quote Image Here\"]<br>\
						[home_callout_line title=\"Home Title Here\" subtitle=\"Home Subtitle Here \" style=\"black or white\"]Description here[/home_callout_line]<br>\
						[/home_callout]" );
						a.addImmediate( c, "Home Quote Central","[home_callout2]<br>\
						[home_callout_line2 img=\"Logo image URL\" title=\"Home Title Here\" style=\"black or white\"]Description here[/home_callout_line2]<br>\
						[/home_callout2]" );
						
						

					c = b.addMenu({
							title: "Helpers"
					});
					a.addImmediate( c, "Insert Image","[insert_image img=\"Image Link Here\"]" );
					a.addImmediate( c, "Insert Link","[insert_link link=\"Insert Link Here\"]Insert Description Link[insert_link]" );
					a.addImmediate( c, "Insert Icon","[icon icon=\"icon-class\" color=\"#5e5e5e\" size=\"32px\"]Your Description Here[/icon]" );
					a.addImmediate( c, "Break","[br]" );
					a.addImmediate( c, "Center","[center]Your Content Here[/center]" );
					a.addImmediate( c, "Container","[container]Your Content Here[/container]" );
					a.addImmediate( c, "Clear","[clear]" );	
					a.addImmediate( c, "Highlight","[highlight]Your Content Here[/highlight]" );
					a.addImmediate( c, "Horizontal Line","[horizontal_line display=\"left or right\" color=\"#f5f5f5\"]" );
					a.addImmediate( c, "Space","[space]" );					
								
					a.addImmediate( b, "Social Icons","[social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"]" );
					
					c = b.addMenu({
                        title: "Parallax Section"
                    });	
					a.addImmediate( c, "Quote","[quote]Your Quote Here[/quote]" );
					a.addImmediate( c, "Tweet Box","[parallax_twitter count=\"5\" title=\"Check us out on Twitter\"]" );
					a.addImmediate( c, "Testimonial Slider","[testimonial_slider]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\" ]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[testimonial_slide img=\"Client Image Here\" author=\"Client Name Here\" details=\"Client Position Here\"]Testimonial Here[/testimonial_slide]<br>\
										[/testimonial_slider]" );
			
						a.addImmediate( b, "Image Slider","[image_slider]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[image_slide img=\"Link Image Here\"]<br>\
										[/image_slider]" );
					c = b.addMenu({
                        title: "Team Members"
                    });	

					a.addImmediate( c, "Two Team Members ","[member img=\"href://#\" name=\"Member Name Here\" role=\"Member Function Here\" description=\"Member Description Here\" size=\"two\"][social icon=\"facebook\" url=\"#\" target=\"_self or _blank\"][social icon=\"behance\" url=\"#\" target=\"_self or _blank\"][social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"][social icon=\"github\" url=\"#\" target=\"_self or _blank\"][social icon=\"instagram\" url=\"#\" target=\"_self or _blank\"][/member]" );	
					a.addImmediate( c, "Three Team Members ","[member img=\"href://#\" name=\"Member Name Here\" role=\"Member Function Here\" description=\"Member Description Here\" size=\"three\"][social icon=\"facebook\" url=\"#\" target=\"_self or _blank\"][social icon=\"behance\" url=\"#\" target=\"_self or _blank\"][social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"][social icon=\"github\" url=\"#\" target=\"_self or _blank\"][/member]" );	
					a.addImmediate( c, "Four Team Members ","[member img=\"href://#\" name=\"Member Name Here\" role=\"Member Function Here\" description=\"Member Description Here\" size=\"four\"][social icon=\"facebook\" url=\"#\" target=\"_self or _blank\"][social icon=\"behance\" url=\"#\" target=\"_self or _blank\"][social icon=\"twitter\" url=\"#\" target=\"_self or _blank\"][/member]" );	
					
						c = b.addMenu({
                        title: "Timeline"
                    });			
							d = c.addMenu({
                        title: "Timeline Three"
                    });			
					a.addImmediate( d, "Timeline Three White ","[timeline_three_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white]<br>\
							[/timeline_three_white]" );	
					a.addImmediate( d, "Timeline Three Dark ","[timeline_three_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark]<br>\
							[/timeline_three_dark]" );	
							a.addImmediate( d, "Timeline Three Black ","[timeline_three_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][/timeline_three_black]" );	
						e = c.addMenu({
                        title: "Timeline Four"
                    });			
					
				a.addImmediate( e, "Timeline Four White","[timeline_four_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white][timeline_box_white day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_white][/timeline_four_white]" );	
				a.addImmediate( e, "Timeline Four Dark","[timeline_four_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark][timeline_box_dark day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_dark][/timeline_four_dark]" );	
				a.addImmediate( e, "Timeline Four Black","[timeline_four_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\"]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][timeline_box_black day=\"22\" month=\"June\" title=\"Insert Title Here\" ]Your Content Here[/timeline_box_black][/timeline_four_black]" );	
								
				c = b.addMenu({
                        title: "Gallery Image"
                    });	
				a.addImmediate( c, "Three Gallery Images","[gallery_image img=\"href://#\"  size=\"three\"][/gallery_image]" );
				a.addImmediate( c, "Four Gallery Images","[gallery_image img=\"href://#\" size=\"four\"][/gallery_image]" );

				});
                
                return btn;
			}
			
			return null;
		},
		addImmediate: function ( ed, title, sc) {
			ed.add({
				title: title,
				onclick: function () {
					tinyMCE.activeEditor.execCommand( "mceInsertContent", false, sc )
				}
			})
		},
		getInfo: function () {
			return {
				longname: 'Thezoc Shortcodes',
				author: 'Thezoc Company',
				authorurl: 'http://thezoc.com',
				infourl: 'http://wiki.moxiecode.com/',
				version: "1.0"
			}
		}
	});
	
	// add thz_button plugin
	tinymce.PluginManager.add("thz_button", tinymce.plugins.thz_button);
})();
}