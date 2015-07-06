<?php
/**
* The template for displaying the homepage
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
*  @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate_Theme 1.1
*/

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<!--Add Featured Word Section-->
<section class="featured-work">
	<!--div class="site-content"-->
		<h4>Featured Work</h4>
			<ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while (have_posts()): the_post(); 
					$image_1= get_field("image_1");
					$size= "medium";
				?>

				<li class="individual-featured-work"?>
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</li>
				
				<?php endwhile; //end of the loop ?>
				<?php wp_reset_query(); //resets the altered query back to the original ?>	
			</ul>
	<!--/div-->
</section>

<!--Add Services Section-->
<section class="services">
	<!--div class="site-content"-->
		<h4>Our Services</h4>
			<ul class="homepage-services">
				
				<?php
					$content_image = get_field('content_image', 47343);
					$influencer_image = get_field('influencer_image', 47343);
					$social_image = get_field('social_image', 47343);
					$design_image = get_field('design_image', 47343);
					$size = "small";
				?>

				<li class="services-offered">
					<div id="individual-service">
						<figure>
							<?php echo wp_get_attachment_image($content_image, $size); ?>						
						</figure>

						<a href="http://localhost/accelerate/about/"><p>Content Strategy</p></a>
						
					</div>
				</li>

				<li class="services-offered">
					<figure>
						<?php echo wp_get_attachment_image($influencer_image, $size); ?>
					</figure>

					<a href="http://localhost/accelerate/about/"><p>Influencer Mapping</p></a>
				</li>
				
				<li class="services-offered">
					<figure>
						<?php echo wp_get_attachment_image($social_image, $size); ?>
					</figure>

					<a href="http://localhost/accelerate/about/"><p>Social Media Strategy</p></a>
				</li>

				<li class="services-offered">
					<figure>
						<?php echo wp_get_attachment_image($design_image, $size); ?>
					</figure>

					<a href="http://localhost/accelerate/about/"><p>Design & Development</p></a>
				</li>
				
			</ul>
	<!--/div-->
</section>


<!--Add Recent Blog Post Section-->
<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h3>From the Blog</h3>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while (have_posts()): the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a>
			<?php endwhile; //end of the loop ?>
			<?php wp_reset_query(); //resets the altered query back to the original ?>	
		</div>
	</div>
</section>

<!--Add Twitter feed via dynamic sidebar-->
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
			<a href="http://www.twitter.com/mjdevelopz" class="follow-us">Follow Us <span>&rsaquo;</span></a>
		</div>
	<?php endif; ?>


<?php get_footer(); ?>