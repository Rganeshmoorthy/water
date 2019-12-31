<?php
$host="localhost";
$user="root";
$password="13031997";
$dbname="user";
$conn=new mysqli($host,$user,$password,$dbname);
if($conn->connect_error)
{
	echo "connection not establised";
}	
echo "connected success";
if(isset($_POST['sub']))
{
	$name=$_POST['Name'];
	$pass=$_POST['Pass'];
	$sql="insert into utable(Name,Pass) values('$name','$pass')";
	//if($conn->query($sql)===TRUE)
	if(mysqli_query($conn,$sql))	
		echo "inserted success";
	else
		echo "not inserted";

}
/*

{
	
		
}*/
?>
