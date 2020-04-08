<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

<div id="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #primary-sidebar -->

	<?php else : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<aside class="widget widget_text">
				
				<div class="textwidget">
					<?php echo do_shortcode('[mc4wp_form id="47441"]'); ?>
				</div>
			</aside>

		</div>
	<?php endif; ?>
</div>
