<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location:home.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: login/form.php");
	}
	else
	{
		?>
        <script>alert('wrong details');</script>
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
				<td><input type="email" name="email" placeholder="Your Email" required /></td>
		</tr>
		<tr>
				<td><input type="password" name="pass" placeholder="Your Password" required /></td>
		</tr>
		<tr>
				<td><button type="submit" name="btn-login">Sign In</button></td>
		</tr>
		<tr>
				<td><a href="register.php">Sign Up Here</a></td>
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