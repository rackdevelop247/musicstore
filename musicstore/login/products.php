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
	<title>cssSlider</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="cssSlider created with cssSlider, a free wizard program that helps you easily generate beautiful web slideshow" />
	<link rel="stylesheet" href="style/product.css">
	<link rel="stylesheet" type="text/css" href="style/signstyle.css" media="all" />
	
</head>
<body style="background-color:#fff;">
<audio autoplay>
<source src="mp3/music.mp3" type="audio/mpeg">
Audio elements not supported by your browser.
</audio>
<div id="page">

	<div id="logo">
		<img src="images/logo.gif" alt="The Analog Specialists" />
	</div>

<ul>
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
		
		
		
		<!-- Start cssSlider.com -->
		<!-- Generated by cssSlider.com 2.0 -->
		<link rel="stylesheet" href="Instruments_files/csss_engine1/style.css">
		<!--[if IE]><link rel="stylesheet" href="Instruments_files/csss_engine1/ie.css"><![endif]-->
		<!--[if lte IE 9]><script type="text/javascript" src="Instruments_files/csss_engine1/ie.js"></script><![endif]-->
		 <div class='csslider1 autoplay '>
		<input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_3' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_4' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_5' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_6' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_7' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_8' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
		<input name="cs_anchor1" id='cs_pause1_0' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_1' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_2' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_3' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_4' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_5' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_6' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_7' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_8' type="radio" class='cs_anchor pause'>
		<ul>
			<li class="cs_skeleton"><img src="Instruments_files/csss_images1/flute1.jpg" style="width: 100%;"></li>
			<li class='num0 img slide'> <img src='Instruments_files/csss_images1/flute1.jpg' alt='Metal Flute' title='Metal Flute' /></li>
			<li class='num1 img slide'> <img src='Instruments_files/csss_images1/flute2.jpg' alt='Metal Flute' title='Metal Flute' /></li>
			<li class='num2 img slide'> <img src='Instruments_files/csss_images1/guitar1.jpg' alt='Aqoustic Guitar' title='Aqoustic Guitar' /></li>
			<li class='num3 img slide'> <img src='Instruments_files/csss_images1/guitar2.jpg' alt='Electric Guitar' title='Electric Guitar' /></li>
			<li class='num4 img slide'> <img src='Instruments_files/csss_images1/guitar3.jpg' alt='Acoustic Guitar' title='Acoustic Guitar' /></li>
			<li class='num5 img slide'> <img src='Instruments_files/csss_images1/guitar4.jpg' alt='Acoustic Guitar' title='Acoustic Guitar' /></li>
			<li class='num6 img slide'> <img src='Instruments_files/csss_images1/piano1.jpg' alt='Home Piano' title='Home Piano' /></li>
			<li class='num7 img slide'> <img src='Instruments_files/csss_images1/piano2.jpg' alt='Classic Piano' title='Classic Piano' /></li>
			<li class='num8 img slide'> <img src='Instruments_files/csss_images1/piano3.png' alt='Piano' title='Piano' /></li>
		</ul><div class="cs_engine"><a href="http://cssslider.com">slideshow creator</a> by cssSlider.com v2.0</div>
		<div class='cs_description'>
			<label class='num0'><span class="cs_title"><span class="cs_wrapper">Metal Flute</span></span></label>
			<label class='num1'><span class="cs_title"><span class="cs_wrapper">Metal Flute</span></span></label>
			<label class='num2'><span class="cs_title"><span class="cs_wrapper">Aqoustic Guitar</span></span></label>
			<label class='num3'><span class="cs_title"><span class="cs_wrapper">Electric Guitar</span></span></label>
			<label class='num4'><span class="cs_title"><span class="cs_wrapper">Acoustic Guitar</span></span></label>
			<label class='num5'><span class="cs_title"><span class="cs_wrapper">Acoustic Guitar</span></span></label>
			<label class='num6'><span class="cs_title"><span class="cs_wrapper">Home Piano</span></span></label>
			<label class='num7'><span class="cs_title"><span class="cs_wrapper">Classic Piano</span></span></label>
			<label class='num8'><span class="cs_title"><span class="cs_wrapper">Piano</span></span></label>
		</div>
		<div class='cs_play_pause'>
			<label class='cs_play' for='cs_play1'><span><i></i><b></b></span></label>
			<label class='cs_pause num0' for='cs_pause1_0'><span><i></i><b></b></span></label>
			<label class='cs_pause num1' for='cs_pause1_1'><span><i></i><b></b></span></label>
			<label class='cs_pause num2' for='cs_pause1_2'><span><i></i><b></b></span></label>
			<label class='cs_pause num3' for='cs_pause1_3'><span><i></i><b></b></span></label>
			<label class='cs_pause num4' for='cs_pause1_4'><span><i></i><b></b></span></label>
			<label class='cs_pause num5' for='cs_pause1_5'><span><i></i><b></b></span></label>
			<label class='cs_pause num6' for='cs_pause1_6'><span><i></i><b></b></span></label>
			<label class='cs_pause num7' for='cs_pause1_7'><span><i></i><b></b></span></label>
			<label class='cs_pause num8' for='cs_pause1_8'><span><i></i><b></b></span></label>
			</div>
		<div class='cs_arrowprev'>
			<label class='num0' for='cs_slide1_0'><span><i></i><b></b></span></label>
			<label class='num1' for='cs_slide1_1'><span><i></i><b></b></span></label>
			<label class='num2' for='cs_slide1_2'><span><i></i><b></b></span></label>
			<label class='num3' for='cs_slide1_3'><span><i></i><b></b></span></label>
			<label class='num4' for='cs_slide1_4'><span><i></i><b></b></span></label>
			<label class='num5' for='cs_slide1_5'><span><i></i><b></b></span></label>
			<label class='num6' for='cs_slide1_6'><span><i></i><b></b></span></label>
			<label class='num7' for='cs_slide1_7'><span><i></i><b></b></span></label>
			<label class='num8' for='cs_slide1_8'><span><i></i><b></b></span></label>
		</div>
		<div class='cs_arrownext'>
			<label class='num0' for='cs_slide1_0'><span><i></i><b></b></span></label>
			<label class='num1' for='cs_slide1_1'><span><i></i><b></b></span></label>
			<label class='num2' for='cs_slide1_2'><span><i></i><b></b></span></label>
			<label class='num3' for='cs_slide1_3'><span><i></i><b></b></span></label>
			<label class='num4' for='cs_slide1_4'><span><i></i><b></b></span></label>
			<label class='num5' for='cs_slide1_5'><span><i></i><b></b></span></label>
			<label class='num6' for='cs_slide1_6'><span><i></i><b></b></span></label>
			<label class='num7' for='cs_slide1_7'><span><i></i><b></b></span></label>
			<label class='num8' for='cs_slide1_8'><span><i></i><b></b></span></label>
		</div>
		<div class='cs_bullets'>
			<label class='num0' for='cs_slide1_0'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/flute1.jpg' alt='Metal Flute' title='Metal Flute' /></span></label>
			<label class='num1' for='cs_slide1_1'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/flute2.jpg' alt='Metal Flute' title='Metal Flute' /></span></label>
			<label class='num2' for='cs_slide1_2'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/guitar1.jpg' alt='Aqoustic Guitar' title='Aqoustic Guitar' /></span></label>
			<label class='num3' for='cs_slide1_3'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/guitar2.jpg' alt='Electric Guitar' title='Electric Guitar' /></span></label>
			<label class='num4' for='cs_slide1_4'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/guitar3.jpg' alt='Acoustic Guitar' title='Acoustic Guitar' /></span></label>
			<label class='num5' for='cs_slide1_5'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/guitar4.jpg' alt='Acoustic Guitar' title='Acoustic Guitar' /></span></label>
			<label class='num6' for='cs_slide1_6'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/piano1.jpg' alt='Home Piano' title='Home Piano' /></span></label>
			<label class='num7' for='cs_slide1_7'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/piano2.jpg' alt='Classic Piano' title='Classic Piano' /></span></label>
			<label class='num8' for='cs_slide1_8'> <span class='cs_point'></span>
				<span class='cs_thumb'><img src='Instruments_files/csss_tooltips1/piano3.png' alt='Piano' title='Piano' /></span></label>
		</div>
		</div>
		<!-- End cssSlider.com -->
	</div>
	
			<p class="center">
			We specialize in the sale and repair of classic keyboards, in particular the Fender Rhodes, Wurlitzer EP200, and Hohner Clavinet.
			</p>
		
		</div>
</body>
</html>

<?php
}
else
{
	if(!isset($_SESSION['user']))
	{
		header("Location:home.php");
	}
}
?>