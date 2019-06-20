<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package angelfour
 */
 
get_header();?>

<!-- ******************* Hero Content ******************* -->

<?php
	
    if( get_field('hero_type', $pageID) == 'image' ): 
        $heroImage = get_field('hero_background_image', $pageID);
    elseif ( get_field('hero_type', $pageID) == 'color' ): 
        $heroColor = get_field('hero_background_colour', $pageID);
    endif;
?>

<div class="hero <?php the_field( 'hero_height' , $pageID); ?>" style="background-image: url(<?php echo $heroImage['url']; ?>);">

	<div class="container">
	
	    <div class="row">
	        
	        <div class="hero__content">
				
				<h1 class="heading heading__xl heading__light center slide-up"><?php the_field( 'hero_heading', $pageID);?></h1>
				
				<div class="heading heading__sm heading__light center slow-fade hero__copy mt1"><?php the_field( 'hero_copy', $pageID );?></div>
	       
	        </div>    
	            
	    </div>
	
	</div>

</div><!--hero-->

<!-- ******************* Hero Content END ******************* -->

    <div class="container">
    
    	<h3 class="heading heading__lg heading__primary-color brand-line">Your search: <span class="heading__secondary-color"><?php the_search_query(); ?></span></h3>
		
		<div>
		
	    	<?php
		    	
		    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<!-- Code for search results -->
		    	
			<?php endwhile; endif; ?>
		
		</div>
        
    </div><!--c-->

</div><!--content-->
 
<?php get_footer(); ?>
