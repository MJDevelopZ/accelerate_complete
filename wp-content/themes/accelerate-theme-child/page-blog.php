<?php
/**
 * The template for displaying blog landing page.
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

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="blog-post">
				<!--Alter the query to show the most recent posts-->
				<?php query_posts('posts_per_page=5'); ?>
				<?php while (have_posts()): the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt('content-blog'); ?>
					<a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a>
				<?php endwhile; //end of the loop ?>
				<?php wp_reset_query(); //resets the altered query back to the original ?>	
		</div>

			<!--Add code for new/older posts-->
			<?php if ( have_posts() ): ?>
				<div id="navigation" class="container">
			        <div class="left"><?php next_posts_link('&larr; Older Posts'); ?></div>
			        <div class="right"><?php previous_posts_link('Newer Posts &rarr;'); ?></div>
			    </div>
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>