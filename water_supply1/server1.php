<?php 
	session_start();

	// variable declaration
	$name = "";
	$email = "";
	$ph_num ="";
	$address="";
	$region="";
	$gender="";
	$complaints="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost','root','','login');
	

	// REGISTER USER
	if (isset($_POST['submit1'])) 
	{
		
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$ph_num = mysqli_real_escape_string($db, $_POST['ph_num']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$region = mysqli_real_escape_string($db, $_POST['region']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$complaints = mysqli_real_escape_string($db, $_POST['complaints']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Username is required*"); }
		if (empty($email)) { array_push($errors, "Email is required*"); }
		if (empty($ph_num)) { array_push($errors, "phone number is required*"); }
		if (empty($address)) { array_push($errors, "address is required*"); }
		if (empty($region)) { array_push($errors, "region is required*"); }
		if (empty($gender)) { array_push($errors, "gender is required*"); }
		if (empty($complaints)) { array_push($errors, "complaints is required*"); }

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			//$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO register (name, email, ph_num,address,region,gender,complaints) 
					  VALUES('$name', '$email', '$ph_num','$address','$region','$gender','$complaints')";
			$results = mysqli_query($db, $query);
			//$count1 = mysqli_num_rows($results);
			
			echo "you are registered successfully";
		}
		
		
	}
?>
<html>
<body>
	<a href="menu.php" >back</a>
</body>
</html>