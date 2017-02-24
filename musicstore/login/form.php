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
				<link rel="stylesheet" type="text/css" href="style/main.css">
				<link rel="stylesheet" type="text/css" href="style/popcorn.css">
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
	<div id="box">
        <form action="billing.php" method="post">
			
			<center><h2> Welcome to The Instrumental Online-Store</h2></center>
					
					<input required type="text" name="name" size="30" placeholder="Buyer's Name:" id="name" class="style"/>
					<input required type="text" name="add" size="30" placeholder="Street Address's:" id="street" class="style"/>
					<input required type="text" name="city" size="30" placeholder="City,State,Zip" id="city" class="style"/>
        
        <table>
            <tr class="head">
                <th>Instrument</th>
                <th>Price</th>
                <th>Quantity</th>
            
            </tr>
            
            <tr>
				<td>Piano</td>
				<td>15000.0 Rs/-</td>
				<td> 
					
					<select name="piano">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
					
					
					
					
				</td>
            </tr>
        
             <tr>
				<td>Flute:</td>
				<td>500 Rs/-</td>
				<td>
					<select name="flute">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</td>
            </tr>
        
            <tr>
				<td>guitar</td>
				<td>2000 Rs/-</td>
				<td>
					
							<select name="guitar">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>			
					
				
				</td>
            </tr>
            
            
    </table>


		<div id="buttons">
			<input type="submit" onclick="return confirm('are you sure to place order?')" value="Submit Order" id="submit" class="style">
			<input type="reset" value="Clear Form" id="reset" class="style">
        </div>
		
		</form>
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