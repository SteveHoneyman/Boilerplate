<?php 
/* 
* Template Name: Home Page
*/ 

get_header(); 

$fp_custom_posts = new WP_Query(array(
	'post_type' => 'Custom Post',
	'order' => 'ASC',
	'posts_per_page' => 2
)); 


$fp_blog_posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 4
));
?>

<div class="container">
	<section class="grid group">
		
		<!-- custom post type loop -->
		<?php 
		if (have_posts()) : 
			while ($fp_custom_posts->have_posts()) : $fp_custom_posts->the_post(); ?>	
		
				<div class="half-width">
					
					<!-- pull in images with width and height attributes removed-->
					<?php
        				$thumbnail_id = get_post_thumbnail_id();
						$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
					?>

					<img src="<?php echo $thumbnail_url[0]; ?>">

				</div>
			
			<?php endwhile; 
		endif; ?>

		<!-- blog post loop -->
		<?php if (have_posts()) :
			while ($fp_blog_posts->have_posts()) : $fp_blog_posts->the_post(); ?>
	
				<div class="box">
					<small><?php the_title(); ?></small>
				</div>
				
			<?php endwhile; 
			wp_reset_postdata(); 
		endif; ?>

	</section>	
</div>
	
<?php get_footer(); ?>


