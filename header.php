<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>
<body>
	<header>
		<section class="site-logo">logo</section>
		<section class="site-menus">
			<nav>
				<?php wp_nav_menu(array(
					"theme_location" => "theme_primary_menu"
				));
				?>
				<!-- <a href="#">Home</a>
				<a href="#">About Us</a>
				<a href="#">Products</a>
				<a href="#">Contact Us</a> -->
			</nav>
		</section>
	</header>
