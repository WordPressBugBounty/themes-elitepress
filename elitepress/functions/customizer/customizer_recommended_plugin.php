<?php
/* Notifications in customizer */


require get_template_directory() . '/functions/customizer-notify/elitepress-customizer-notify.php';


$elitepress_config_customizer = array(
	'recommended_plugins'       => array(
		'webriti-companion' => array(
			'recommended' => true,
			'description' => sprintf( esc_html__( 'Install and activate the %s plugin to take full advantage of all the features this theme has to offer.', 'elitepress' ), sprintf( '<strong>%s</strong>', 'Webriti Companion' ) ),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'elitepress' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'elitepress' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'elitepress' ),
	'activate_button_label'     => esc_html__( 'Activate', 'elitepress' ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'elitepress' ),
);
elitepress_Customizer_Notify::init( apply_filters( 'elitepress_customizer_notify_array', $elitepress_config_customizer ) );