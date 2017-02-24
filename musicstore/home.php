<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location:home.php");
}
else
{
?>

<html>
	<head>
		<title>Boxes</title>
			<link rel="stylesheet" type="text/css" href="style/home.css">
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
			

	<p>
		<img src="images/keys.jpg" alt="Fender Rhodes, Hohner Clavinet, and Wurlitzer EP200" />
	</p>
			<p>
				We specialize in the sale and repair of classic keyboards, in particular the Fender Rhodes, Wurlitzer EP200, and Hohner Clavinet.
			</p>
		</div>
	</body>
</html>
<?php
}
?>