<?php /* Template Name: :nth-child layout */ get_header(); ?>

	<!-- page content starts -->
	<div class="container wrap">
	
		<div class="slider"></div>

		<section class="group">
		
			<?php if( have_rows('nth-repeater') ): while ( have_rows('nth-repeater') ) : the_row(); 

				$image = get_sub_field('pic'); ?>
				
				<a href="#" class="nth-grid">
					<img src="<?php echo $image; ?>" />	
					<?php the_sub_field('text'); ?>
				</a>
			
			<?php endwhile; endif; ?>		
			
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
			<a href="#" class="nth-grid"></a>
		
		</section>	
	
	</div>

<?php get_footer(); ?>

