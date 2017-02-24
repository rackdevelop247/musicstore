<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user']))
{
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

?>

<html>
	<head>
		<title>Boxes</title>
			<link rel="stylesheet" type="text/css" href="style/home.css">
			<link rel="stylesheet" type="text/css" href="style/signstyle.css" media="all" />
	</head>
	
	<body>
		<div id="page">

			<div id="logo">
				<img src="images/logo.gif" alt="The Analog Specialists" />
			</div>

			<ul id="navigation">
				<li><a href="home.php" class="on">Home</a></li>
				<li><a href="form.php">Order</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			
			<div id="content">
			
				<span class="hi">Hi</span>
				<span class="name1"><?php echo $userRow['username']; ?> </span>
				<a href="logout.php?logout">Sign-Out</a>
		</div>
		<hr>

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