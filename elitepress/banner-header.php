<?php
get_header();
$elitepress_current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), elitepress_theme_data_setup() );


 if(is_category()){
  $elitepress_h1=$elitepress_current_options['banner_title_category'];
  $elitepress_bd=$elitepress_current_options['banner_description_category'];
  }else if(is_author())
  {
  $elitepress_h1=$elitepress_current_options['banner_title_author'];
  $elitepress_bd=$elitepress_current_options['banner_description_author'];
  }else if(is_404())
  {
  $elitepress_h1=$elitepress_current_options['banner_title_404'];
  $elitepress_bd=$elitepress_current_options['banner_description_404'];
  }
  else if(is_tag())
  {
  $elitepress_h1=$elitepress_current_options['banner_title_tag'];
  $elitepress_bd=$elitepress_current_options['banner_description_tag'];
  }else if(is_archive() )
  {
  $elitepress_h1=$elitepress_current_options['banner_title_archive'];
  $elitepress_bd=$elitepress_current_options['banner_description_archive'];
  }
  else if(is_search())
  {
  $elitepress_h1=$elitepress_current_options['banner_title_search'];
  $elitepress_bd=$elitepress_current_options['banner_description_search'];
  }
  else
  {
  $elitepress_h1=get_post_meta( $post->ID, 'banner_title', true );
  $elitepress_bd=get_post_meta( $post->ID, 'banner_description', true );
  }
  
 if($elitepress_h1!='' || $elitepress_bd!='') { ?>
<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title">
            <?php if($elitepress_h1!=''){ ?>
					  <h1><?php echo esc_html($elitepress_h1); ?></h1>
            <?php } ?>
  					<div class="page-title-seprator"></div>
            <?php if($elitepress_bd!=''){ ?>
  					<p><?php echo esc_html($elitepress_bd); ?></p>
            <?php } ?>
  				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div class="clearfix"></div>