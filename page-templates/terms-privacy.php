<?php
/**
 * ============== Template Name: Terms and Privacy
 *
 * @package angelfour
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="content">
	
	<a href="<?php echo home_url(); ?>" class="logo-terms slow-fade"><?php get_template_part("inc/img/angelfour", "logo"); ?></a>
	
	<h1 class="heading heading__md heading__caps slide-up center mb1 mt2"><?php the_title(); ?></h1>
	
	<div class="text-terms pl2 pr2 pb8"><?php the_content(); ?></div>
	
</div><!--content-->

<?php endwhile; endif;

get_footer(); ?>
