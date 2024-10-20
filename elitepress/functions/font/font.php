<?php

/*--------------------------------------------------------------------*/
/*     Register Google Fonts
/*--------------------------------------------------------------------*/

function elitepress_fonts_url() {
	
    $fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Lato:100,200,300,400,500,600,700,800,900','italic','Courgette','Roboto:100,300,400,700,900');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $fonts_url;
}

function elitepress_scripts_styles() {
    wp_enqueue_style( 'elitepress-fonts', elitepress_fonts_url(), array(), null );
}
 if(get_theme_mod('elitepress_enable_local_google_font',true) ==false){
add_action( 'wp_enqueue_scripts', 'elitepress_scripts_styles' );
 }
 
 /**
* Enqueue theme fonts.
*/
function elitepress_theme_fonts() {
    $fonts_url = elitepress_get_fonts_url();
    // Load Fonts if necessary.
    if ( $fonts_url ) {
      	require_once (get_theme_file_path( '/functions/font/wptt-webfont-loader.php' ));
        wp_enqueue_style( 'elitepress-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
    }
}
if(get_theme_mod('elitepress_enable_local_google_font',true) ==true){
add_action( 'wp_enqueue_scripts', 'elitepress_theme_fonts' );
add_action( 'enqueue_block_editor_assets', 'elitepress_theme_fonts' );
add_action( 'customize_preview_init', 'elitepress_theme_fonts', 1 );
}
/**
 * Retrieve webfont URL to load fonts locally.
 */
function elitepress_get_fonts_url() {
    $font_families = array(
		'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i',   
        'Lato:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', 		
    );
    $query_args = array(
        'family'  => urlencode( implode( '|', $font_families ) ),
        'subset'  => urlencode( 'latin,latin-ext' ),
        'display' => urlencode( 'swap' ),
    );
    return apply_filters( 'elitepress_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}