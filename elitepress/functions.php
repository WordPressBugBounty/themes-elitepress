<?php
/**Theme Name	: ElitePress
 * Theme Core Functions and Codes
*/
// Global variables define
if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 */
		do_action( 'wp_body_open' );
	}
}
/**Includes reqired resources here**/
define('ELITEPRESS_TEMPLATE_DIR_URI',get_template_directory_uri());
define('ELITEPRESS_TEMPLATE_DIR',get_template_directory());
define('ELITEPRESS_THEME_FUNCTIONS_PATH',ELITEPRESS_TEMPLATE_DIR.'/functions');
define('WEBRITI_THEME_OPTIONS_PATH',ELITEPRESS_TEMPLATE_DIR_URI.'/functions/theme_options');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/class-tgm-plugin-activation.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/menu/elitepress_nav_walker.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/widget/custom-sidebar.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/widget/elitepress_header_widget.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/widget/elitepress_social_icon.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/scripts/scripts.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/meta-box/post-meta.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/template-tag.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/font/font.php');
//Customizer
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer_typography.php' );
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer-pro-feature.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer-home.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer-blog.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer-copyright.php');
//require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer-pro.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer_banner.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer_theme_style.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer_header.php');
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer.php' );
require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/customizer/customizer_recommended_plugin.php');
require('elitepress_theme_setup_data.php');
require( ELITEPRESS_TEMPLATE_DIR . '/inc/customizer/customizer-slider/customizer-slider.php');
// Elitepress Info Page
//require( ELITEPRESS_THEME_FUNCTIONS_PATH . '/elitepress-info/welcome-screen.php');
add_action( 'admin_init', 'elitepress_customizer_css' );
function elitepress_customizer_css() {
	wp_enqueue_style( 'elitepress-customizer-info', ELITEPRESS_TEMPLATE_DIR_URI . '/css/pro-feature.css' );
}
//wp title tag starts here
function elitepress_head( $title, $sep ) {
        global $paged, $page;
        if ( is_feed() )
                return $title;
 // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );
	        // Add the site description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            $title = "$title $sep $site_description";
 // Add a page number if necessary.
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ){
                /* translators: %s: plugin name. */
                $title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'elitepress' ), max( $paged, $page ) );
    }
    return $title;
}
add_filter( 'wp_title', 'elitepress_head', 10, 2);
add_action( 'after_setup_theme', 'elitepress_setup' );
function elitepress_setup(){
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 600;//In PX */
	// Load text domain for translation-ready
	load_theme_textdomain( 'elitepress', ELITEPRESS_TEMPLATE_DIR. '/language' );
	add_theme_support( 'post-thumbnails' ); //supports featured image
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', esc_html__( 'Primary Menu', 'elitepress' ) ); //Navigation
	register_nav_menu( 'footer_menu', esc_html__( 'Footer Menu', 'elitepress' ) );
	// theme support
	$args = array('default-color' => 'ffffff',);
	add_theme_support( 'custom-background', $args  );
	add_theme_support( 'automatic-feed-links');
	//Add Theme Support Title Tag
	add_theme_support( 'title-tag' );
	//Custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 250,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	add_editor_style();
	$theme = wp_get_theme(); // gets the current theme
	if ( 'ElitePress' == $theme->name )
	{
	 	if ( is_admin() ) {
			require ELITEPRESS_TEMPLATE_DIR . '/admin/admin-init.php';
		}
	}
}
function elitepress_add_gravatar_class($class) {
	$class = str_replace("class='avatar", "class='img-responsive comment-img", $class);
	return $class;
}
add_filter('get_avatar','elitepress_add_gravatar_class');
function elitepress_excerpt_length($length ) {
return 20;
}
add_filter( 'excerpt_length', 'elitepress_excerpt_length', 999 );
add_filter('get_the_excerpt','elitepress_post_slider_excerpt');
add_filter('excerpt_more','__return_false');
function elitepress_post_slider_excerpt($output){
		return '<div class="slide-text-bg2">' .'<h3>'.esc_html($output).'</h3>'.'</div>'.
      			'<div class="flex-btn-div"><a href="' . esc_url(get_permalink()) . '" class="btn1 flex-btn">'. esc_html__('Read More','elitepress') .'</a></div>';
	}
// Read more tag to formatting in blog page
function elitepress_content_more($more){
  global $post;
  return '<a href="' . esc_url(get_permalink()) . '" class="more-link">'.esc_html__('Read More','elitepress').'</a>';
}
add_filter( 'the_content_more_link', 'elitepress_content_more' );
function elitepress_enqueue_scripts(){
	wp_enqueue_style('elitepress-drag-drop-css', ELITEPRESS_TEMPLATE_DIR_URI . '/css/drag-drop.css');
}
add_action( 'admin_enqueue_scripts', 'elitepress_enqueue_scripts' );
add_action( 'tgmpa_register', 'elitepress_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function elitepress_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
	// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
            'name' => esc_html__('Contact Form 7','elitepress'),
            'slug' => 'contact-form-7',
            'required' => false,
        ),
		array(
           'name' => esc_html__('Webriti Companion','elitepress'),
            'slug' => 'webriti-companion',
            'required' => false,
        ),
        array(
            'name' => esc_html__('Carousel, Recent Post Slider and Banner Slider','elitepress'),
            'slug' => 'spice-post-slider',
	            'required' => false,
        ),
        array(
            'name' => esc_html__('Seo Optimized Images','elitepress'),
            'slug' => 'seo-optimized-images',
            'required' => false,
        )
	);
	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'elitepress',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
//Get Home Blog Excerpt
function elitepress_get_home_blog_excerpt()
	{
		global $post;
		$excerpt = get_the_content();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, 145);
		$len=strlen($excerpt);
		if($original_len>275) {
		$excerpt = $excerpt;
		return $excerpt . '<p><a href="' .esc_url(get_permalink()) . '" class="more-link">'.esc_html__('Read More','elitepress').'</a></p>';
		}
		else
		{ return $excerpt; }
	}
//Set for old user
if (!get_option('ElitePress_user', false)) {
    //detect old user and set value
    $ElitePress_user = get_option('elitepress_lite_options', array());
    if ((isset($ElitePress_user['blog_title']) || isset($ElitePress_user['blog_description']) || isset($ElitePress_user['service_title']) || isset($ElitePress_user['service_description']))) {
        add_option('ElitePress_user', 'old');
    } else {
        add_option('ElitePress_user', 'new');
    }
}
//Custom CSS compatibility
$elitepress_theme_options = elitepress_theme_data_setup();
$elitepress_current_options = wp_parse_args(get_option('elitepress_lite_options', array()), $elitepress_theme_options);
if ($elitepress_current_options['webrit_custom_css'] != '' && $elitepress_current_options['webrit_custom_css'] != 'nomorenow') {
    $elitepress_css = '';
    $elitepress_css .= $elitepress_current_options['webrit_custom_css'];
    $elitepress_css .= (string) wp_get_custom_css(get_stylesheet());
    $elitepress_current_options['webrit_custom_css'] = 'nomorenow';
    update_option('elitepress_lite_options', $elitepress_current_options);
    wp_update_custom_css_post($elitepress_css, array());
}
/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function elitepress_skip_link_focus_fix() {
    // The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
    ?>
    <script>
    /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
    </script>
    <?php
}
add_action( 'wp_print_footer_scripts', 'elitepress_skip_link_focus_fix' );
function elitepress_custom_script(){?>
	<script>
	jQuery(document).ready(function(){jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>100){jQuery('.hc_scrollup').fadeIn();}else{jQuery('.hc_scrollup').fadeOut();}});jQuery('.hc_scrollup').click(function(){jQuery("html, body").animate({scrollTop:0},600);return false;});});
	</script>
<?php
}
add_action('wp_head','elitepress_custom_script');
// checkbox box sanitization function
function elitepress_sanitize_checkbox($checked) {
	// Boolean check.
	return ( ( isset($checked) && true == $checked ) ? 1 : 0 );
}
if ( ! function_exists( 'elitepress_customizer_preview_scripts' ) ) {
    function elitepress_customizer_preview_scripts() {
        wp_enqueue_script( 'elitepress-customizer-preview', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/customizer-slider/js/customizer-preview.js', array( 'customize-preview', 'jquery' ) );
	    }
	}
add_action( 'customize_preview_init', 'elitepress_customizer_preview_scripts' ); 
?>