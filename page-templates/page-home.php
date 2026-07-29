<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<div class="homepage">
	<div class="homepage-banner">
		<img src="<?php echo get_field('banner_image')['url'];?>" class="homepage-banner_img" alt="<?php echo get_field('banner_image')['alt'];?>">
		<div class="homepage-banner_content">
			<h1><?php echo get_field('banner_title'); ?></h1>
			<h4><?php echo get_field('banner_subtitle'); ?></h4>
			<a href="#" class="btn">Pre-order now</a>
		</div>
	</div>
	<div id="feature-strip" class="homepage-feature">
		<?php if( have_rows('feature_strip') ): ?>
			<?php while( have_rows('feature_strip') ) : the_row(); ?>
				<div>
					<img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>" width="100" height="100">
					<h5><?php echo get_sub_field('text'); ?></h5>
				</div>
			<?php endwhile; ?>
		<?php endif;?>
	</div>
	<div id="gallery" class="homepage-gallery">
		<?php if( have_rows('gallery') ): $i=0; 
			$gallery = get_field('gallery'); 
			$mainImg = $gallery[0]; ?> 
			 <div class="homepage-gallery_main">
		        <img id="mainImage" src="<?php echo $mainImg['image']['url']; ?>" alt="<?php echo $mainImg['image']['alt']; ?>" width="1000" height="auto">
		    </div>
			<div class="homepage-gallery_thumbnails">
				<?php while( have_rows('gallery') ) : the_row();
					$classes = "thumb"; 
					if($i==0){
						$classes .= " active"; 
					}$i++;
					?>
					<img class="<?php echo $classes; ?>" src="<?php echo get_sub_field('image')['url']; ?>" data-full="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" width="100" height="auto">
				<?php endwhile; ?>
			</div>
		<?php endif;?>
	</div>
	<div id="social-proof" class="homepage-testimonials">
		<h2>Trusted by Explorers</h2>
		<?php if( have_rows('testimonials') ): ?>
			<div class="homepage-testimonials_content">
			<?php while( have_rows('testimonials') ) : the_row(); ?>
				<div>
					<p><?php echo get_sub_field('testimonial'); ?></p>
					<hr>
					<h6><?php echo get_sub_field('by'); ?></h6>
					<?php echo render_stars(get_sub_field('rating')); ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif;?>
	</div>
</div>

<?php get_footer(); 
