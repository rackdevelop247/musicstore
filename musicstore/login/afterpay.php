<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user']))
{
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$price=$_SESSION['price'];
?>

<html>
<head>
	<title>Payment Done successful! </title>
<style type="text/css">
.price
{
	color:red;
	font-size:24px;
	font-style:bold;
	font-type:italic;
	
}
#box
{
	margin-top:150px;
	margin-left:450px;
	
}

</style>
</head>
<body>
	<div id="box">
	
	<h3>Your payment of Rs/- <span class="price"><?php echo $price;?></span> has been done successfully</h3>
		<h3>You will redirected to home page after <span class="price">7</span> seconds</h3>
	<h4>Thank you for shopping with us.</h4>
	
	</div>
	
<?php
header("Refresh:7;url=home.php");
?>
</body>
</html>

<?php
}
?>