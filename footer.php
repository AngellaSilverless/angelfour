<?php
/**
 * The template for displaying the footer
 * @package angelfour
 */
?>

</main>

    <footer class="footer">
	            
        <div class="container cols-4">

            <div class="col colophon">&copy; Angel & Four <?php echo date ('Y');?></div>

            <div class="col silverless">
                
                <div class="logo-holder">
                    
                    <a href="https://silverless.co.uk">
                        
                        <?php get_template_part('inc/img/silverless', 'logo');?>
                    
                    </a>
                
                </div>

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