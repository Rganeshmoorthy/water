<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$str="admin";

	// connect to database
	$db = mysql_connect('localhost','root','','login');

	// REGISTER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required*"); }
		if (empty($email)) { array_push($errors, "Email is required*"); }
		if (empty($password)) { array_push($errors, "Password is required*"); }

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO users2 (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysql_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: menu.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_users'])) {
		$username = mysql_real_escape_string($db, $_POST['username']);
		$password = mysql_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required*");
		}
		if (empty($password)) {
			array_push($errors, "Password is required*");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users2 WHERE username='$username' AND password='$password'";
			$results = mysql_query($db, $query);
			//$count1 = mysql_num_rows($results);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: menu.php');
			}else {
				array_push($errors, "Wrong username/password combination*");
			}
		}
	}
	if (isset($_POST['login_userss'])) {
		$username = mysql_real_escape_string($db, $_POST['username']);
		$password = mysql_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required*");
		}
		if (empty($password)) {
			array_push($errors, "Password is required*");
		}
		if((strcmp($str,$username)!=0)||(strcmp($str,$password)!=0))
						array_push($errors, "Enter correct login credentials");

	if (count($errors) == 0) {
		$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: adminmenu.php');
			}else {
				array_push($errors, "Wrong username/password combination*");
			}
	}

?>