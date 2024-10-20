<?php
/************ Home Page Banner meta post ****************/
add_action('admin_init','elitepress_init');
function elitepress_init()
	{
	foreach (array('post','page') as $type) 
		{
			add_meta_box('my_banner_meta', 'Description', 'elitepress_meta_banner', $type, 'normal', 'high');
		}
		
			add_action('save_post','elitepress_meta_save');
	}	
function elitepress_meta_banner()
	{
		global $post ;
		
		$banner_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'banner_chkbx', true ));
		$banner_title =sanitize_text_field( get_post_meta( get_the_ID(), 'banner_title', true ));
		$banner_description = sanitize_text_field( get_post_meta( get_the_ID(), 'banner_description', true )); 
		?>
		<input type="checkbox" name="banner_chkbx" id="banner_chkbx" <?php if($banner_chkbx){echo "checked='checked'";}?> /><?php esc_html_e('Allow banners on the page','elitepress'); ?>
		<p><h4 class="heading"><?php esc_html_e("Enter the banner's heading title","elitepress");?></h4></p>
		<p><input type="text" id="banner_title" name="banner_title" placeholder="<?php esc_attr_e('Enter Banner Title','elitepress')?>"  value="<?php if (!empty($banner_title)) echo esc_attr($banner_title); ?>" > </p>
		<p><h4 class="heading"><?php esc_html_e('Description','elitepress');?></h4></p>
		<p><textarea id="banner_description" name="banner_description" placeholder="<?php esc_attr_e('Enter banner description','elitepress')?> " style="width: 480px; height: 80px; padding: 0px;" rows="3" cols="10" ><?php if (!empty($banner_description)) { echo esc_html($banner_description); } ?></textarea></p>
		<?php }
		
function elitepress_meta_save($post_id) 
{	
	if((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX) || isset($_REQUEST['bulk_edit']))
        return;
		
	if ( ! current_user_can( 'edit_page', $post_id ) )
	{     return ;	} 		
	if(isset($_POST['post_ID']))
	{ 	
		$post_ID = $_POST['post_ID'];				
		$post_type=get_post_type($post_ID);
		if($post_type== 'post' || 'page'){
			
			update_post_meta($post_ID, 'banner_chkbx', sanitize_text_field($_POST['banner_chkbx']));
			update_post_meta($post_ID, 'banner_title', sanitize_text_field($_POST['banner_title']));
			update_post_meta($post_ID, 'banner_description', sanitize_text_field($_POST['banner_description']));
		}	
	}			
}