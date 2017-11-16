<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	
<?php wp_head(); ?>
</head>

<body>
	
<div id="site-wrapper" class="group">

	<header role="banner">
		<div class="header-top group">	
			<a href="http://boilerplate.dev/">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" class="logo">
			</a>
			<a href="#" class="navicon"><i></i><i></i><i></i></a>
		</div>

		<nav class="main-nav-container group">
			<?php wp_nav_menu( array( 
				'menu_class' => 'main-nav',
				'menu_id' => 'nav',
				'theme_location' => 'header-menu', 
				'container' => '', 
				'fallback_cb' => '', 
				'depth' => '2'
			));?>	
		</nav>

		<?php 

			// $banner_id = get_field('custom_banner');	
			// $banner_size = "full";
			// $banner_arr = wp_get_attachment_image_src( get_field('custom_banner'), 'full' );

			$banner_arr = wp_get_attachment_image_src( get_field('custom_banner'), 'full' );
			$banner_tat_arr = wp_get_attachment_image_src(get_field ('banner_tat'), 'full');
			$colour = hex2rgba(get_field('choose_colour'), get_field('element_opacity')); 
		//	$element_opacity = get_field('element_opacity');
		?>

		<div class="masthead wrap">

			<style>
				
				.masthead {
					background-image: url('<?php echo $banner_arr[0]?>');
					background-color: <?php echo $colour; ?>; 
				/*	opacity: <?php echo $element_opacity; ?> ; */
					background-blend-mode: <?php echo strtolower(get_field('blend')) ; ?>;
				}

				.masthead:after {
					background-image: url('<?php echo $banner_tat_arr[0]?>');
				}

			</style>
				



			<h2><!-- text --></h2>	
		</div>
	
	</header>
	
	






