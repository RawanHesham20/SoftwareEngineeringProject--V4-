


<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/style.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/superfish.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/magnific-popup.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/icomoon.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/mvc/public/css/animate.css">
  <script src="http://localhost/mvc/public/js/modernizr-2.6.2.min.js"></script>

  <title>Ekdolosi Events</title>
</head>





<?php
class gallery extends View
{
public function output()
{
	$title = $this->model->title;
	$subtitle = $this->model->subtitle;


	require APPROOT . '/views/inc/header.php';
	$text = <<<EOT
	<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Nuptial &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
		<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
		<meta name="author" content="FREEHTML5.CO" />

	  <!--
		//////////////////////////////////////////////////////

		FREE HTML5 TEMPLATE
		DESIGNED & DEVELOPED by FREEHTML5.CO

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

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">

		<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Superfish -->
		<link rel="stylesheet" href="css/superfish.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<link rel="stylesheet" href="css/style.css">


		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->

		</head>
		<body>
			<div id="fh5co-wrapper">
			<div id="fh5co-page">

			<div class="fh5co-hero" data-section="home">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
					<div class="display-t">
						<div class="display-tc">
							<div class="container">
								<div class="col-md-10 col-md-offset-1">
									<div class="animate-box">
										<h1>Nuptial</h1>
										<h2>Our Gallery</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">Nuptial</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="index.html" >Home</a></li>
								<li>
									<a href="groom-bride.html" class="fh5co-sub-ddown">Groom &amp; Bride</a>
									<ul class="fh5co-sub-menu">
										<li><a href="#">Dropdown Menu 1</a></li>
										<li><a href="#">Dropdown Menu 2</a></li>
										<li><a href="#">Dropdown Menu 3</a></li>
										<li><a href="#">Dropdown Menu 4</a></li>
									</ul>
								</li>
								<li><a href="when-where.html">When &amp; Where</a></li>
								<li><a href="guest.html">Guest</a></li>
								<li class="active"><a href="gallery.html">Gallery</a></li>
								<li><a href="blog.html">Blog</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->

			<div id="fh5co-gallery">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h2>Wedding Gallery</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup image-popup" href="images/gallery-1.jpg"><img src="images/gallery-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/gallery-7.jpg"><img src="images/gallery-7.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/gallery-6.jpg"><img src="images/gallery-6.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/gallery-2.jpg"><img src="images/gallery-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/gallery-5.jpg"><img src="images/gallery-5.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/gallery-3.jpg"><img src="images/gallery-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/gallery-4.jpg"><img src="images/gallery-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-started" style="background-image:url(images/cover_bg_2.jpg);"data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center heading-section">
							<h2>Are You Attending?</h2>
							<p>Please Fill-up the form to notify you that you're attending. Thanks.
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-inline">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="name" class="sr-only">Name</label>
										<input type="name" class="form-control" id="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="email" class="sr-only">Email</label>
										<input type="email" class="form-control" id="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<button type="submit" class="btn btn-primary btn-block">I am Attending</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2>Jack &amp; Rose</h2>
							</div>
							<div class="col-md-6 col-md-offset-3 text-center">
								<p class="fh5co-social-icons">
									<a href="#"><i class="icon-twitter2"></i></a>
									<a href="#"><i class="icon-facebook2"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
									<a href="#"><i class="icon-dribbble2"></i></a>
									<a href="#"><i class="icon-youtube"></i></a>
								</p>
								<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>



		</div>
		<!-- END fh5co-page -->

		</div>
		<!-- END fh5co-wrapper -->

		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		<!-- jQuery -->
		</body>
	</html>


EOT;
	echo $text;
	require APPROOT . '/views/inc/footer.php';
}
}
