<?php
session_start();
include('dbconnect.php');

if(isset($_SESSION['user']))
{
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<?php
        $num_guitar=$_POST["guitar"];
        $num_flute=$_POST["flute"];
        $num_piano=$_POST["piano"];
        $name=$_POST["name"];
        $street=$_POST["add"];
        $city=$_POST["city"];
        
    
        if($num_guitar=="0")  {$num_guitar=0;}
        if($num_flute=="0") { $num_flute=0;}
        if($num_piano=="0") {$num_piano=0;}
        
        
        $cost_guitar=2000*$num_guitar;
        $cost_flute=500*$num_flute;
        $cost_piano=15000*$num_piano;
        
        
        $total_price=$cost_guitar+$cost_flute+$cost_piano;
        $total_items=$num_guitar+$num_flute+$num_piano;
		$_SESSION['price']=$total_price;
		
		$user=$userRow['username'];
		$email=$userRow['email'];

			$sql="INSERT INTO `order` (id,name,email,inst,price,time) VALUES (NULL,'$user','$email','$total_items','$total_price',NULL)";
			
			if (!mysql_query($sql))
			{
				die('Error: ' . mysql_error());
			}
			
			else
			{
				?>
				<script>alert('Thanks For place the order.Visit Again soon!');</script>
				
				<?php
			}
			

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
			
				
				<center><h4><a href="list.php">See Previous Purchasing</a></h4></center>
		
	
				<h4>Customer:</h4>
            <div id="border">
            <?php   
            echo "$name <br />$street <br />$city<br />";
           ?>
		   </div>
  
							<center><h4>Order Information<h4></center>
        <table>
            
            <tr class="head">
                <th>Instrument</th>
                <th>Unit Price</th>
                <th>Quantity Ordered</th>
                <th>Item Cost</th>
             </tr>
             
             <tr align="center">
                 <td>Guitar</td>
                 <td>2000 Rs/-</td>
                 <td><?php print("$num_guitar");?></td>
                 <td><?php printf("Rs/- %4.2f",$cost_guitar);?></td>
            </tr>
            
             <tr align="center">
                 <td>Flute</td>
                 <td>500 Rs/-</td>
                 <td><?php print("$num_flute");?></td>
                 <td><?php printf("Rs/- %4.2f",$cost_flute);?></td>
            </tr>
    
             <tr align="center">
                 <td>Piano</td>
                 <td>15000 Rs/-</td>
                 <td><?php print("$num_piano");?></td>
                 <td><?php printf("Rs/- %4.2f",$cost_piano);?></td>
            </tr>
        
            
        </table>
        
		<div id="foot">
        <?php 
            echo "<span class='order'>You Ordered $total_items Instrument<br /></span>";
            printf("<span class='order'>Your total bill is %4.2f Rs/-</span>", $total_price);
        ?>
		</div>
			
		<div id="button">
		<form action="pay/pay.php" method="post">
			<center><input type="submit" onclick="return confirm('are you sure You want to Go for payment?')" value="Pay!" id="submit" class="style"></center>
		</form>
		</div>
	
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