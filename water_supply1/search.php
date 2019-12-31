<?php
$host="localhost";
$user="root";
$password="";
$dbname="search";
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
<h1 align="center">Water supply Details</h1>
<table border="5" align="center" >
<tr>
	<th>Area name</th>
	<th>City</th>
	<th>Water_supply_date</th>
	<th>Water_supply_time</th>
</tr>
<?php
$sql="select area_name,city,supply_date,supply_time from water_supply";
$result = $conn->query($sql);
if ($result->num_rows> 0) 
{
	while($row = $result->fetch_assoc()) 
	{
	  echo "<tr><td>{$row['area_name']}</td>
	<td>{$row['city']}</td>
	<td>{$row['supply_date']}</td>
	<td>{$row['supply_time']}</td>
	</tr>\n";
	}
}
?>
</table>
<div class="holder">
<button class="back" align="center" onclick="location.href='menu.php'">Back</button>
</div>	
</body>
</html>
