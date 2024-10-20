<?php
// function for post meta
// function for post meta
if ( ! function_exists( 'elitepress_post_meta_content' ) ) :

function elitepress_post_meta_content()
{ 
					$current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), elitepress_theme_data_setup() ); ?>
					
						<div class="entry-meta">
							<span class="author">
							<?php esc_html_e('By','elitepress'); echo ' '; ?> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php echo esc_html( get_the_author());?></a>
							</span>
							<span class="tag-links">
							<?php 	$tag_list = get_the_tag_list();
							if(!empty($tag_list)) { ?>
							<?php esc_html_e('In','elitepress'); echo ' '; ?><?php the_tags('', ', ', ''); ?>
							<?php } ?>
							</span>
						</div>
			
			
<?php } endif; 
			// this functions accepts two parameters first is the preset size of the image and second  is for additional classes, you can also add yours 
			if(!function_exists( 'elitepress_post_thumbnail')) : 

			function elitepress_post_thumbnail($preset,$class){
			if(has_post_thumbnail()){ 
			$defalt_arg =array('class' => $class);
						if(!is_single()){?>
			
			<div class="blog-post-img">
					<?php the_post_thumbnail($preset, $defalt_arg); ?>
					<div class="post-date"><span><?php echo esc_html(get_the_date()); ?></span>
					</div>
			</div>
			
			<?php }
			else { ?>
			<div class="blog-post-img">
				<?php the_post_thumbnail($preset, $defalt_arg);?>
				<div class="post-date"><span><?php echo esc_html(get_the_date()); ?></span></div>
			</div>
			<?php } } } endif;
			// this functions accepts one parameters for image class
			if(!function_exists( 'elitepress_full_thumbnail')) : 					
			function elitepress_image_thumbnail($preset,$class){
			if(has_post_thumbnail()){ 
			$defalt_arg =array('class' => $class);
						the_post_thumbnail($preset, $defalt_arg);} } endif;
			// This Function Check whether Sidebar active or Not
			if(!function_exists( 'elitepress_post_layout_class' )) :

			function elitepress_post_layout_class(){
				if(is_active_sidebar('sidebar_primary'))
					{ echo 'col-md-8'; } 
				else 
					{ echo 'col-md-12'; }  
			 
			} endif; 
			
			// this functions accepts two parameters first is the preset size of the image and second  is for additional classes, you can also add yours 
if(!function_exists( 'elitepress_post_thumbnail')) : 

function elitepress_post_thumbnail(){
if(has_post_thumbnail()){ 
$defalt_arg =array('class' => "img-responsive");
?>
	<figure class="post-thumbnail">
				<?php if(is_active_sidebar('sidebar_primary')){ the_post_thumbnail('', $defalt_arg); } ?>
				<div class="entry-date"><span><?php echo esc_html(get_the_date()); ?></span></div>
	</figure>
<?php } } endif;