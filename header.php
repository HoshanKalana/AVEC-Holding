<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base_theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>
		<?php wp_title( '-', true, 'right' ); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<div id="page" class="site-main">
		<header class="main-header">
			<div class="inner">
				<div class="top-bar">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-md-6 col-lg-4">
								<div class="topbar-left">
									<span>WELCOME TO OUR AVEC STORE!</span>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4">
								<div class="topbar-center">
									<span>Working Hours : Monday - Friday : 8.30 am - 5.30 pm</span>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4">
								<div class="topbar-right">
									<div class="topbar-contacts">
										<span><a href="#"><i class="ri-whatsapp-fill"></i></a></span>
										<span><a href="#"><i class="ri-facebook-circle-fill"></i></a></span>
										<span><a href="#"><i class="ri-instagram-fill"></i></a></span>
										<span><a href="#"><i class="ri-youtube-fill"></i></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Site Logo -->
						<div class="logo"><?php the_custom_logo(); ?></div>

						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
							</span>
						</button>

						<div class="collapse navbar-collapse w-100 justify-content-end" id="navbarSupportedContent">
							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(array(
    						'theme_location'  => 'primary',
							'container'       => 'main-header',
    						'container_class' => 'navbar',
    						'container_id'    => 'navbarSupportedContent',
    						'menu_class'      => 'navbar-nav me-auto',
    						'fallback_cb'     => '',
							'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    						'walker'          => new WP_Bootstrap_Navwalker(),
							));?>

							<div class="user-account">
								<p><a href="#">Login</a>/ <a href="#">Register</a></p>
								<p class="icon"><i class="ri-user-line"></i></p>
							</div>
							
							<div class="minicart">
								<div class="dropdown">
									<a href="" id="dropdown-cart" data-bs-toggle="dropdown">
									<i class="ri-shopping-cart-2-line"></i><sup> <span><?php echo WC()->cart->get_cart_contents_count(); ?></span></sup>
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdown-cart">
										<div class="header-quickcart"><?php woocommerce_mini_cart(); ?></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</nav>
			</div>
		</header>