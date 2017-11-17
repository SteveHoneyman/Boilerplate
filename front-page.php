<?php 
/* 
* Template Name: Home Page
*/ 

get_header(); 
?>

<!-- custom post args -->
<?php 
$args = array(
	'post_type' => 'Custom Post',
	'order' => 'ASC',
	'posts_per_page' => 2
);

$fp_custom_posts = new WP_Query( $args ); ?>

<!-- blog post args -->
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4
);
    
$fp_blog_posts = new WP_Query( $args ); ?>


<!-- page content -->
<div class="container">
	<section class="grid group">
		
		<!-- custom post type loop -->
		<?php 
		if ( have_posts() ) : 
			while ( $fp_custom_posts->have_posts() ) : $fp_custom_posts->the_post(); ?>	
		
				<div class="half-width">
					<?php the_post_thumbnail(); ?>
				</div>
			
			<?php endwhile; 
		endif; ?>

		<!-- blog post loop -->
		<?php if ( have_posts() ) :
			while ( $fp_blog_posts->have_posts() ) : $fp_blog_posts->the_post(); ?>
	
				<div class="box">
					<small><?php the_title(); ?></small>
				</div>
				
			<?php endwhile; 
			wp_reset_postdata(); 
		endif; ?>

	</section>	
</div>
	
<?php get_footer(); ?>


