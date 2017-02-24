<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location:home.php");
}

?>
<?php

if(isset($_POST['submit']))
{
	
			$name=mysql_real_escape_string($_POST['name']);
			$email=mysql_real_escape_string($_POST['email']);
			$web=mysql_real_escape_string($_POST['web']);
			$comment=mysql_real_escape_string($_POST['text']);
			
			$sql="INSERT INTO contact (id,name,email,web,comment)
			    VALUES(NULL,'$name','$email','$web','$comment')";

			if (!mysql_query($sql))
			{
				die('Error: ' . mysql_error());
			}
			else
			{
				?>
				<script type="text/javascript"> 
				
				alert('Thanks For Contact With us.We will Reply you Soon.');
				
				</script>
				
				<?php
			}
	
}

?>

<html>
	<head>
		<title>Boxes</title>
				<link rel="stylesheet" type="text/css" href="style/main.css">
				<link rel="stylesheet" type="text/css" href="style/contact.css" media="all" />
				
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
			
			<center><h2>Contact Form</h2></center>
	
	<form method="post">
			
			<input required type="text" name="name" id="name" placeholder="Krishna Mathur" class="name"/>
			<label for="name">Name</label><br>
		
			<input required type="email" name="email" id="email" placeholder="mail@example.com" class="email" />
			<label for="email">Email</label><br>
		
			<input required type="url" pattern="https?://.+" name="web" id="web" placeholder="www.example.com" class="web"/>
			<label for="web">Website</label><br>	
	
			<textarea required name="text" placeholder="Write something to us" id="text" class="text" /></textarea><br>
		
			<input type="submit" value="Send"  class="submit" id="submit" name="submit"/>
	</form>
			<p class="center">
			We specialize in the sale and repair of classic keyboards, in particular the Fender Rhodes, Wurlitzer EP200, and Hohner Clavinet.
			</p>
		</div>
	</body>
</html>