<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location:home.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location:form.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	unset($_SESSION['price']);
	header("Location: ../home.php");
}
?>