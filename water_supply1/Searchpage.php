<?php
class Searchpage
{
    public $servername;
    public $dbname;
    public $dbuser;
    public $dbpwd;

    public function testSearch($area, $city, $date, $time)
    {
        $servername = "localhost";
        $dbname = "search";
        $dbuser = "root";
        $dbpwd = "";
        $conn = new mysqli($servername, $dbuser, $dbpwd, $dbname);
        if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
        $user_check_query = "SELECT * FROM water_supply WHERE area_name='$area' AND city='$city' AND supply_date='$date' AND supply_time='$time' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	if(mysqli_num_rows($result) == 1){
            return 1;
	}else {
            return 0;
	}
    }
}
