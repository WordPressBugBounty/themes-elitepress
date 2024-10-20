<?php // Adding customizer home page settings
function elitepress_header_widget_customizer( $wp_customize ){
		$wp_customize->add_setting( 'rambo_logo_length',
            array(
                'default' => 154,
                'transport'         => 'postMessage',
                'sanitize_callback' => 'absint'
            )
        );
    $wp_customize->add_control( new Elitepress_Slider_Custom_Control( $wp_customize, 'rambo_logo_length',
        array(
            'label' => esc_html__( 'Logo Width', 'elitepress'  ),
            'priority' => 50,
            'section' => 'title_tagline',
            'input_attrs' => array(
                'min' => 0,
                'max' => 500,
                'step' => 1,
            ),
        )
    ) );
//Header widget section
	$wp_customize->add_section('header_widget_settings' , array(
	'title'      => esc_html__('Header Widget Section', 'elitepress'),
	'panel'  => 'header_options',
	'priority'   => 300,
	) );
		// Site Intro Column Layout
		$wp_customize->add_setting('elitepress_lite_options[header_column_layout]',array(
		'default' => 3,
		'type' => 'option',
		'sanitize_callback' => 'elitepress_sanitize_select',
		) );
		$wp_customize->add_control('elitepress_lite_options[header_column_layout]',array(
		'type' => 'select',
		'label' => esc_html__('Select column layout','elitepress'),
		'section' => 'header_widget_settings',
		'choices' => array(1=>'1',2=>'2',3=>'3',4=>'4'),
		) );
	//Header widget
	class elitepress_WP_header_widget_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/widgets.php" class="button"  
	target="_blank"><?php esc_html_e('Click here to add a header widget','elitepress'); ?></a>
    <?php
    }
	}
	$wp_customize->add_setting(
		'header_widget',
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)	
	);
	$wp_customize->add_control( new elitepress_WP_header_widget_Customize_Control( $wp_customize, 'header_widget', array(	
			'section' => 'header_widget_settings',
			'priority'   => 500,
		))
	);
}
add_action( 'customize_register', 'elitepress_header_widget_customizer' );
?>