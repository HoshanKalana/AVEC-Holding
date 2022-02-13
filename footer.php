<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base_theme
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<footer class="footer">
	<div class="container">
		<div class="row row-one">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="contect-wrapper">
					<div class="icon">
						<i class="ri-phone-line"></i>
					</div>
					<h6>Contact number</h6>
					<p>070 666 0220</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="contect-wrapper">
					<div class="icon">
						<i class="ri-map-pin-line"></i>
					</div>
					<h6>Address</h6>
					<p>23046 Avenida De La Carlota Suite 600 Laguna Hills, CA 92653</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="contect-wrapper">
					<div class="icon">
						<i class="ri-mail-send-line"></i>
					</div>
					<h6>Email address</h6>
					<p>info@avecholding.com</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row footer-description">
			<p>AVEC is one of the fastest-growing home and kitchen appliance company in Sri Lanka. Whether it’s mixing,
				blending, cooking chopping, grinding, there is a whole range of kitchen appliances designed by AVEC to
				make our life easier.</p>
		</div>
		<!-- <div class="row row-two">
		<p>AVEC is one of the fastest-growing home and kitchen appliance company in Sri Lanka. Whether it’s mixing,
				blending, cooking chopping, grinding, there is a whole range of kitchen appliances designed by AVEC to
				make our life easier.</p>
			<div class="col-12 col-md-6 col-lg-2">
				<div class="product-link">
					<a href="#">Blender</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-2">
				<div class="product-link">
					<a href="#">Rice Cooker</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-2">
				<div class="product-link">
					<a href="#">Cooking Blender</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-2">
				<div class="product-link">
					<a href="#">Pressure Cooker</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-2">
				<div class="product-link">
					<a href="#">Sound Setup</a>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-2">
				<div class="product-link">
					<a href="#">Pressure Washer</a>
				</div>
			</div>
		</div> -->
	</div>
	<div class="separator"></div>
	<div class="container bottom-bar">
		<div class="row">
			<p>Copyright © <?php echo date("Y"); ?> - AVEC Holding - All Right Reserved.Concept, Design & Development
				By TechlineLabs.</p>
		</div>
	</div>
</footer>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</html>