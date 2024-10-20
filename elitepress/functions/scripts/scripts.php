<?php
function elitepress_scripts()
{	
	$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), elitepress_theme_data_setup() );
	wp_enqueue_style('elitepress-bootstrap', ELITEPRESS_TEMPLATE_DIR_URI . '/css/bootstrap.css');
	wp_enqueue_style('elitepress-style', get_stylesheet_uri() );
	wp_enqueue_style('font-awesome-min', ELITEPRESS_TEMPLATE_DIR_URI . '/css/font-awesome/css/all.min.css');
	
	if(get_option('elitepress_lite_options')!='')
	{
	$class=$current_options['webriti_stylesheet'];
	wp_enqueue_style('elitepress-default', ELITEPRESS_TEMPLATE_DIR_URI . '/css/'.$class.'.css');
	
	}
	else
	{
	wp_enqueue_style('elitepress-default', ELITEPRESS_TEMPLATE_DIR_URI . '/css/default.css');
	}
	wp_enqueue_style('elitepress-theme-menu', ELITEPRESS_TEMPLATE_DIR_URI . '/css/theme-menu.css');
	wp_enqueue_style('elitepress-media-responsive', ELITEPRESS_TEMPLATE_DIR_URI . '/css/media-responsive.css');	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('elitepress-menu', ELITEPRESS_TEMPLATE_DIR_URI .'/js/menu/menu.js',array('jquery'));
	wp_enqueue_script('elitepress-custom', ELITEPRESS_TEMPLATE_DIR_URI .'/js/front-page/custom.js');
	wp_enqueue_script('bootstrap', ELITEPRESS_TEMPLATE_DIR_URI .'/js/bootstrap.min.js');
	
}
add_action('wp_enqueue_scripts', 'elitepress_scripts');

if ( is_singular() ){ wp_enqueue_script( "comment-reply" );	}

// Adding custom enqueue scripts
function elitepress_custom_scripts(){
	
	$current_options = wp_parse_args( get_option('elitepress_lite_options',array()),elitepress_theme_data_setup());
  ?>
	<style>
	<?php echo esc_html($current_options['webrit_custom_css']); ?>
	</style>
	<style>
		.custom-logo{width: <?php echo intval(get_theme_mod('rambo_logo_length',154));?>px; height: auto;}
	</style>
	<?php
 }
add_action( 'wp_head', 'elitepress_custom_scripts' ); 

function elitepress_custmizer_style()
 {
		wp_enqueue_style('elitepress-customizer-css',ELITEPRESS_TEMPLATE_DIR_URI.'/css/cust-style.css');
}
add_action('customize_controls_print_styles','elitepress_custmizer_style');
?>
