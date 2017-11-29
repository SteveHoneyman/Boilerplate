<?php /* Template Name: :single column layout */ get_header(); ?>

	<!-- page content starts -->
	<div class="container wrap">

		<div class="slider"></div>
	
		<section class="group">

			<?php if(is_page(8) && $map = get_field('map' , 'options') ) : ?>

				<div class="map">
					<div 
						id="map" 
						data-lat="<?php echo $map['lat'] ?>"
						data-lng="<?php echo $map['lng'] ?>"
					>
					</div>
				</div>	

			<?php endif; ?>	
			
			<div class="full-width-empty wrap">

				<form>
					<label for="first_name"></label>
					<input type="text" name="first_name" id="first_name" placeholder="First Name">

					<label for="second_name"></label>
					<input type="text" name="last_name" id="second_home" placeholder="Second Name">

					<label for="email"></label>
					<input type="email" name="email" id="email" placeholder="Email">

					<label for="submit"></label>
					<input type="submit" name="submit" id="submit" value="Submit">
				</form>

			</div>

		</section>	
	
	</div>

<?php get_footer(); ?>