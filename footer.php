<?php
/**
 * The template for displaying the footer
 * @package angelfour
 */
?>

</main>

    <footer class="footer">
	            
        <div class="container cols-2-8-2 cols-lg-3-6-3 cols-sm-5-7-0">

            <div class="col silverless">
                
                <div class="logo-holder">
                    
                    <a href="https://silverless.co.uk">
                        
                        <?php get_template_part('inc/img/silverless', 'logo');?>
                    
                    </a>
                
                </div>

            </div>

            <div class="col colophon">
	            
	            <span>&copy; Angel & Four <?php echo date ('Y');?></span> | 
            
            	<a href="/terms-conditions">Terms & Conditions</a> | 
	            
	            <a href="/privacy-policy">Privacy Policy</a>
            
            </div>
            
            <div class="col socials">
	
			    <?php if( have_rows('social_links', 'option') ): while( have_rows('social_links', 'option') ): the_row(); ?>
			
			    <a href="<?php the_sub_field('page_link'); ?>"><i class="fab fa-<?php the_sub_field('name'); ?>"></i></a>
			
			    <?php endwhile; endif; ?>
			
			</div>
    
        </div><!--container-->
    
    </footer>
    
    </div><!-- #page -->

    <?php wp_footer(); ?>
    
    </body>
    
</html>
