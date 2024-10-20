<!-- Navigation Section -->
<?php
$elitepress_current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), elitepress_theme_data_setup() ); ?>
<div class="menu-section" style="background: transparent; border-top: 1px solid #ebebeb;">
		<nav role="navigation" class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			  	<span class="sr-only"><?php esc_html_e('Toggle navigation','elitepress'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
		
          <?php
		    if($elitepress_current_options['header_search_bar_enabled'] == false):
			$elitepress_menu_class = 'nav navbar-nav navbar-nav-active';
			else:
			$elitepress_menu_class='nav navbar-nav';
			endif;
			wp_nav_menu( array(  
					'theme_location' => 'primary',
					'container'  => 'nav-collapse collapse navbar-inverse-collapse',
					'menu_class' => $elitepress_menu_class,
					'fallback_cb' => 'elitepress_fallback_page_menu',
					'walker' => new elitepress_nav_walker()
					)
				);	
			?>
	
	<?php if($elitepress_current_options['header_search_bar_enabled']==true) { ?>	
	<form class="menu-box" id="top-menu-search" class="navbar-form navbar-left" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
				<input type="text" placeholder="<?php esc_attr_e('Search','elitepress');?>" name="s">
	</form>
	<?php }  ?>	
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	</div>
<!-- /Navigation Section -->