<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location:home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	
	if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>

<html>
	<head>
		<title>Boxes</title>
				<link rel="stylesheet" type="text/css" href="style/main.css">
				<link rel="stylesheet" type="text/css" href="style/login.css">
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
	<div id="login-form">
		<form method="post">
			<table width="30%" border="0">
				<tr>
					<td><input type="text" name="uname" placeholder="User Name" required /></td>
				</tr>
				<tr>
					<td><input type="email" name="email" placeholder="Your Email" required /></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Your Password" required /></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
				</tr>
				<tr>
					<td><a href="login.php">Sign In Here</a></td>
				</tr>
			</table>
		</form>
	</div>
</p>
	
			<p class="center">
			We specialize in the sale and repair of classic keyboards, in particular the Fender Rhodes, Wurlitzer EP200, and Hohner Clavinet.
			</p>
		</div>
	</body>
</html>