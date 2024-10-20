<?php
function elitepress_local_google_font($wp_customize) {
	$selective_refresh = isset($wp_customize->selective_refresh) ? 'postMessage' : 'refresh';
    /**
     * Register Custom Slider Controls
     */
    require_once ELITEPRESS_TEMPLATE_DIR . '/inc/customizer/toggle/class-toggle-control.php';
    $wp_customize->register_control_type('Elitepress_Toggle_Control');
	
	$wp_customize->add_panel( 'elitepress_typography_setting', array(
				'priority'    => 1000,
				'capability'  => 'edit_theme_options',
				'title'       => esc_html__('Font Settings','elitepress')
		) );
    $wp_customize->add_section('local_google_font', 
	      array(
	    'title' => esc_html__('Performance(Google Font)', 'elitepress'),
	    'panel' => 'elitepress_typography_setting',
	    'priority' => 0
	)); 
    /*     * *********************** enable google font******************************** */
    $wp_customize->add_setting('elitepress_enable_local_google_font',
            array(
                'default' => true,
                'sanitize_callback' => 'elitepress_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new Elitepress_Toggle_Control($wp_customize, 'elitepress_enable_local_google_font',
                    array(
                'label' => esc_html__('Load Google Fonts Locally?', 'elitepress'),
                'type' => 'toggle',
                'section' => 'local_google_font',
                'priority' => 4,
                    )
    ));  
}
add_action('customize_register', 'elitepress_local_google_font');
?>