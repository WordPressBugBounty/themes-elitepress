<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />    
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
	<?php
	$elitepress_current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), elitepress_theme_data_setup() );
	if($elitepress_current_options['layout_selector'] == "boxed")
	{ $elitepress_class="boxed"; }
	else
	{ $elitepress_class="wide"; }
	?>
<body <?php body_class($elitepress_class); ?> >
<?php wp_body_open(); ?>
<a class="skip-link elitepress-screen-reader" href="#wrapper"><?php esc_html_e('Skip to content', 'elitepress'); ?></a>

<!-- Header Section -->
<header class="header-section">
	
	<?php get_template_part('header','social-section'); ?>
	
	<?php get_template_part('header','logo-section'); ?>	
	
	<?php get_template_part('header','menu-section'); ?>
	
	
</header>	
<!-- /Header Section -->

<!-- Wrapper -->
<div id="wrapper">