<?php

	$errors = array(); 
if (isset($_POST['login_users']))
	{
		$str="admin";
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

if(strcmp($username,$str) !== 0)
			array_push($errors, "Enter your correct login credentials");

		if (empty($username)) {
			array_push($errors, "Username is required*");
		}
		if (empty($password)) {
			array_push($errors, "Password is required*");
		}
		

	}
	?>