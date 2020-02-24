<?php
/**
 * Template name: about
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php the_content(); ?>	
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
				
	<section class="about-intro">
		<?php while ( have_posts() ) : the_post(); 
			$service_title = get_field('service_title');
			$intro = get_field('intro');
			?>
			<h4><?php echo $service_title; ?></h4>
			<p><?php echo $intro ?></p>
		<?php endwhile; ?> 
	</section>
	<section class="service-categories">
		<?php while ( have_posts() ) : the_post(); 
			$cat_title_1 = get_field('cat_title_1');
			$cat_title_2 = get_field('cat_title_2');
			$cat_title_3 = get_field('cat_title_3');
			$cat_title_4 = get_field('cat_title_4');
			$cat_1 = get_field('cat_1');
			$cat_2 = get_field('cat_2');
			$cat_3 = get_field('cat_3');
			$cat_4 = get_field('cat_4');
			
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$image_4 = get_field('image_4');
			$size = 'medium'; ?>
			
			<ul class="category-list">
				<li>
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size); 
							} ?>
					<div>
						<h4><?php echo $cat_title_1 ?></h4>
						<p><?php echo $cat_1 ?></p>
					</div>
				</li>
				<li class="2nd-cat">
					<?php if($image_2) {
						echo wp_get_attachment_image( $image_2, $size); 
							} ?>
					<div>
						<h4><?php echo $cat_title_2 ?></h4>
						<p><?php echo $cat_2 ?></p>
					</div>
				</li>
				<li id="3nd-cat">
					<?php if($image_3) {
						echo wp_get_attachment_image( $image_3, $size); 
							} ?>
					<div>
						<h4><?php echo $cat_title_3 ?></h4>
						<p><?php echo $cat_3 ?></p>
					</div>
				</li>
				<li id="4th-cat">
					<?php if($image_4) {
						echo wp_get_attachment_image( $image_4, $size); 
							} ?>
					<div>
						<h4><?php echo $cat_title_4 ?></h4>
						<p><?php echo $cat_4 ?></p>
					</div>
				</li>
			</ul>
		<?php endwhile; ?> 
		
		<nav id="navigation" class="container">
				<div class="center bottom-nav"><h4>Interested in working with us? </h4>
					<a class="about-button" href="<?php echo site_url('contact') ?>">Contact Us</a></div>
			</nav>
	</section>
	
<?php get_footer(); ?>