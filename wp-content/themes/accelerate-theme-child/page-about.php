<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="about-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="aboutpage-hero">
					<?php the_content(); ?>

					<!--Custom Fields-->
					<?php
						$hero_statement = get_field('hero_statement');
						$services = get_field('services');
						$content = get_field('content');
						$influencer = get_field('influencer');
						$social_media = get_field('social_media');
						$design_and_development = get_field('design_and_development');
						$content_image = get_field('content_image');
						$influencer_image = get_field('influencer_image');
						$social_image = get_field('social_image');
						$design_image = get_field('design_image');
						$contact_message = get_field('contact_message');
						$size = 'full';
					?>

					<!--Add Hero Statement-->
					<div id="hero-statement">
						<p><span class="company-name">Accelerate</span> <?php echo $hero_statement; ?></p>
					</div><!-- #hero-statement -->
				</div><!--.aboutpage-hero-->
				
			<?php endwhile; // end of the loop. ?>

			<article class="about-accelerate">
				<div id="services">
					<h4>Our Services</h4>
					<p><?php echo $services; ?></p>
				</div>

				<div id="content-strategy">
					<div class="content-text">
						<h4>Content Strategy</h4>
						<p><?php echo $content; ?></p>
					</div>

					<?php 
						if ($content_image == true) { ?>
						<?php echo '<div class="content-image">' .  wp_get_attachment_image( $content_image, $size ) . '</div>';
					} ?>
				</div>

				<div id="influencer-mapping">
					<div class="influencer-text">
						<h4>Influencer Mapping</h4>
						<p><?php echo $influencer; ?></p>
					</div>

					<?php 
						if($influencer_image == true) { ?>
						<?php echo '<div class="influencer-image">' . wp_get_attachment_image( $influencer_image, $size ) . '</div>'; 
					} ?>
				</div>

				<div id="social-media">
					<div class="social-text">
						<h4>Social Media</h4>
						<p><?php echo $social_media; ?></p>
					</div>

					<?php 
						if($social_image == true) { ?>
						<?php echo '<div class="social-image">' . wp_get_attachment_image( $social_image, $size ) . '</div>';
					} ?>
				</div>

				<div id="design_and_development">
					<div class="design-text">
						<h4>Design &#38; Development</h4>
						<p><?php echo $design_and_development; ?></p>
					</div>

					<?php 
						if($design_image == true) { ?>
						<?php echo '<div class="design-image">' . wp_get_attachment_image( $design_image, $size ) . '</div>';
					} ?>
				</div>
			</article>

			<div id="about-footer">
				
					<div class="contact-message">
						<strong><?php echo $contact_message; ?></strong>
						<a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
					</div>
				
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>