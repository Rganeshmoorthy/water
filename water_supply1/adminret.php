<?php
$host="localhost";
$user="root";
$password="";
$dbname="login";
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) 
{
die("Connection failed: " . $conn->connect_error);
}
?>
<html>
<head>
</head>
<body background="aby.jpg">
<h1 align="center">Complaint details</h1>
<table border="5" align="center" >
<tr>
	<th>Name</th>
	<th>Mailid</th>
	<th>phone number</th>
	<th>Area</th>
	<th>Complaints</th>
</tr>
<?php
$sql="select name,email,ph_num,region,complaints from register";
$result = $conn->query($sql);
if ($result->num_rows> 0) 
{
	while($row = $result->fetch_assoc()) 
	{
	  echo "<tr><td>{$row['name']}</td>
	<td>{$row['email']}</td>
	<td>{$row['ph_num']}</td>
	<td>{$row['region']}</td>
	<td>{$row['complaints']}</td>

	</tr>\n";
	}
}
?>
</table>
<div class="holder">
<button class="back" align="center" onclick="location.href='adminmenu.php'">Back</button>
</div>	
</body>
</html>
