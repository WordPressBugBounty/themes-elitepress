<!-- /Logo goes here -->
<div class="container">
	<div class="row">
		<div class="col-md-3">
		<?php
		$elitepress_current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), elitepress_theme_data_setup() );?>
		<div class="site-logo">
				<?php
				if($elitepress_current_options['text_title'] ==false && $elitepress_current_options['upload_image_logo']!='' && !(has_custom_logo()) )
		        { ?>
	            	<h1><a  href="<?php echo esc_url(home_url( '/' )); ?>">
	                	<img src="<?php echo esc_url($elitepress_current_options['upload_image_logo']); ?>" style="height:<?php if($elitepress_current_options['height']!='') { echo esc_attr($elitepress_current_options['height']); }  else { "80"; } ?>px; width:<?php if($elitepress_current_options['width']!='') { echo esc_attr($elitepress_current_options['width']); }  else { "200"; } ?>px;" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>" />
	                </a></h1>
		            <?php
	            }
				if(has_custom_logo() )
				{ ?>
					<h1><a  href="<?php echo esc_url(home_url( '/' )); ?>">
						<?php
			            if ( has_custom_logo() )
			            {
                            $elitepress_custom_logo_id = get_theme_mod( 'custom_logo' );
                            $elitepress_post_status=get_post_status ( $elitepress_custom_logo_id );
	    					$elitepress_logo_options = get_option('elitepress_lite_options');
					        $elitepress_logo_options['upload_image_logo'] = '';
					        update_option('elitepress_lite_options', $elitepress_logo_options);
							$elitepress_image = wp_get_attachment_image_src( $elitepress_custom_logo_id , 'full' );
							echo '<img class="custom-logo" src="'.esc_url($elitepress_image[0]).'" alt="'.esc_attr(get_bloginfo( 'title' )).'" />';
						}?>
					</a></h1>
				<?php
		        }?>
    			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    				<div class=elegent_title_head><?php bloginfo( 'name' ); ?></div>
    			</a></h1>

    			<?php
    			$elitepress_description = get_bloginfo( 'description', 'display' );
	            if ( $elitepress_description || is_customize_preview() )
	                { ?>
	                	<p class="site-description"><?php echo $elitepress_description; ?></p>
	            <?php }?>

		</div>
		</div>
		<div class="col-md-9">
			<div class="row">
				<?php if( is_active_sidebar('header_widget_area') ) :
						dynamic_sidebar( 'header_widget_area' );
				endif;
				?>
			</div>
		</div>
	</div>
</div>
