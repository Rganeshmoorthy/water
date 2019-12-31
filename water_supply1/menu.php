<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: signup.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: signup.php");
	}

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>untitled</title>
	<link rel="stylesheet" href="style1.css" type="text/css" />
 	<!--[if lt IE 8]>
		<script src ="http://ie7-js.googlecode.com/svn/version/2.1(beta2)/IE8.js"></script>
	<![endif]-->
	
<style>
img {
  -webkit-filter: drop-shadow(50px 50px 44px gray); /* Safari 6.0 - 9.0 */
  filter: drop-shadow(50px 50px 44px gray);
}
</style>	
</head>
<body>
<br>
<br>
<br>
<ul id="nav">
	<li><a href="#">Home</a></li>
	<li><a href="#">About</a></li>
	<li><a href="search.php">Search</a></li>
	<li><a href="reg.php">Register complaints</a></li>
	<li><a href="#">Contact Us</a></li>
	<li><a href="index.php?logout='1'">Logout</a></li>
</ul>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>	