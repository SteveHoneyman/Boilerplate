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
			$banner_id = get_field('custom_banner');	
			$banner_size = "full";
			$banner_arr = wp_get_attachment_image_src( $banner_id, $banner_size );

			$colour = get_field('choose_colour'); 
			$element_opacity = get_field('element_opacity');
		?>

		<div class="masthead wrap" style="background-image: url(<?php echo $banner_arr[0]; ?>); background-repeat: none; background-color: <?php echo $colour; ?>; opacity: <?php echo $element_opacity; ?>">
			<h2>masthead.</h2>
		</div>
	
	</header>
	
	






