<?php
$elitepress_current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), elitepress_theme_data_setup() );
if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
<!-- Footer Section -->
<footer class="site-footer">
	<div class="container">
		<!-- Footer Widget -->
		<div class="row">
		<?php  dynamic_sidebar( 'footer_widget_area' );	 ?>
		</div>
		<!-- /Footer Widget -->
	</div>
</footer>
<!-- /Footer Section -->
<?php } ?>
<!-- Footer Copyright Section -->
<footer class="site-info">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<?php if($elitepress_current_options['footer_copyright_text'] != '') : ?>
					<div class="footer-copyright">
						<?php echo wp_kses_post($elitepress_current_options['footer_copyright_text']);?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-md-5">
			<?php if($elitepress_current_options['footer_menu_bar_enabled'] == true ) { ?>
			<?php
			wp_nav_menu( array(
					'theme_location' => 'footer_menu',
					'container'  => 'nav-collapse collapse navbar-inverse-collapse',
					'menu_class' => 'footer-menu-links',
					'fallback_cb' => 'webriti_fallback_page_menu',
					'walker' => new elitepress_nav_walker()
					)
				);
			?>
			<?php } ?>
			</div>
		</div>
	</div>
</footer>
<!-- /Footer Copyright Section -->
</div><!-- /Close of wrapper -->
<!--Scroll To Top-->
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top-->
<?php wp_footer(); ?>
	</body>
</html>
