<?php //Pro Details
function elitepress_pro_feature_customizer( $wp_customize ) {
class elitepress_WP_Pro__Feature_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <div class="elitepress-pro-features-customizer">
    <ul class="elitepress-pro-features">
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Header Layout Variations','elitepress' ); ?>
        </li>
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Advanced Theme Style Settings','elitepress' ); ?>
        </li>
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Multiple Page Templates','elitepress' ); ?>
        </li>   
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Portfolio Management','elitepress' ); ?>
        </li>
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Testimonial Section','elitepress' ); ?>
        </li>
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Client Section','elitepress' ); ?>
        </li>      
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Manage Contact Details','elitepress' ); ?>
        </li>
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Section Reordering','elitepress' ); ?>
        </li>
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Support for WPML / Polylang','elitepress' ); ?>
        </li>
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Google Map','elitepress' ); ?>
        </li>
        <li>
            <span class="elitepress-pro-label"><?php esc_html_e( 'PRO','elitepress' ); ?></span>
            <?php esc_html_e( 'Quality Support','elitepress' ); ?>
        </li>
    </ul>
    <a target="_blank" href="<?php echo esc_url('http://webriti.com/elitepress/');?>" class="elitepress-pro-button button-primary"><?php esc_html_e( 'UPGRADE TO PRO','elitepress' ); ?></a>
    <hr>
</div>
    <?php
    }
}
$wp_customize->add_section( 'elitepress_pro_feature_section' , array(
		'title'      => esc_html__('View PRO Details', 'elitepress'),
		'priority'   => 1,
   	) );

$wp_customize->add_setting(
    'upgrade_pro_feature',
    array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new elitepress_WP_Pro__Feature_Customize_Control( $wp_customize, 'upgrade_pro_feature', array(
		'section' => 'elitepress_pro_feature_section',
		'setting' => 'upgrade_pro_feature',
    ))
);
class elitepress_WP_Feature_document_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
   
     <div class="elitepress-pro-content">
        <ul class="elitepress-pro-des">
                
                <li> <?php esc_html_e('You will enjoy more frontpage sections along with their settings.','elitepress');?></li>
                
                <li> <?php esc_html_e('Theme comes with multiple page settings like about us, service etc.','elitepress');?> </li>
                
                <li> <?php esc_html_e('Portfolio section, templates , archives with 3 possible layouts.','elitepress');?></li>
                <li> <?php esc_html_e('Theme comes with a beautifully designed section where you can manage your contact details.','elitepress');?></li>
                <li> <?php esc_html_e('Show all your clients, testimonials on front page.','elitepress');?></li>
                <li> <?php esc_html_e('Drag and drop panels to change the order of sections.','elitepress');?></li>
                <li> <?php esc_html_e('Various color schemes , you can even create yours.','elitepress');?></li>
                <li> <?php esc_html_e('Translation ready supporting popular plugins WPML / Polylang.','elitepress');?></li>
                <li> <?php esc_html_e('Support for google map 24/7 professional support.','elitepress');?></li>
                <li> <?php esc_html_e('Dedicated support, various widget and sidebar management.','elitepress');?></li>
                
            </ul>
     </div>
    <?php
    }
}

$wp_customize->add_setting(
    'doc_Review_feature',
    array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new elitepress_WP_Feature_document_Customize_Control( $wp_customize, 'doc_Review_feature', array(	
		'section' => 'elitepress_pro_feature_section',
		'setting' => 'doc_Review_feature',
    ))
);

}
add_action( 'customize_register', 'elitepress_pro_feature_customizer' );