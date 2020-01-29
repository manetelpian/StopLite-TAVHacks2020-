<?php 

include "conn.php";
session_start();

?>

<!DOCTYPE html>
<!--
	App by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

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

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>


<div id="page-wrap">


	<!-- ==========================================================================================================
													   HERO
		 ========================================================================================================== -->

	<div id="fh5co-hero-wrapper">
		<nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
			<a class="navbar-brand" href="">StopLite</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-items-center ml-auto mr-auto">
					<!--<li class="nav-item active">
						<p> <?php echo "Welcome " . $_SESSION['F_name']?> </p>
					</li>-->
					<li class="nav-item active">
						<a class="nav-link" href="#">Scan <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="$('#fh5co-features').goTo();return false;">FAQs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="$('#fh5co-reviews').goTo();return false;"> Legal Notices</a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link" href="#"  onclick="$('#fh5co-download').goTo();return false;"> Education</a>
					</li>-->
				</ul>
				<!--<div class="social-icons-header">
					<a href="https://www.facebook.com/fh5co"><i class="fab fa-facebook-f"></i></a>
					<a href="https://freehtml5.co"><i class="fab fa-instagram"></i></a>
					<a href="https://www.twitter.com/fh5co"><i class="fab fa-twitter"></i></a>
				</div>-->
			</div>
		</nav>