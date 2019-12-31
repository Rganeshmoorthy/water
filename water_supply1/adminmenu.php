<?php
$host="localhost";
$user="root";
$password="";
$dbname="search";
$conn=new mysqli($host,$user,$password,$dbname);
if($conn->connect_error)
{
	echo "connection not establised";
}	
echo "connected";
if(isset($_POST['sub']))
{
	
	$name=$_POST['Name'];
	$city=$_POST['city'];
	$sdate=$_POST['Sdate'];
	$stime=$_POST['Stime'];
	$sql="insert into water_supply(area_name,city,supply_date,supply_time) values('$name','$city','$sdate','$stime')";
	//if($conn->query($sql)===TRUE)
	if(mysqli_query($conn,$sql))	
		echo "inserted success";
	else
		echo "not inserted";

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
	<li><a href="adminret.php">View Complaints</a></li>
	<li><a href="updatesupply.php">Update water supply</a></li>
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