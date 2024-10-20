<?php
$elitepress_current_options = wp_parse_args(  get_option( 'elitepress_lite_options', array() ), elitepress_theme_data_setup() );
if( $elitepress_current_options['blog_section_enabled']== true ) { ?>
<!-- Blog Section -->
<div class="home-blog">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<?php if( ($elitepress_current_options['blog_title'] != '') || ($elitepress_current_options['blog_description'] != '') ) : ?>
					<div class="section-header">
						<?php if($elitepress_current_options['blog_title']) { ?>
						<h3 class="section-title"><?php echo esc_html($elitepress_current_options['blog_title']); ?></h3>
						<?php }
						if($elitepress_current_options['blog_description']) { ?>
						<p class="section-subtitle"><?php echo esc_html($elitepress_current_options['blog_description']); ?></p>
						<?php } ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- /Section Title -->

		<!-- blog -->
		<div class="row">
			<?php
			$elitepress_args = array(
			'post_type' => 'post', 'posts_per_page' => 3);
			$elitepress_blog_query = null;
			$elitepress_blog_query = new WP_Query($elitepress_args);
			if($elitepress_blog_query->have_posts())
			{	while($elitepress_blog_query->have_posts()): $elitepress_blog_query->the_post();
			?>
			<div class="col-md-4">
				<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
				<?php if(has_post_thumbnail()){
				$elitepress_defalt_arg =array('class' => "img-responsive"); ?>
					<div class="post-thumbnail">
					<?php the_post_thumbnail('', $elitepress_defalt_arg); ?>
						<div class="entry-date"><span><?php echo esc_html(get_the_date()); ?></span></div>
					</div>
					<?php } ?>
					<div class="blog-info">
						<header class="entry-header">
							<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</header>
						<div class="entry-content">
							<p><?php echo wp_kses_post(elitepress_get_home_blog_excerpt()); ?></p>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile;
			wp_reset_postdata();
			} ?>

		</div>
		<!-- /blog -->
	</div>
</div>
<!-- /Blog Section -->
<div class="clearfix"></div>
<?php }
