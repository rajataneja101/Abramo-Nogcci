<?php
$r=$_GET["rajat"];
$p=$_GET['pro_name'];
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Abramo Nogcci</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Best in class shoes" />



	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<style type="text/css">
					   .mobileShow { display: none;}
					   /* Smartphone Portrait and Landscape */
					   @media only screen
					   and (min-device-width : 320px)
					   and (max-device-width : 480px){ .mobileShow { display: inline;}}
					</style>

					<div class="col-md-3 col-xs-2">
						<div class="mobileShow">
						<div id="fh5co-logo"><a href="index.html">Abramo</a></div>
						<div id="fh5co-logo"><a href="index.html">Nogcci</a></div>
					</div>
				</div>

					<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<div id="content-desktop">
					<li><div id="fh5co-logo"><a href="index.html"><h3><strong>Abramo Nogcci</strong></h3></a></div></li>
	</div>
					</ul>
					<hr>
						<ul>
							<li> <!--class="has-dropdown"-->
								<a href="product.php">Collection</a>
								<!--<ul class="dropdown">
									<li><a href="single.html">Single Shop</a></li>
								</ul>-->
							</li>
							<li><a href="about.html">About us</a></li>

							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>

				</div>

			</div>
		</nav>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/thumb/<?php echo $r ?>/1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Product Details</h1>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="owl-carousel owl-carousel-fullwidth product-carousel slides">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/thumb/<?php echo $r ?>/1.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/thumb/<?php echo $r ?>/2.jpg" alt="user">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/thumb/<?php echo $r ?>/3.jpg" alt="user">
								</figure>
							</div>
						</div>


					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" >
							<h2><?php echo $p?></h2>
							<!--<p>
								<a href="#" class="btn btn-primary btn-outline btn-lg">Add to Cart</a>
								<a href="#" class="btn btn-primary btn-outline btn-lg">Compare</a>
							</p>-->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Details</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Specification</span></a></li>
							<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">Feedback &amp; Ratings</span></a></li>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<h2><?php echo $p?></h2>
									<p>Fitting f average and G wide</p>
									<p>Fully leather lined with full leather sole.</p>
									<p>Cutting edge shoe construction</p>
									<p>Comfort leather padded insole /shoe pad.</p>



									<div class="row">
										<div class="col-md-6">
											<h2 class="uppercase">Keep it simple</h2>

										</div>
										<div class="col-md-6">
											<h2 class="uppercase">Less is more</h2>

										</div>
									</div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h3>For more info visit our <a href="size.html">Size & Fit page</a></h3>
								</div>
							</div>


						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

		<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Newsletter</h2>
					<p>Just stay tune for our latest Product. Now you can subscribe</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline" action="newsletter.php" method="post">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email" >
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block" name="Submit">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Abramo Nogcci</h3>
					<p>Best in its type!</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="product.php">Shop</a></li>
						<li><a href="policy.html">Policy</a></li>

					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">

					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
