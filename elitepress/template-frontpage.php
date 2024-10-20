<?php
// Template Name: Home Page
		
		get_header();

		do_action('elitepress_sections', false);
		
		//****** get index blog  ********
		get_template_part('index', 'blog');
				
		get_footer();