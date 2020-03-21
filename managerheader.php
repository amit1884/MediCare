<?php 
// include_once 
session_start();

if(!$_SESSION['user']){
	header("Location:managerlogin.php");
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
        background-image:url(images/manager.jpg);
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
				<a href="managerhome.php" class="site-logo">
					<img src="./images/newlogo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					
					<!-- Menu -->
					<br><ul class="main-menu primary-menu">
						<li><a href="managerhome.php">Home</a></li>
						<li><a href="#">View</a>
							<ul class="sub-menu">
								<li><a href="viewequipments.php">Equipements</a></li>
								<li><a href="viewtechnicians.php">Technicians</a></li>
								<li><a href="viewtests.php">Tests</a></li>
								<li><a href="viewcustomers.php">Customers</a></li>
								<li><a href="totaltests.php">Total Tests</a></li>
							</ul>
						</li>
						<li><a href="#">Add</a>
							<ul class="sub-menu">
								<li><a href="addtests.php">Add Tests</a></li>
								<li><a href="addequipments.php">Add Equipments</a></li>
							</ul>
						</li>
						<li><a href="includes/logout.inc.php">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->

