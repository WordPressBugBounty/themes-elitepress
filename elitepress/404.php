<?php get_header(); ?>
<!-- HC Page Header Section -->	
<?php get_template_part('banner','header'); ?>
<!-- /HC Page Header Section -->
<!-- 404 Error Section -->
<div class="error-section">		
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="error_404">
					<div class="text-center"><i class="fa fa-bug"></i></div>
				<h1><?php esc_html_e('Error 404','elitepress'); ?></h1>
				<h4><?php esc_html_e('Oops! Page not found','elitepress'); ?></h4>
				<p><?php esc_html_e('We are sorry, but the page you are looking for does not exist.','elitepress'); ?></p>
				<div class="project-btn-div"><a href="<?php echo esc_url( home_url( '/' ) );?>" class="project-btn"><?php esc_html_e('Go Back','elitepress'); ?></a></div>
				</div>
		</div>
	</div>
</div>
</div>
<?php get_footer();
//<!-- /404 Error Section -->