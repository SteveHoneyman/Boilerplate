<!DOCTYPE html>
<html lang="en">

<head>

	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
			<ul id="nav" class="main-nav">
				<li><a href="#">Layouts</a>
					<ul>
						<li><a href="http://boilerplate.dev/nav-item-two/">Single Page</a></li>
						<!--<li><a href="http://boilerplate.dev/nav-item-three/">Basic Grid</a></li>-->
						<li><a href="http://boilerplate.dev/nav-item-four/">Nth Child Grid</a></li>
					</ul>
				</li>

				<li><a href="#">Nav Item</a>
				<!--	
					<ul>
						<li><a href="#">Sub Nav Item</a></li>
						<li><a href="#">Sub Nav Item</a></li>
						<li><a href="#">Sub Nav Item</a></li>
						<li><a href="#">Sub Nav Item</a></li>
						<li><a href="#">Sub Nav Item</a></li>
						<li><a href="#">Sub Nav Item</a></li>
					</ul>
				-->	
				</li>

				<li><a href="#">Nav Item</a></li>
				<li><a href="#">Nav Item</a></li>
				<li><a href="#">Nav Item</a></li>
			</ul>
		</nav>

		<?php 
			$banner_id = get_field('custom_banner');	
			$banner_size = "full";
			$banner_arr = wp_get_attachment_image_src( $banner_id, $banner_size );
		?>

		<div class="masthead wrap" style="background-image: url(<?php echo $banner_arr[0]; ?>); background-repeat: repeat-x; ">
			<h2>masthead.</h2>
		</div>
	
	</header>
	
	






