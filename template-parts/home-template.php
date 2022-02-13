<?php 
/** 
* Template Name: Home Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content home-page">

    <section class="hero-section">
        <div class="owl-carousel owl-theme hero-slider">
            <div class="item">
                <img class="img-fluid"
                    src="http://dev.avec.com/wp-content/uploads/2022/02/Grinders-Blenders-2100_500.jpg" alt="">
            </div>
            <div class="item">
                <img class="img-fluid"
                    src="http://dev.avec.com/wp-content/uploads/2022/02/Grinders-Blenders-2100_500.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="services-bar">
        <div class="container">
            <div class="row service-row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="service">
                        <div class="icon">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/shipped-white.png" alt="">
                        </div>
                        <div class="text">
                            <p>Islandwide Delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="service">
                        <div class="icon">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/warranty-white.png" alt="">
                        </div>
                        <div class="text">
                            <p>Trusted Warranty</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="service">
                        <div class="icon">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/customer-service-white.png"
                                alt="">
                        </div>
                        <div class="text">
                            <p>After Sales Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <h2 class="title">Our product </h2>
            <div class="row product-row-one">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-wrap">
                        <h4 class="product-name">Blender</h4>
                        <div class="product-img">
                            <img src="http://dev.avec.com/wp-content/uploads/2022/02/blender.png" alt="">
                        </div>
                        <p class="price">Rs.25 000</p>
                        <div class="button-wrapper">
                            <div class="btn viewproduct-btn hvr-grow">
                                <a href="#">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-wrap">
                        <h4 class="product-name">Presure Cooker</h4>
                        <div class="product-img">
                            <img src="http://dev.avec.com/wp-content/uploads/2022/02/rice-cooker.png" alt="">
                        </div>
                        <p class="price">Rs.25 000</p>
                        <div class="button-wrapper">
                            <div class="btn viewproduct-btn hvr-grow">
                                <a href="#">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-wrap">
                        <h4 class="product-name">Cooking Blender</h4>
                        <div class="product-img">
                            <img src="http://dev.avec.com/wp-content/uploads/2022/02/cooking-blender.png" alt="">
                        </div>
                        <p class="price">Rs.25 000</p>
                        <div class="button-wrapper">
                            <div class="btn viewproduct-btn hvr-grow">
                                <a href="#">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-wrap">
                        <h4 class="product-name">Pressure Cooker</h4>
                        <div class="product-img">
                            <img src="http://dev.avec.com/wp-content/uploads/2022/02/chopper.png" alt="">
                        </div>
                        <p class="price">Rs.25 000</p>
                        <div class="button-wrapper">
                            <div class="btn viewproduct-btn hvr-grow">
                                <a href="#">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product-row-two">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="product-wrap">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <h4 class="product-name">Sound Setup</h4>
                                <p class="price">Rs.25 000</p>
                                <div class="button-wrapper">
                                    <div class="btn viewproduct-btn hvr-grow">
                                        <a href="#">View Product</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="product-img">
                                    <img class="img-fluid"
                                        src="http://dev.avec.com/wp-content/uploads/2022/02/sound-setup.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="product-wrap">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <h4 class="product-name">Rice Cooker</h4>
                                <p class="price">Rs.25 000</p>
                                <div class="button-wrapper">
                                    <div class="btn viewproduct-btn hvr-grow">
                                        <a href="#">View Product</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="product-img">
                                    <img class="img-fluid"
                                        src="http://dev.avec.com/wp-content/uploads/2022/02/rice-cooker-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="product-wrap">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <h4 class="product-name">Pressure Washer</h4>
                                <p class="price">Rs.25 000</p>
                                <div class="button-wrapper">
                                    <div class="btn viewproduct-btn hvr-grow">
                                        <a href="#">View Product</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="product-img">
                                    <img class="img-fluid"
                                        src="http://dev.avec.com/wp-content/uploads/2022/02/pressure-washer.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="left-wrap">
                            <h2 class="title">About Us</h2>
                            <p class="description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="right-wrap">
                            <div class="owl-carousel owl-theme video-slider">
                                <div class="item">
                                    <div class="iframe-container">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IyG8QsiuPDc"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iframe-container">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/2ZLPZFLaYAs"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="iframe-container">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/d49DgOsnkxw"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banners">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="banner-img">
                        <img class="img-fluid" src="http://dev.avec.com/wp-content/uploads/2022/02/Grinders-Blenders-610x330-1.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                <div class="banner-img">
                        <img class="img-fluid" src="http://dev.avec.com/wp-content/uploads/2022/02/Omni-Cart-Banner-610x330-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
get_footer();