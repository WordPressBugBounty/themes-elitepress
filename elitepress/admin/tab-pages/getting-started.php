<?php
/**
 * Getting started template
 */
?>
<div id="getting_started" class="elitepress-tab-pane active">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
					<h3><?php esc_html_e( "Recommended Plugins", 'elitepress' ); ?></h3>
					<div style="border-top: 1px solid #eaeaea;">
						<p style="margin-top: 16px;">
							<?php esc_html_e( 'To take full advanctage of the theme features you need to install recommended plugins.', 'elitepress' ); ?>
						
						</p>
						<p><a target="_self" href="#recommended_actions" class="elitepress-custom-class"><?php esc_html_e( 'Click here','elitepress');?></a></p>
					</div>
				</div>
				<div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
					<h3><?php esc_html_e( "Start Customizing", 'elitepress' ); ?></h3>
					<div style="border-top: 1px solid #eaeaea;">
						<p style="margin-top: 16px;">
							<?php esc_html_e( 'After activating recommended plugins , now you can start customization.', 'elitepress' ); ?>
						
						</p>
						<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer','elitepress');?></a></p>
					</div>
				</div>
				<div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
					<h3><?php esc_html_e( "Documentation", 'elitepress' ); ?></h3>
					<div style="border-top: 1px solid #eaeaea;">
						<p style="margin-top: 16px;">
							<?php esc_html_e( 'Browse the documention for the detailed information regarding this theme.', 'elitepress' ); ?>
						
						</p>
						<p><a target="_blank" href="<?php echo esc_url('https://help.webriti.com/themes/elitepress/elitepress-wordpress-theme/'); ?>"><?php esc_html_e( 'Documentation','elitepress');?></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
				<img src="<?php echo esc_url( ELITEPRESS_TEMPLATE_DIR_URI ) . '/admin/img/elitepress.png'; ?>" alt="<?php esc_attr_e( 'elitepress Theme', 'elitepress' ); ?>" />
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="elitepress-tab-center">
				<h3><?php esc_html_e( "Useful Links", 'elitepress' ); ?></h3>
			</div>
			<div class=" useful_box">
                <div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
                    <a href="<?php echo esc_url('https://webriti.com/demo/wp/lite/elitepress'); ?>" target="_blank"  class="info-block">
                    	<div class="dashicons dashicons-desktop info-icon"></div>
                    	<p class="info-text"><?php echo esc_html__('Lite Demo','elitepress'); ?></p>
                	</a>
                    <a href="<?php echo esc_url('https://webriti.com/demo/wp/preview/?prev=elitepress'); ?>" target="_blank"  class="info-block">
                    	<div class="dashicons dashicons-book-alt info-icon"></div>
                    	<p class="info-text"><?php echo esc_html__('PRO Demo','elitepress'); ?></p>
                    </a>        
                </div>
                <div class="elitepress-tab-pane-half elitepress-tab-pane-first-half">
                    <a href="<?php echo esc_url('https://wordpress.org/support/view/theme-reviews/elitepress'); ?>" target="_blank"  class="info-block">
                    	<div class="dashicons dashicons-smiley info-icon"></div>
                    	<p class="info-text"><?php echo esc_html__('Your feedback is valuable to us','elitepress'); ?></p>
                    </a>
                    <a href="<?php echo esc_url('https://webriti.com/elitepress/'); ?>" target="_blank"  class="info-block">
                    	<div class="dashicons dashicons-book-alt info-icon"></div>
                    	<p class="info-text"><?php echo esc_html__('Premium Theme Details','elitepress'); ?></p>
                    </a>
                </div>
            </div>        
        </div>            
    </div>
</div>