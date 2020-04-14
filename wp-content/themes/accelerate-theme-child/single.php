<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<section class="single-page">
		<div class="site-content">
			<div class="main-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('content', get_post_format()); ?>
					<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
					<?php comments_template(); ?>
				<?php endwhile; ?>
			</div>
	
			<?php get_sidebar(); ?>
		</div>
	</section>

	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('home/') ?>">&larr; <span>Back to Work</span></a></div>
	</nav>

<?php get_footer(); ?>
