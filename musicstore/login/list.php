<?php
session_start();
include('dbconnect.php');

if(isset($_SESSION['user']))
{
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$email=$userRow['email'];
?>





<html>
	<head>
		<title>Boxes</title>
				<link rel="stylesheet" type="text/css" href="style/main.css">
				<link rel="stylesheet" type="text/css" href="style/billing.css" >
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
						<span class="name1"> <?php echo $userRow['username']; ?></span>
						<a href="logout.php?logout">Sign-Out</a>
				</div>
				<hr>
	
	<div id="box">
			
				
<?php
					echo "<center><h4>Purchased order Information<h4></center>";
					$result = mysql_query("SELECT id,inst,price,time FROM `order` where email='$email'");
					$count=mysql_num_rows($result);
					if($count==0)
					{
						echo "<center><h3>No Purchased Items</h3></center>";
					}
			else
			{
			echo " <table>
            
            <tr class='head'>
                <th>Order-Id</th>
                <th>Items</th>
                <th>Price</th>
                <th>Time</th>
             </tr>";
             
        while($row = mysql_fetch_array($result))
			{
				  echo "<tr>";
				  echo "<td>".$row['id']."</td>";
				  echo "<td>".$row['inst']."</td>";
				  echo "<td>".$row['price']."</td>";
				  echo "<td>".$row['time']."</td>";
				  echo "</tr>";
			}    
            
        echo "</table>";
		
			}
		
	?>
	
	</div>
				
			
			
			
			
			<p class="center">
			We specialize in the sale and repair of classic keyboards, in particular the Fender Rhodes, Wurlitzer EP200, and Hohner Clavinet.
			</p>
		</div>
	</body>
</html>
<?php
}
?>