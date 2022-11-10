<?php 

/*=============================================
Traer el total de productos
=============================================*/

$url = CurlController::api()."products";
$method = "GET";
$fields = array();
$header = array();

$totalProducts = CurlController::request($url, $method, $fields, $header)->total;

?>   


<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

	<title>MarketPlace | Home</title>

    <base href="views/">

    <link rel="icon" href="img/template/icono.png">   

	<!--=====================================
	CSS
	======================================-->
	
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- font awesome -->
	<link rel="stylesheet" href="css/plugins/fontawesome.min.css">

	<!-- linear icons -->
	<link rel="stylesheet" href="css/plugins/linearIcons.css">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/plugins/owl.carousel.css">

	<!-- Slick -->
	<link rel="stylesheet" href="css/plugins/slick.css">

	<!-- Light Gallery -->
	<link rel="stylesheet" href="css/plugins/lightgallery.min.css">

	<!-- Font Awesome Start -->
	<link rel="stylesheet" href="css/plugins/fontawesome-stars.css">

	<!-- jquery Ui -->
	<link rel="stylesheet" href="css/plugins/jquery-ui.min.css">

	<!-- Select 2 -->
	<link rel="stylesheet" href="css/plugins/select2.min.css">

	<!-- Scroll Up -->
	<link rel="stylesheet" href="css/plugins/scrollUp.css">
    
    <!-- DataTable -->
    <link rel="stylesheet" href="css/plugins/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/plugins/responsive.bootstrap.datatable.min.css">
	
	<!-- estilo principal -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Market Place 4 -->
	<link rel="stylesheet" href="css/market-place-4.css">

	<!--=====================================
	PLUGINS JS
	======================================-->

	<!-- jQuery library -->
	<script src="js/plugins/jquery-1.12.4.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Owl Carousel -->
	<script src="js/plugins/owl.carousel.min.js"></script>

	<!-- Images Loaded -->
	<script src="js/plugins/imagesloaded.pkgd.min.js"></script>

	<!-- Masonry -->
	<script src="js/plugins/masonry.pkgd.min.js"></script>

	<!-- Isotope -->
	<script src="js/plugins/isotope.pkgd.min.js"></script>

	<!-- jQuery Match Height -->
	<script src="js/plugins/jquery.matchHeight-min.js"></script>

	<!-- Slick -->
	<script src="js/plugins/slick.min.js"></script>

	<!-- jQuery Barrating -->
	<script src="js/plugins/jquery.barrating.min.js"></script>

	<!-- Slick Animation -->
	<script src="js/plugins/slick-animation.min.js"></script>

	<!-- Light Gallery -->
	<script src="js/plugins/lightgallery-all.min.js"></script>
    <script src="js/plugins/lg-thumbnail.min.js"></script>
    <script src="js/plugins/lg-fullscreen.min.js"></script>
    <script src="js/plugins/lg-pager.min.js"></script>

	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui.min.js"></script>

	<!-- Sticky Sidebar -->
	<script src="js/plugins/sticky-sidebar.min.js"></script>

	<!-- Slim Scroll -->
	<script src="js/plugins/jquery.slimscroll.min.js"></script>

	<!-- Select 2 -->
	<script src="js/plugins/select2.full.min.js"></script>

	<!-- Scroll Up -->
	<script src="js/plugins/scrollUP.js"></script>

    <!-- DataTable -->
    <script src="js/plugins/jquery.dataTables.min.js"></script>
    <script src="js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="js/plugins/dataTables.responsive.min.js"></script>

    <!-- Chart -->
    <script src="js/plugins/Chart.min.js"></script>
	
</head>

<body>

    <!--=====================================
    Preload
    ======================================-->

    <div id="loader-wrapper">
        <img src="img/template/loader.jpg">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>  

	<!--=====================================
	Header Promotion
	======================================-->

	<?php include "modules/top-banner.php" ?>

     <!--=====================================
    Header
    ======================================-->

    <?php include "modules/header.php" ?> 

    <!--=====================================
    Header Mobile
    ======================================-->

   <?php include "modules/header-mobile.php" ?>

    <!--=====================================
    Home Content
    ======================================-->  

    <div id="homepage-6">

    	<!--=====================================
    	Home Banner
    	======================================-->  

    	<div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">

                <div class="ps-banner--market-4" data-background="img/slider/horizontal/1.jpg">
                	<img src="img/slider/horizontal/1.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Limit Edition</h4>
                        <h3>HAPPY SUMMER <br/> 
                        	COMBO SUPER COOL <br/> 
                        	<p>UP TO <strong> 40%</strong></p>
                        </h3>
                        <a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>

                <div class="ps-banner--market-4" data-background="img/slider/horizontal/2.jpg">
                	<img src="img/slider/horizontal/2.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Version 2018</h4>
                        <h3>EXPERIENCE FEEL <br/> 
                        	GREATEST WITH VITURAL <br/> 
                        	<p>REALITY JUST <strong> $599</strong></p>
                        </h3>
                        <a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>

                <div class="ps-banner--market-4" data-background="img/slider/horizontal/3.jpg">
                	<img src="img/slider/horizontal/3.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Mega Sale Nov 2019</h4>
                        <h3>DOUBLE COMBO WITH <br/> 
                        	THE BODY SHOP <br/> 
                        	<p>Sale up to <strong> 50%</strong></p>
                        </h3>
                        <a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>

                <div class="ps-banner--market-4" data-background="img/slider/horizontal/4.jpg">
                	<img src="img/slider/horizontal/4.jpg" alt="">
                    <div class="ps-banner__content">
                        <h4>Mega Sale Nov 2017</h4>
                        <h3>IKEA MINIMALIST <br/> 
                        	OTOMAN <br/>
                        	<p>Discount <strong> 50% OFF</strong></p>
                        </h3>
                        <a class="ps-btn" href="#">Shop Now</a>
                    </div>
                </div>
             
            </div>

        </div><!-- End Home Banner-->

        <!--=====================================
    	Home Features
    	======================================-->  

        <div class="ps-site-features">

            <div class="container">

                <div class="ps-block--site-features ps-block--site-features-2">

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Free Delivery</h4>
                            <p>For all oders over $99</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>90 Days Return</h4>
                            <p>If goods have problems</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Secure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>24/7 Support</h4>
                            <p>Dedicated support</p>
                        </div>
                    </div>

                </div>

            </div>

        </div><!-- End Home Features-->

        <!--=====================================
    	Home Promotions
    	======================================-->  

        <div class="ps-promotions">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-12 ">
                    	<a class="ps-collection" href="shop-default.html">
                    		<img src="img/banner/default/1.jpg" alt="">
                    	</a>
                    </div>

                    <div class="col-md-6 col-12 ">
                    	<a class="ps-collection" href="shop-default.html">
                    		<img src="img/banner/default/2.jpg" alt="">
                    	</a>
                    </div>

                </div>

            </div>

        </div><!-- End Home Promotions-->

        <!--=====================================
    	Home Deal Hot Today
    	======================================-->  

        <div class="ps-deal-hot">

            <div class="container">

                <div class="row">

                	<!--=====================================
					Column Deal Hot
    				======================================-->  

                    <div class="col-xl-9 col-12 ">

                        <div class="ps-block--deal-hot" data-mh="dealhot">

                            <div class="ps-block__header">

                                <h3>Deal hot today</h3>

                                <div class="ps-block__navigation">
                                	<a class="ps-carousel__prev" href=".ps-carousel--deal-hot">
                                		<i class="icon-chevron-left"></i>
                                	</a>
                                	<a class="ps-carousel__next" href=".ps-carousel--deal-hot">
                                		<i class="icon-chevron-right"></i>
                                	</a>
                                </div>

                            </div>

                            <div class="ps-product__content">

                                <div class="ps-carousel--deal-hot ps-carousel--deal-hot owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

                                    <!--=====================================
    								Product Deal Home
    								======================================-->                                 

                                    <div class="ps-product--detail ps-product--hot-deal">

                                        <div class="ps-product__header">

                                            <div class="ps-product__thumbnail" data-vertical="true">

                                                <figure>

                                                    <div class="ps-wrapper">

                                                        <div class="ps-product__gallery" data-arrow="true">

                                                            <div class="item">
                                                            	<a href="img/products/deal-hot/a-1.jpg">
                                                            		<img src="img/products/deal-hot/a-1.jpg" alt="">
                                                            	</a>
                                                            </div>

                                                            <div class="item">
                                                            	<a href="img/products/deal-hot/a-2.jpg">
                                                            		<img src="img/products/deal-hot/a-2.jpg" alt="">
                                                            	</a>
                                                            </div>

                                                            <div class="item">
                                                            	<a href="img/products/deal-hot/a-3.jpg">
                                                            		<img src="img/products/deal-hot/a-3.jpg" alt="">
                                                            	</a>
                                                            </div>

                                                        </div>

                                                        <div class="ps-product__badge">
                                                        	<span>Save <br> $280.000</span>
                                                        </div>

                                                    </div>

                                                </figure>

                                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">

                                                    <div class="item">
                                                    	<img src="img/products/deal-hot/a-1.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                    	<img src="img/products/deal-hot/a-2.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                    	<img src="img/products/deal-hot/a-3.jpg" alt="">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ps-product__info">

                                                <h5>Clothing & Apparel</h5>

                                                <h3 class="ps-product__name">Herschel Leather Duffle Bag In Brown Color</h3>

                                                <div class="ps-product__meta">

                                                    <h4 class="ps-product__price sale">$36.78 <del> $56.99</del></h4>

                                                    <div class="ps-product__rating">

                                                        <select class="ps-rating" data-read-only="true">

                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>

                                                        </select>

                                                        <span>(1 review)</span>

                                                    </div>

                                                    <div class="ps-product__specification">

                                                        <p>Status:<strong class="in-stock"> In Stock</strong></p>

                                                    </div>

                                                </div>

                                                <div class="ps-product__expires">

                                                    <p>Expires In</p>

                                                    <ul class="ps-countdown" data-time="July 21, 2020 23:00:00">

                                                        <li><span class="days"></span>
                                                            <p>Days</p>
                                                        </li>

                                                        <li><span class="hours"></span>
                                                            <p>Hours</p>
                                                        </li>

                                                        <li><span class="minutes"></span>
                                                            <p>Minutes</p>
                                                        </li>

                                                        <li><span class="seconds"></span>
                                                            <p>Seconds</p>
                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="ps-product__processs-bar">

                                                    <div class="ps-progress" data-value="10">
                                                    	<span class="ps-progress__value"></span>
                                                    </div>

                                                    <p><strong>4/79</strong> Sold</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- End Product Deal Hot -->

                                    <!--=====================================
    								Product Deal Home
    								======================================-->        

                                    <div class="ps-product--detail ps-product--hot-deal">

                                        <div class="ps-product__header">

                                            <div class="ps-product__thumbnail" data-vertical="true">

                                                <figure>

                                                    <div class="ps-wrapper">

                                                        <div class="ps-product__gallery" data-arrow="true">

                                                            <div class="item">
                                                            	<a href="img/products/deal-hot/b-1.jpg">
                                                            		<img src="img/products/deal-hot/b-1.jpg" alt="">
                                                            	</a>
                                                            </div>

                                                            <div class="item">
                                                            	<a href="img/products/deal-hot/b-2.jpg">
                                                            		<img src="img/products/deal-hot/b-2.jpg" alt="">
                                                            	</a>
                                                            </div>

                                                            <div class="item">
                                                            	<a href="img/products/deal-hot/b-3.jpg">
                                                            		<img src="img/products/deal-hot/b-3.jpg" alt="">
                                                            	</a>
                                                            </div>

                                                            <div class="item">
                                                            	<a href="img/products/deal-hot/b-4.jpg">
                                                            		<img src="img/products/deal-hot/b-4.jpg" alt="">
                                                            	</a>
                                                            </div>

                                                        </div>

                                                        <div class="ps-product__badge">
                                                        	<span>Save <br> $9.000</span>
                                                        </div>

                                                    </div>

                                                </figure>

                                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3" data-arrow="false">

                                                    <div class="item">
                                                    	<img src="img/products/deal-hot/b-1.jpg" alt="">
                                                    </div>

                                                    <div class="item">
                                                    	<img src="img/products/deal-hot/b-2.jpg" alt="">
                                                    </div>

                                                    <div class="item">
                                                    	<img src="img/products/deal-hot/b-3.jpg" alt="">
                                                    </div>

                                                    <div class="item">
                                                    	<img src="img/products/deal-hot/b-4.jpg" alt="">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ps-product__info">

                                                <h5>Consumer Electrics</h5>

                                                <h3 class="ps-product__name">Evolution Sport Drilled and Slotted Brake Kit</h3>
                                                
                                                <div class="ps-product__meta">

                                                    <h4 class="ps-product__price sale">$97.78 <del> $156.99</del></h4>

                                                    <div class="ps-product__rating">

                                                        <select class="ps-rating" data-read-only="true">

                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>

                                                        </select>
                                                        <span>(1 review)</span>

                                                    </div>

                                                    <div class="ps-product__specification">

                                                        <p>Status:<strong class="in-stock"> In Stock</strong></p>

                                                    </div>

                                                </div>

                                                <div class="ps-product__expires">

                                                    <p>Expires In</p>

                                                    <ul class="ps-countdown" data-time="July 21, 2020 23:00:00">

                                                        <li><span class="days"></span>
                                                            <p>Days</p>
                                                        </li>

                                                        <li><span class="hours"></span>
                                                            <p>Hours</p>
                                                        </li>

                                                        <li><span class="minutes"></span>
                                                            <p>Minutes</p>
                                                        </li>

                                                        <li><span class="seconds"></span>
                                                            <p>Seconds</p>
                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="ps-product__processs-bar">

                                                    <div class="ps-progress" data-value="60">
                                                    	<span class="ps-progress__value"></span>
                                                    </div>

                                                    <p><strong>30/50</strong> Sold</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- End Product Deal Hot -->

                                </div><!-- End carousel Deal Hot -->

                            </div><!-- End product content Deal Hot -->

                        </div><!-- End deal hot -->

                    </div><!-- End Columns --> 

                    <!--=====================================
					Column Top 20 Best Seller
    				======================================-->  

                    <div class="col-xl-3 col-12 ">

                        <aside class="widget widget_best-sale" data-mh="dealhot">

                            <h3 class="widget-title">Top 20 Best Seller</h3>

                            <div class="widget__content">

                                <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

                                    <div class="ps-product-group">

                                    	<!--=====================================
										Product
    									======================================-->  

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">
                                            	<a href="product-default.html">
                                            		<img src="img/products/technology/1.jpg" alt="">
                                            	</a>
                                            </div>

                                            <div class="ps-product__content">

                                            	<a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>

                                                    <span>01</span>

                                                </div>

                                                <p class="ps-product__price">105.30</p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
										Product
    									======================================-->  

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">

                                            	<a href="product-default.html">
                                            		<img src="img/products/technology/2.jpg" alt="">
                                            	</a>

                                            </div>

                                            <div class="ps-product__content">

                                            	<a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>
                                                    <span>01</span>

                                                </div>

                                                <p class="ps-product__price">$125.00 <del>$135.00 </del></p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
										Product
    									======================================-->  

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">

                                            	<a href="product-default.html">
                                            		<img src="img/products/technology/3.jpg" alt="">
                                            	</a>

                                            </div>

                                            <div class="ps-product__content">

                                            	<a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>
                                                    <span>02</span>

                                                </div>

                                                <p class="ps-product__price sale">$990.00 <del>$1250.00 </del></p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
										Product
    									======================================-->  

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">
                                            	<a href="product-default.html">
                                            		<img src="img/products/technology/4.jpg" alt="">
                                            	</a>
                                            </div>

                                            <div class="ps-product__content">
                                            	<a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12”</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>

                                                    <span>04</span>

                                                </div>

                                                <p class="ps-product__price">$1090.00 <del>$1550.00 </del></p>

                                            </div>

                                        </div><!-- End Product -->

                                    </div><!-- End Product Group -->

                                    <div class="ps-product-group">

                                    	<!--=====================================
										Product
    									======================================-->  

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">
                                            	<a href="product-default.html"><img src="img/products/technology/3.jpg" alt=""></a>
                                            </div>

                                            <div class="ps-product__content">

                                            	<a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>

                                                    <span>02</span>

                                                </div>

                                                <p class="ps-product__price sale">$990.00 <del>$1250.00 </del></p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
										Product
    									======================================-->  

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">

                                            	<a href="product-default.html">
                                            		<img src="img/products/technology/4.jpg" alt="">
                                            	</a>

                                            </div>

                                            <div class="ps-product__content">

                                            	<a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12”</a>

                                                <div class="ps-product__rating">

                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>

                                                    <span>04</span>
                                                </div>

                                                <p class="ps-product__price">$1090.00 <del>$1550.00 </del></p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
										Product
    									======================================-->  

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">

                                            	<a href="product-default.html">
                                            		<img src="img/products/technology/5.jpg" alt="">
                                            	</a>

                                            </div>

                                            <div class="ps-product__content">
                                            	<a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>

                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>
                                                    <span>01</span>
                                                </div>

                                                <p class="ps-product__price">$85.00</p>

                                            </div>

                                        </div><!-- End Product -->

                                        <!--=====================================
										Product
    									======================================-->  

                                        <div class="ps-product--horizontal">

                                            <div class="ps-product__thumbnail">
                                            	<a href="product-default.html">
                                            		<img src="img/products/technology/6.jpg" alt="">
                                            	</a>
                                            </div>

                                            <div class="ps-product__content">
                                            	<a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>

                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>

                                                <p class="ps-product__price">$950.60</p>

                                            </div>

                                        </div><!-- End Product -->

                                    </div><!-- End Product Group -->

                                </div>

                            </div>

                        </aside><!-- End Aside --> 

                    </div><!-- End Columns --> 

                </div>

            </div>

        </div><!-- End Home Deal Hot -->

        <!--=====================================
		Top Categoríes
		======================================-->  

        <div class="ps-top-categories">

            <div class="container">

                <h3>Top categories of the month</h3>

                <div class="row">

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/1.jpg" alt="">
                            <p>Electronics</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/2.jpg" alt="">
                            <p>Clothings</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/3.jpg" alt="">
                            <p>Computers</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/4.jpg" alt="">
                            <p>Home &amp; Kitchen</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/5.jpg" alt="">
                            <p>Health &amp; Beauty</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-sm-4 col-6 ">
                        <div class="ps-block--category">
                        	<a class="ps-block__overlay" href="shop-default.html"></a>
                        	<img src="img/categories/6.jpg" alt="">
                            <p>Health &amp; Beauty</p>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End Top Categories -->

	</div><!-- End Homepage 6-->

 	<!--=====================================
	Section Gray
	======================================-->  

	<div class="ps-section--gray">

        <div class="container">

        	<!--=====================================
			Products of category
			======================================-->  

            <div class="ps-block--products-of-category">

            	<!--=====================================
				Menu subcategory
				======================================-->  

                <div class="ps-block__categories">

                    <h3>Clothing & <br> Apparel</h3>

                        <ul>
                            <li><a href="#">Best Seller</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Girls</a></li>
                            <li><a href="#">Boys</a></li>
                            <li><a href="#">Baby</a></li>
                            <li><a href="#">Sales & Deals</a></li>
                        </ul>

                        <a class="ps-block__more-link" href="#">View All</a>

                </div>

                <!--=====================================
				Vertical Slider Category
				======================================-->  

                <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">

                    	<a href="#">

                    		<img src="img/slider/vertical/clothing-1.jpg" alt="">

                    	</a>

                    	<a href="#">

                    		<img src="img/slider/vertical/clothing-2.jpg" alt="">

                    	</a>

                    	<a href="#">

                    		<img src="img/slider/vertical/clothing-3.jpg" alt="">

                    	</a>

                    </div>

                </div>

                <!--=====================================
				Block Product Box
				======================================-->  

                <div class="ps-block__product-box">
					
					<!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/1.jpg" alt="">

                        	</a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">

                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>

                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>

                            </div>

                        </div>

                    </div> <!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/2.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                
                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$101.99</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/3.jpg" alt=""></a>

                            <div class="ps-product__badge">-25%</div>
   
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>02</span>
                                </div>

                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/4.jpg" alt="">

                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$320.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/5.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>   

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$85.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/clothing/6.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="clothing">

                            	<a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>
                                </div>

                                <p class="ps-product__price">$92.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                </div><!-- End Block Product Box -->
              
            </div><!-- End Products of category -->

            <!--=====================================
			Products of category
			======================================-->  

            <div class="ps-block--products-of-category">

            	<!--=====================================
				Menu subcategory
				======================================--> 

                <div class="ps-block__categories">

                    <h3>Computer & Techologies</h3>

                    <ul>
                        <li><a href="#">Best Seller</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Desktop PC</a></li>
                        <li><a href="#">Laptop</a></li>
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="#">Storage & Memory</a></li>
                        <li><a href="#">PC Component</a></li>
                        <li><a href="#">Computer Accessories</a></li>
                        <li><a href="#">Game Accessories</a></li>
                        <li><a href="#">Sales & Deals</a></li>

                    </ul>

                    <a class="ps-block__more-link" href="#">View All</a>

                </div>

                <!--=====================================
				Vertical Slider Category
				======================================-->  

                <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">

                    	<a href="#">
                    		<img src="img/slider/vertical/technology-1.jpg" alt="">
                    	</a>

                    	<a href="#">
                    		<img src="img/slider/vertical/technology-2.jpg" alt="">
                    	</a>

                    	<a href="#">
                    		<img src="img/slider/vertical/technology-3.jpg" alt="">
                    	</a>

                    </div>

                </div>

                <!--=====================================
				Block Product Box
				======================================-->  

                <div class="ps-block__product-box">

                	<!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/technology/1.jpg" alt="">

                        	</a> 

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">

                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>

                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">105.30</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/technology/2.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">7%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$125.00 <del>$135.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/technology/3.jpg" alt="">

                        	</a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                               
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>

                                <p class="ps-product__price sale">$990.00 <del>$1250.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html"><img src="img/products/technology/4.jpg" alt=""></a>

                            <div class="ps-product__badge">10%</div>
                           
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12”</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>04</span>
                                </div>

                                <p class="ps-product__price">$1090.00 <del>$1550.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/technology/5.jpg" alt="">
                        	</a>
               
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$85.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/technology/6.jpg" alt="">
                        	</a>
  
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$950.60</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

             <!--=====================================
			Products of category
			======================================-->  

            <div class="ps-block--products-of-category">

            	<!--=====================================
				Menu subcategory
				======================================--> 

                <div class="ps-block__categories">

                    <h3>Consumer Electronics</h3>

                    <ul>
                        <li><a href="shop-default.html">Best Seller</a></li>
                        <li><a href="shop-default.html">New Arrivals</a></li>
                        <li><a href="shop-default.html">TV Television</a></li>
                        <li><a href="shop-default.html">Air Condition</a></li>
                        <li><a href="shop-default.html">Washing Machine</a></li>
                        <li><a href="shop-default.html">Microwave</a></li>
                        <li><a href="shop-default.html">Refrigerator</a></li>
                        <li><a href="shop-default.html">Office Electronic</a></li>
                        <li><a href="shop-default.html">Car Electronic</a></li>
                        <li><a href="shop-default.html">Sales & Deals</a></li>
                    </ul>

                    <a class="ps-block__more-link" href="#">View All</a>

                </div>

                <!--=====================================
				Vertical Slider Category
				======================================-->  

                <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">

                    	<a href="#">
                    		<img src="img/slider/vertical/electronic-1.jpg" alt="">
                    	</a>

                    	<a href="#">
                    		<img src="img/slider/vertical/electronic-2.jpg" alt="">
                    	</a>

                    	<a href="#">
                    		<img src="img/slider/vertical/electronic-3.jpg" alt="">
                    	</a>

                    </div>

                </div>

                <!--=====================================
				Block Product Box
				======================================-->  

                <div class="ps-block__product-box">

                	<!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/electronic/1.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge">-16%</div>
                          
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/electronic/2.jpg" alt="">

                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>
 
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$101.99</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/electronic/3.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge">-25%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                
                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>

                                </div>

                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html"><img src="img/products/electronic/4.jpg" alt=""></a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                           
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$320.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/electronic/5.jpg" alt="">

                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>

                        </div>
                        <div class="ps-product__container">
                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$85.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">

                        		<img src="img/products/electronic/6.jpg" alt="">

                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="technology">

                            	<a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$92.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

            <!--=====================================
			Products of category
			======================================-->  

            <div class="ps-block--products-of-category">

            	<!--=====================================
				Menu subcategory
				======================================--> 

                <div class="ps-block__categories">

                    <h3>Home, Garden & Kitchen</h3>

                    <ul>
                        <li><a href="shop-default.html">Best Seller</a></li>
                        <li><a href="shop-default.html">New Arrivals</a></li>
                        <li><a href="shop-default.html">Furniture</a></li>
                        <li><a href="shop-default.html">Home Decor</a></li>
                        <li><a href="shop-default.html">Cookware</a></li>
                        <li><a href="shop-default.html">Utensils & Gadget</a></li>
                        <li><a href="shop-default.html">Garden Tools</a></li>
                        <li><a href="shop-default.html">Acessesories</a></li>
                        <li><a href="shop-default.html">Sales & Deals</a></li>
                    </ul>

                    <a class="ps-block__more-link" href="#">View All</a>

                </div>

                <!--=====================================
				Vertical Slider Category
				======================================-->  

                <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">

                    	<a href="#">
                    		<img src="img/slider/vertical/kitchen-1.jpg" alt="">
                    	</a>

                    	<a href="#">
                    		<img src="img/slider/vertical/kitchen-2.jpg" alt="">
                    	</a>

                    	<a href="#">
                    		<img src="img/slider/vertical/kitchen-3.jpg" alt="">
                    	</a>

                    </div>

                </div>

                <!--=====================================
				Block Product Box
				======================================-->  

                <div class="ps-block__product-box">

                	<!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/home/1.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge">-16%</div>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/home/2.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                         
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                
                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price">$101.99</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/home/3.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge">-25%</div>
                        
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                
                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>
                                </div>

                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/home/4.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>
    
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>

                                <div class="ps-product__rating">

                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$320.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/home/5.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>
  
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                               
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$85.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">                        		
                        		<img src="img/products/home/6.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                         
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>

                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$92.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->
         
                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

            <!--=====================================
			Products of category
			======================================-->  

            <div class="ps-block--products-of-category">

            	<!--=====================================
				Menu subcategory
				======================================--> 

                <div class="ps-block__categories">

                    <h3>Healthy & Beauty</h3>
                    
                    <ul>
                        <li><a href="shop-default.html">Best Seller</a></li>
                        <li><a href="shop-default.html">New Arrivals</a></li>
                        <li><a href="shop-default.html">Makeup</a></li>
                        <li><a href="shop-default.html">Skin Care</a></li>
                        <li><a href="shop-default.html">Hair Care</a></li>
                        <li><a href="shop-default.html">Tools & Equipments</a></li>
                        <li><a href="shop-default.html">Perfumer & Cologine</a></li>
                        <li><a href="shop-default.html">Sales & Deals</a></li>
                    </ul>

                    <a class="ps-block__more-link" href="#">View All</a>

                </div>

                <!--=====================================
				Vertical Slider Category
				======================================-->  

                <div class="ps-block__slider">

                    <div class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">

                    	<a href="#">
                    		<img src="img/slider/vertical/healthy-1.jpg" alt="">
                    	</a>

                    	<a href="#">
                    		<img src="img/slider/vertical/healthy-2.jpg" alt="">
                    	</a>

                    	<a href="#">
                    		<img src="img/slider/vertical/healthy-3.jpg" alt="">
                    	</a>

                    </div>

                </div>

                <!--=====================================
				Block Product Box
				======================================-->  

                <div class="ps-block__product-box">

                	<!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/healthy/1.jpg" alt="">
                        	</a>

                            <div class="ps-product__badge">-16%</div>
 
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Aveeno Moisturizing Body Shower 450ml</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price sale">$47.99 <del>$59.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html"><img src="img/products/healthy/2.jpg" alt=""></a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">NYX Beauty Couton Pallete Makeup 12</a>
                               
                               <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>

                                <p class="ps-product__price">$101.99</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html"><img src="img/products/healthy/3.jpg" alt=""></a>

                            <div class="ps-product__badge">-25%</div>
                          
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Baxter Care Hair Kit For Bearded Mens</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>02</span>

                                </div>

                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/healthy/4.jpg" alt="">
                        	</a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Anna Sui Putty Mask Perfection</a>
                               
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price">25.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/healthy/5.jpg" alt="">
                        	</a>

                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Set 30 Piece Korea StartSkin Natural Mask</a>
                               
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>

                                </div>

                                <p class="ps-product__price">$85.00</p>

                            </div>

                        </div>

                    </div><!-- End Product Simple -->

                    <!--=====================================
					Product Simple
					======================================--> 

                    <div class="ps-product ps-product--simple">

                        <div class="ps-product__thumbnail">

                        	<a href="product-default.html">
                        		<img src="img/products/healthy/6.jpg" alt="">
                        	</a>
 
                        </div>

                        <div class="ps-product__container">

                            <div class="ps-product__content" data-mh="garden">

                            	<a class="ps-product__title" href="product-default.html">Ciate Palemore Lipstick Bold Red Color</a>
                                
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>

                                    <span>01</span>
                                </div>

                                <p class="ps-product__price">$92.00</p>

                            </div>

                        </div>

                     </div><!-- End Product Simple -->
         
                </div><!-- End Block Product Box -->

            </div><!-- End Products of category -->

        </div><!-- End Container-->

    </div><!-- End Section Gray-->

    <!--=====================================
	Newletter
	======================================-->  

    <?php include "modules/newletter.php" ?>

    <!--=====================================
	Footer
	======================================-->  
    
    <?php include "modules/footer.php" ?>

	<!--=====================================
	JS PERSONALIZADO
	======================================-->

	<script src="js/main.js"></script>
	
</body>
</html>