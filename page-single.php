<?php /* Template Name: :single column layout */ get_header(); ?>

	<!-- page content starts -->
	<div class="container wrap">
	
		<section class="group">
			<img src="<?php bloginfo('template_directory'); ?>/images/image-2000.svg" class="full-width-empty">
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