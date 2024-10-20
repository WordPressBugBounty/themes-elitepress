<?php
function elitepress_theme_data_setup()
{
	return $elitepress_theme_options=array(
			//Logo and Fevicon header
			'custom_background_enabled'=>'off',
			'upload_image_favicon'=>'',
			'webrit_custom_css'=>'',
			'layout_selector' => 'wide',
			'webriti_stylesheet' => 'default',
			'header_column_layout' => 3,


			//Slider
			'animation' => 'slide',
			'animationSpeed' => '1500',
			'slide_direction' => 'horizontal',
			'slideshowSpeed' => '2500',
			'slider_list'=>'',
			'total_slide'=>'',



			'home_banner_enabled'=>true,
			'slider_total' => 4,
			'slider_radio' => 'demo',
			'slider_options'=> 'slide',
			'slider_transition_delay'=> '2000',
			'slider_select_category' => 'Uncategorized',
			'featured_slider_post' => '',

			// Social media links
			'header_social_media_enabled'=> true,
			'facebook_media_link_target'=> true,
			'twitter_media_link_target'=> true,
			'google_media_link_target'=> true,
			'linkedin_media_link_target'=> true,
			'skype_media_link_target'=> true,
			'dribble_media_link_target'=> true,
			'youtube_media_link_target'=> true,
			'viemo_media_link_target'=> true,
			'pagelines_media_link_target'=> true,
			'social_media_facebook_link' => "#",
			'social_media_twitter_link' => "#",
			'social_media_googleplus_link' => "#",
			'social_media_linkedin_link' => "#",
			'social_media_skype_link' => "#",
			'social_media_dribbble_link' => "#",
			'social_media_youtube_link' => "#",
			'social_media_vimeo_link' => "#",
			'social_media_pagelines_link' => "#",

			//Contact Address Settings
			'contact_address_settings' => true,
			'contact_phone_number' => __('+48-0987-654-321','elitepress'),
			'contact_email' => __('info@elitepresstheme.com','elitepress'),



			//header logo setting
			'logo_section_settings' => true,
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'250',
			'text_title'=>false,

			//header search Bar setting
			'header_search_bar_enabled' => true,

			//Home Top Call Out Area
			'topcalout_section_enabled' => true,
			'header_call_out_title'=> __('Integer condimentum fermentum?','elitepress'),
			'header_call_out_description'=> __('Reprehen derit in voluptate velit cillum dolore eu fugiat nulla pariaturs  sint occaecat proidentse.','elitepress'),
			'header_call_out_btn_text'=> __('Sed gravida','elitepress'),
			'header_call_out_btn_link'=>'',
			'header_call_out_btn_link_target'=>true,


			//Footer Copyright custmization
			'footer_copyright_text' => '<p>'.__( 'Proudly powered by <a href="https://wordpress.org">WordPress</a> | Theme: <a href="https://webriti.com" rel="nofollow">ElitePress</a> by Webriti', 'elitepress' ).'</p>',

			//Footer Menu bar Setting
			'footer_menu_bar_enabled' => true,

			//portfolio
			'portfolio_section_enabled' => 'on',

			'front_portfolio_title' => __('Donec aliquam','elitepress'),
			'front_portfolio_description' => __('Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit...','elitepress'),

			'portfolio_one_title' => __('Pellentesque habitant morbi','elitepress'),
			'portfolio_one_description' => __('Morbi leo risus, porta ac consectetur vestibulum eros cras 	mattis consectetur purus sit...','elitepress'),
			'portfolio_one_image' => 'portfolio1',

			'portfolio_two_title' => __('Fusce justo sapien','elitepress'),
			'portfolio_two_description' => __('Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit...','elitepress'),
			'portfolio_two_image' => 'portfolio2',

			'portfolio_three_title' => __('Aliquam auctor metus','elitepress'),
			'portfolio_three_description' => __('Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit...','elitepress'),
			'portfolio_three_image' => 'portfolio3',


			// service
			'service_section_enabled' => true,
			'service_title' => __('Aenean euismod','elitepress'),
			'service_description' => __('Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','elitepress'),
			/** Service One Setting **/
			'service_one_icon' => 'fa fa-shield',
			'service_one_title' => __('Ipsum pulvinar','elitepress'),
			'service_one_description' =>  __('Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.','elitepress'),
			/** Service Two Setting **/
			'service_two_icon' => 'fa-solid fa-tablet-screen-button',
			'service_two_title' => __('Lorem ipsum','elitepress'),
			'service_two_description' =>  __('Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.','elitepress'),
			/** Service Three Setting **/
			'service_three_icon' => 'fa fa-edit',
			'service_three_title' => __('Integer ultricies','elitepress'),
			'service_three_description' => __('Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.','elitepress'),
			/** Service Four Setting **/
			'service_four_icon' => 'fa-solid fa-star-half-stroke',
			'service_four_title' => __('Integer condimentum','elitepress'),
			'service_four_description' =>  __('Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet ferment etiam porta sem malesuada magna mollis.','elitepress'),

			//Latest news
			'blog_title' => __('Vivamus nec','elitepress'),
			'blog_description' => __('Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui official deserunt mollit anim id est laborum.','elitepress'),

			//Banner Heading
			'blog_section_enabled' => true,
			'banner_title_category' => __('Category title','elitepress'),
			'banner_description_category' => __('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),

			'banner_title_archive' => __('Archive title','elitepress'),
			'banner_description_archive' => __('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),

			'banner_title_author' => __('Author title','elitepress'),
			'banner_description_author' => __('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),

			'banner_title_404' => __('404 title','elitepress'),
			'banner_description_404' => __('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),

			'banner_title_tag' => __('Tag title','elitepress'),
			'banner_description_tag' => __('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),

			'banner_title_search' => __('Search title','elitepress'),
			'banner_description_search' => __('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),

			);
}
