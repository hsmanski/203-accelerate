<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .site-content -->
	</div><!-- #primary -->

	<section class="featured-work">
		<div class="site-content">
			<h4 class="homepage-work-title">Featured Work</h4>
			<ul class="homepage-work-content">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
     		<?php while ( have_posts() ) : the_post();
					$image_1 = get_field('image_1');
					$size = "medium";
				?>
					<li class="homepage-work-item">
						<img src="<?php echo $image_1; ?>" class="homepage-work-img"/>
					
       			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</li>
     		<?php endwhile; ?> 
    	<?php wp_reset_query(); ?>
			</ul>
			
			
		</div> <!-- .site-content -->
	</section> <!-- .featured-work -->

	<section class="recent-posts">
 		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
     			<?php while ( have_posts() ) : the_post(); ?>
       			<h3><?php the_title(); ?></h3>
       			<?php the_excerpt(); ?> 
     			<?php endwhile; ?> 
    		<?php wp_reset_query(); ?>
 			</div>
 		</div> <!-- .site-content -->
</section> <!-- .recent-posts -->
<?php get_footer(); ?>
