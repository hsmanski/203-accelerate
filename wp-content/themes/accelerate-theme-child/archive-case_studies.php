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
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
    <?php while ( have_posts() ) : the_post();
        $services = get_field('services'); 
        $image_1 = get_field('image_1'); ?>

      <article class="case-study"></article>
        <aside class="case-study-sidebar archive-case-studies">
          <h2><a href="<?php echo the_permalink(); ?>"><?php the_title();?></a> </h2>
          <h4><?php echo $services; ?></h4>
          <?php the_excerpt(); ?>
          <p class="view-projects"><strong><a href="<?php echo the_permalink(); ?>">VIEW PROJECT &gt;</a></strong></p>
        </aside>

				<div class="case-study-images archive-case-studies-img">
          <a href="<?php echo the_permalink(); ?>">
          <?php if($image_1) { ?>
            <img src="<?php echo $image_1; ?>" />
          <?php } ?>
          </a>
        </div>

      </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>