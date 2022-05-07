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
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			
      <?php while ( have_posts() ) : the_post();
        $services = get_field('services');
        $client = get_field('client');
        $link = get_field('site_link'); 
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');?>

      <article class="case-study"></article>
        <aside class="case-study-sidebar">
          <h2><?php the_title();?> </h2>
          <h4><?php echo $services; ?></h4>
          <h6>Client: <?php echo $client; ?></h6>
          <?php the_content(); ?>
          <p><strong><a href="<?php echo $link; ?>">VIEW PROJECT &gt;</a></strong></p>
        </aside>

				<div class="case-study-images">
          <?php if($image_1) { ?>
            <img src="<?php echo $image_1; ?>" />
          <?php } ?>
          <?php if($image_2) { ?>
            <img src="<?php echo $image_2; ?>" />
          <?php } ?>
          <?php if($image_3) { ?>
            <img src="<?php echo $image_3; ?>" />
          <?php } ?>
        </div>

      </article>  
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

  <nav id="navigation" class="container">
	  <div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to work</span></a></div>
  </nav>

<?php get_footer(); ?>