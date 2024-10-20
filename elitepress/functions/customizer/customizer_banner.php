<?php
// Adding customizer home page settings

function elitepress_banner_page_customizer( $wp_customize ){

	/* Home Page Panel */
	$wp_customize->add_panel( 'banner_page', array(
		'priority'       => 900,
		'capability'     => 'edit_theme_options',
		'title'      => esc_html__('Banner Settings', 'elitepress'),
	) );
	
	/* Category Banner */
	$wp_customize->add_section( 'category_banner' , array(
		'title'      => esc_html__('Category', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Category Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_category]',
    array(
        'default' => esc_html__('Category title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_category]',
    array(
        'label' => esc_html__('Title','elitepress'),
        'section' => 'category_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_category]',
    array(
        'default' => esc_html__('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_category]',
    array(
        'label' => esc_html__('Description','elitepress'),
        'section' => 'category_banner',
        'type' => 'text',
    )
	);
	
	
	/* Archive Banner */
	$wp_customize->add_section( 'archive_banner' , array(
		'title'      => esc_html__('Archive', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Archive Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_archive]',
    array(
        'default' => esc_html__('Archive title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_archive]',
    array(
        'label' => esc_html__('Title','elitepress'),
        'section' => 'archive_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_archive]',
    array(
        'default' =>esc_html__('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_archive]',
    array(
        'label' => esc_html__('Description','elitepress'),
        'section' => 'archive_banner',
        'type' => 'text',
    )
	);
	
	
	/* Author Banner */
	$wp_customize->add_section( 'author_banner' , array(
		'title'      => esc_html__('Author', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Archive Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_author]',
    array(
        'default' => esc_html__('Author title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_author]',
    array(
        'label' => esc_html__('Title','elitepress'),
        'section' => 'author_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_author]',
    array(
        'default' => esc_html__('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_author]',
    array(
        'label' => esc_html__('Description','elitepress'),
        'section' => 'author_banner',
        'type' => 'text',
    )
	);
	
	
	/* 404 page Banner */
	$wp_customize->add_section( 'banner_404_banner' , array(
		'title'      => esc_html__('404', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For 404 Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_404]',
    array(
        'default' => esc_html__('404 title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_404]',
    array(
        'label' => esc_html__('Title','elitepress'),
        'section' => 'banner_404_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_404]',
    array(
        'default' => esc_html__('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_404]',
    array(
        'label' => esc_html__('Description','elitepress'),
        'section' => 'banner_404_banner',
        'type' => 'text',
    )
	);
	
	
	///* Tag Banner */
	$wp_customize->add_section( 'tag_banner' , array(
		'title'      => esc_html__('Tag', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Tag Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_tag]',
    array(
        'default' => esc_html__('Tag title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_tag]',
    array(
        'label' => esc_html__('Title','elitepress'),
        'section' => 'tag_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_tag]',
    array(
        'default' => esc_html__('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_tag]',
    array(
        'label' => esc_html__('Description','elitepress'),
        'section' => 'tag_banner',
        'type' => 'text',
    )
	);
	
	
	
	
	///* Search Banner */
	$wp_customize->add_section( 'search_banner' , array(
		'title'      => esc_html__('Search', 'elitepress'),
		'panel'  => 'banner_page',
   	) );
	

	// Banner Configuration For Search Template
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_title_search]',
    array(
        'default' => esc_html__('Search title','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_title_search]',
    array(
        'label' => esc_html__('Title','elitepress'),
        'section' => 'search_banner',
        'type' => 'text',
    )
	);

	
	$wp_customize->add_setting(
    'elitepress_lite_options[banner_description_search]',
    array(
        'default' => esc_html__('Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et dolore feugait.','elitepress'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'elitepress_lite_options[banner_description_search]',
    array(
        'label' => esc_html__('Description','elitepress'),
        'section' => 'search_banner',
        'type' => 'text',
    )
	);
}
add_action( 'customize_register', 'elitepress_banner_page_customizer' );