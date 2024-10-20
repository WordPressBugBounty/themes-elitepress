<?php // Register and load the widget
	function elitepress_header_widget() {
	    register_widget( 'elitepress_header_widget' );
	}
	add_action( 'widgets_init', 'elitepress_header_widget' );

// Creating the widget
	class elitepress_header_widget extends WP_Widget {
	 
	function __construct() {
		parent::__construct(
			'elitepress_header_widget', // Base ID
			esc_html__('WBR: Header widget','elitepress'), // Widget Name
			array(
				'classname' => 'elitepress_header_widget',
				'description' => esc_html__('ElitePress header widget','elitepress'),
			),
			array(
				'width' => 300,
			)
		);
		
	 }
	
	public function widget( $args, $instance ) {
	
	echo $args['before_widget']; ?>
	
			<div class="contact-area">
				<div class="media">
					<div class="contact-icon">
						<?php if(!empty($instance['fa_icon'])) { ?>
						<i class="fa <?php echo esc_attr($instance['fa_icon']); ?>"></i>
						<?php } else { ?> 
						<i class="fa fa-home"></i>
						<?php } ?>
					</div>
					<div class="media-body">
						<?php if(!empty($instance['title'])) { ?>
						<h4><?php echo esc_html($instance['title']); ?></h4>
						<?php } else { ?> 
						<h4><?php echo esc_html__('Maecenas sollicitudin','elitepress'); ?></h4>
						<?php } ?>
						<?php if(!empty($instance['description'])) { ?>
						<h5><?php echo esc_html($instance['description']); ?></h5>
						<?php } else { ?> 
						<h5><?php echo esc_html__('California, United States.','elitepress'); ?></h5>
						<?php } ?>
					</div>
				</div>
			</div>

	<?php
	echo $args['after_widget'];
	}
	         
	// Widget Backend
	public function form( $instance ) {
	if ( isset( $instance[ 'fa_icon' ])){
	$fa_icon = $instance[ 'fa_icon' ];
	}
	else {
	$fa_icon = 'fa fa-home';
	}
	if ( isset( $instance[ 'title' ])){
	$title = $instance[ 'title' ];
	}
	else {
	$title = esc_html__('Maecenas sollicitudin','elitepress');
	}
	if ( isset( $instance[ 'description' ])){
	$description = $instance[ 'description' ];
	}
	else {
	$description = esc_html__('California, United States.','elitepress');
	}

	// Widget admin form
	?>
	
	<h4 for="<?php echo esc_attr($this->get_field_id( 'fa_icon' )); ?>"><?php esc_html_e( 'Icon','elitepress' ); ?></h4>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'fa_icon' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'fa_icon' )); ?>" type="text" value="<?php if($fa_icon) echo esc_attr( $fa_icon ); else echo 'fa fa-home';?>" />
	<span><?php esc_html_e('Get your Font Awesome','elitepress'); echo " ";?><a href="<?php echo esc_url('https://fontawesome.com/search')?>" target="_blank" ><?php esc_html_e('here','elitepress'); ?></a></span>
	
	<h4 for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title','elitepress' ); ?></h4>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php if($title) echo esc_attr( $title ); 
	else esc_attr_e('Maecenas sollicitudin','elitepress');?>" />
	
	
	
	<h4 for="<?php echo esc_attr($this->get_field_id( 'description' )); ?>"><?php esc_html_e( 'Description','elitepress' ); ?></h4>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'description' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'description' )); ?>" type="text" value="<?php if($description) echo esc_attr($description); else esc_html_e('California, United States.','elitepress');?>" /><br><br>
	
	<?php
    }
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	
	$instance = array();
		$instance['fa_icon'] = ( ! empty( $new_instance['fa_icon'] ) ) ? sanitize_text_field( $new_instance['fa_icon'] ): '';
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? sanitize_text_field($new_instance['description'] ): '';
		
		return $instance;
	}
	}