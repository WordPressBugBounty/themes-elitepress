<?php get_header();?>
<?php get_template_part('banner','header'); ?>
<!-- Page Title Section -->
<div class="clearfix"></div>
<!-- /Page Title Section -->
	
<!-- Blog Full Width Section -->
<div class="blog-section">
	<div class="container">
		<div class="row">
			<!--Blog Area-->
			<div class="<?php elitepress_post_layout_class(); ?>" >
				<div class="site-content">
					<?php if ( have_posts() ) : ?>
					<h1 class="archive-title">
					<?php if ( is_day() ) : ?>
					<?php  esc_html_e( "Daily Archive", 'elitepress' ); echo ' '; echo esc_html(get_the_date()); ?>
					<?php elseif ( is_month() ) : ?>
					<?php 
				        $elitepress_monthly_text = __('Monthly Archive','elitepress');
                                        /* translators: 1: Archive name, 2: date */
				        printf( esc_html__( '%1$s %2$s', 'elitepress' ), esc_html($elitepress_monthly_text), esc_html(get_the_date()) ); ?>
				        <?php elseif ( is_year() ) : ?>
				        <?php 
				        $elitepress_yearly_text = __('Yearly Archive','elitepress');
                                        /* translators: 1: Archive name, 2: date */
				        printf( esc_html__( '%1$s %2$s', 'elitepress' ), esc_html($elitepress_yearly_text), esc_html(get_the_date()) ); ?>
        
						<?php else : ?>
						<?php esc_html_e( "Blog Archive","elitepress"); ?>
						<?php endif; ?>
					</h1>
					<?php 
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content','');
						endwhile;
					endif;?>			
					<div class="paginations">
					<?php
					// Previous/next page navigation.
					the_posts_pagination( array(
					'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
					'next_text'          => '<i class="fa fa-angle-double-right"></i>',
					) );
					?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!--/Blog Area-->
			<div class="col-md-4">
				<div class="sidebar-section-right">
				<?php get_sidebar(); ?>
				</div>
			</div>
		</div>	
	</div>
</div>
<?php get_footer(); ?>
<!-- /Blog Full Width Section -->
<div class="clearfix"></div>