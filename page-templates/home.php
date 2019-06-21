<?php
/**
 * ============== Template Name: Home Page
 *
 * @package angelfour
 */
get_header();?>

<div class="content">

	<?php
		
	$home     = get_field("home");
	$intro    = get_field("introduction");
	$our_wine = get_field("our_wine");
	$about_us = get_field("about_us");
	$contact  = get_field("contact_us");
	
	?>

    <div class="home container cols-2-5-5 pl2 cols-lg-3-5-4 cols-md-0-7-5 pr2">
		
		<div class="col menu">
			
			<?php wp_nav_menu( array(
				'theme_location' => 'main-menu',
				'container_class' => 'Menu' ) );
			?>
			
		</div>
		
		<div class="col scroll-content">
			
			<section class="section container no-gutter-c cols-12" id="home_page">
				
				<div class="col container no-gutter-c cols-12 align-vert-b cols-mb2">
					
					<div class="col logo">
						
						<?php get_template_part('inc/img/angelfour', 'logo');?>
						
						<div class="text slow-fade">Sparkling wine<br>brut</div>
					
					</div>
					
				</div>
				
				<div class="col align-vert-b pb5 heading heading__md heading__caps mb1 slide-up title-home"><?php echo $home["heading"]; ?></div>
				
			</section>
			
			<section class="section" id="introduction">
				
				<div class="heading heading__md heading__caps mb1 slide-down"><?php echo $intro["heading"]; ?></div>
				
				<div class="copy"><?php echo $intro["copy"]; ?></div>
				
			</section>
			
			<section class="section" id="our_wine">
				
				<div class="heading heading__md heading__caps mb1 slide-down"><?php echo $our_wine["heading"]; ?></div>
				
				<div class="copy mb2"><b><?php echo $our_wine["copy"]; ?></b></div>
				
				<?php foreach($our_wine["content"] as $item): ?>
				
				<div class="item mb1">
					
					<div class="icon"><img src="<?php echo $item["icon"]["url"]; ?>"></div>
					
					<div class="heading heading__caps font400"><?php echo $item["title"]; ?></div>
					
					<div class="copy"><?php echo $item["description"]; ?></div>
					
				</div>
				
				<?php endforeach; ?>
				
			</section>
			
			<section class="section" id="about_us">
				
				<div class="heading heading__md heading__caps mb1 slide-down"><?php echo $about_us["heading"]; ?></div>
				
				<?php foreach($about_us["content"] as $item): ?>
				
				<div class="item mb1">
					
					<div class="heading heading__caps font400"><?php echo $item["title"]; ?></div>
					
					<div class="copy"><?php echo $item["description"]; ?></div>
					
				</div>
				
				<?php endforeach; ?>
				
			</section>
			
			<section class="section" id="contact_us">
				
				<div class="heading heading__md heading__caps mb1 slide-down">Contact Us</div>
				
				<div class="copy"><?php echo $contact["copy"]; ?></div>
				
				<?php echo do_shortcode('[contact-form-7 id="2352" title="Contact" html_id="contact-form"]'); ?>
				
			</section>
			
		</div>
		
		<div class="col animation">
			
			<div class="wrapper-images">
				
				<figure id="wrapper-bottle">
				
					<img class="bottle slow-fade" src="<?php echo get_template_directory_uri() . "/inc/img/bottle.png"; ?>" style="height: 100%;">
					
					<div class="shadow-bottles">
						<?php get_template_part('inc/img/shadow', 'bottles');?>
					</div>
					
				</figure>
				
				<figure id="wrapper-glass">
				
					<img class="glass" src="<?php echo get_template_directory_uri() . "/inc/img/glass.png"; ?>" style="height: 100%;">
					
				</figure>
				
			</div>
			
		</div>
		
	</div>

</div><!--content-->

<?php get_footer(); ?>
