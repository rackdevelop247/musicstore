<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location:home.php");
}
?>

<html>
	<head>
		<title>Boxes</title>
				<link rel="stylesheet" type="text/css" href="style/main.css">
				<link rel="stylesheet" type="text/css" href="style/about.css">
	</head>
		
		<body>
			<div id="page">
				<div id="logo">
					<img src="images/logo.gif" alt="The Analog Specialists" />
				</div>


<ul id="navigation">
	<li><a href="home.php" class="on">Home</a></li>
	<li><a href="login.php">Login</a></li>
	<li><a href="products.php">Products</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>
			

	<p class="center">
		<img src="images/keys.jpg" alt="Fender Rhodes, Hohner Clavinet, and Wurlitzer EP200" />
	</p>

		<div id="box">
			<h1>About-Us</h1>
			<p class="one">
			We are one of the Leading musicial Instrument store in India.We offer the Guaranteed lowest prices even up to 45 days after the sale..Please visit the shop personally for more information
			we are india's First and largest direct online retailer for musical instruments and pro audio equipment.We takes pride in being musicians.We runs the company on one major premise:to give 
			musicians the best prices and selections,along with superior service to help musicians across india.
			</p>
		
			
			<p class="one">
			Strated in 2010,We have grown to become the most recognized and respected <b>BRAND</b> in the Indian entertainment and music industry.The comapny has grown rapidly to become India's largest
			direct marketer of music gear.
			</p>
			
			<p class="one">
			Our Vision to be the number <b>ONE</b> ecommerce website in india for musical instruments and pro audio equipment and be in the top 50 ecommerce sites in india by 2014.
			</p>
		</div>
	
			<p class="center">
			We specialize in the sale and repair of classic keyboards, in particular the Fender Rhodes, Wurlitzer EP200, and Hohner Clavinet.
			</p>
		</div>
	</body>
</html>