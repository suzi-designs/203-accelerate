<?php
/**
 * The template for displaying thank-you page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2 class="contact-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			

				<a class="thank-you-button" href="<?php echo home_url(); ?>"><i class ="fa fa-arrow-left"></i> Back to Home</a>

		</div><!-- .main-content -->
		
		

	</div><!-- #primary -->

<?php get_footer(); ?>
