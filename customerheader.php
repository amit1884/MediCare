<?php 
// include_once 
session_start();

if(!$_SESSION['user']){
	header("Location:customerlogin.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Medicare|Healthcare Logistics</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/pstyle.css"/>
	<style>
    body{
        background-image:url(images/banner5.jpg);
        /* background-position:center; */
        background-size:cover;
        background-repeat:no-repeat;
    }
    </style>
</head>
<body>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="customerhome.php" class="site-logo">
					<img src="./images/newlogo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					
					<!-- Menu -->
					<br><ul class="main-menu primary-menu">
						<li><a href="customerhome.php">Home</a></li>
						<li><a href ="booktechnicians.php">Book Technician</a></li>
                        <li><a href="viewbill.php">View Bill</a></li>
						<li><a href="includes/logout.inc.php">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->

