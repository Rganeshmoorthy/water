<?php
class complaintspage
{
    public $servername;
    public $dbname;
    public $dbuser;
    public $dbpwd;

    public function testComplaints($user, $mail, $ph_no, $add, $regin, $gen, $comp)
    {
        $servername = "localhost";
        $dbname = "login";
        $dbuser = "root";
        $dbpwd = "";
        $conn = new mysqli($servername, $dbuser, $dbpwd, $dbname);
        if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
        $user_check_query = "SELECT * FROM register WHERE name='$user' AND email='$mail' AND ph_num='$ph_no' AND address='$add' AND region='$regin' AND gender='$gen' AND complaints='$comp' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	if(mysqli_num_rows($result) == 1){
            return 1;
	}else {
            return 0;
	}
    }
}
