<?php
class Loginpage
{
    public $servername;
    public $dbname;
    public $dbuser;
    public $dbpwd;

    public function testlogin($user, $pass)
    {
        $servername = "localhost";
        $dbname = "login";
        $dbuser = "root";
        $dbpwd = "";
        $conn = new mysqli($servername, $dbuser, $dbpwd, $dbname);
        if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
        $encpass = md5($pass);
        $user_check_query = "SELECT * FROM users2 WHERE username='$user' AND password='$encpass' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	if(mysqli_num_rows($result) == 1){
            return 1;
	}else {
            return 0;
	}
    }
}
