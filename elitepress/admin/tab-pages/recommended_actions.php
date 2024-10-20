<?php  
	$elitepress_actions = $this->recommended_actions;
	$elitepress_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="elitepress-tab-pane panel-close">
	<div class="action-list">
		<?php if($elitepress_actions): foreach ($elitepress_actions as $key => $elitepress_actionValue): ?>
		<div class="action" id="<?php echo esc_attr($elitepress_actionValue['id']); ?>">
			<div class="recommended_box col-md-6 col-sm-6 col-xs-12">
				<img width="772" height="180" src="<?php echo esc_url(ELITEPRESS_TEMPLATE_DIR_URI.'/images/'.str_replace(' ', '-', strtolower($elitepress_actionValue['title'])).'.png');?>">
				<div class="action-inner">
					<h3 class="action-title"><?php echo esc_html($elitepress_actionValue['title']); ?></h3>
					<div class="action-desc"><?php echo esc_html($elitepress_actionValue['desc']); ?></div>
					<?php echo wp_kses_post($elitepress_actionValue['link']); ?>
					<div class="action-watch">
						<?php if(!$elitepress_actionValue['is_done']): ?>
							<?php if(!isset($elitepress_actions_todo[$elitepress_actionValue['id']]) || !$elitepress_actions_todo[$elitepress_actionValue['id']]): ?>
								<span class="dashicons dashicons-visibility"></span>
							<?php else: ?>
								<span class="dashicons dashicons-hidden"></span>
							<?php endif; ?>
						<?php else: ?>
							<span class="dashicons dashicons-yes"></span>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
	</div>
</div>