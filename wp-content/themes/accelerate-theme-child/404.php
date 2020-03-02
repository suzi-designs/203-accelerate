<?php
/**
 * The template for displaying 404
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<div class="container-404">
				<h1>Well this is embarrassing...</h1>
				
				
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mars.jpg"/>
					<h2>It appears we lost our page. <br>Click below to get back on track.</h2>
					<a class="thank-you-button" href="<?php echo home_url(); ?>"><i class ="fa fa-arrow-left"></i> Back to Home</a>
			</div>
				
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
