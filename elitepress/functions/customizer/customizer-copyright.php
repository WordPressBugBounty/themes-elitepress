<?php // Footer copyright section
	function elitepress_copyright_customizer( $wp_customize ) {
	$wp_customize->add_panel( 'elitepress_copyright_setting', array(
		'priority'       => 800,
		'capability'     => 'edit_theme_options',
		'title'      => esc_html__('Footer Settings', 'elitepress'),
	) );

	$wp_customize->add_section(
        'copyright_section_one',
        array(
            'title' => esc_html__('Footer Copyright Settings','elitepress'),
            'priority' => 35,
			'panel' => 'elitepress_copyright_setting',
        )
    );


	$wp_customize->add_setting(
    'elitepress_lite_options[footer_copyright_text]',
    array(
       'default' => '<p>'.__( 'Proudly powered by <a href="https://wordpress.org">WordPress</a> | Theme: <a href="https://webriti.com" rel="nofollow">ElitePress</a> by Webriti', 'elitepress' ).'</p>',
		'type' =>'option',
		'sanitize_callback' => 'elitepress_copyright_sanitize_text'

	    )
	);
	$wp_customize->add_control(
	    'elitepress_lite_options[footer_copyright_text]',
	    array(
	        'label' => esc_html__('Copyright Text','elitepress'),
	        'section' => 'copyright_section_one',
	        'type' => 'textarea',
	    ));


	$wp_customize->add_setting(
    'elitepress_lite_options[footer_menu_bar_enabled]',
    array(
        'default' => true ,
		'type' =>'option',
		'sanitize_callback' => 'elitepress_sanitize_checkbox'

	    )
	);
	$wp_customize->add_control(
	    'elitepress_lite_options[footer_menu_bar_enabled]',
	    array(
	        'label' => esc_html__('Enable Footer Menu Bar','elitepress'),
	        'section' => 'copyright_section_one',
	        'type' => 'checkbox',
	));

	function elitepress_copyright_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

	}

}
add_action( 'customize_register', 'elitepress_copyright_customizer' );
