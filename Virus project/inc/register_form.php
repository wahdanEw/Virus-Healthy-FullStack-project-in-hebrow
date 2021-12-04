
<?php

	// var_dump($_POST);
	$firstName = $_POST['fname'];
	$lastName =  $_POST['lname'];
	$adress =    $_POST['adress'];
	$age =       $_POST['age'];
	$username =  $_POST['username'];
	$password =  $_POST['password'];
	$email =     $_POST['Email'];
	$gender =    $_POST['gender'];

	require_once 'db.php';
	require_once 'functions.php';

	$firstName = mysqli_real_escape_string($conn, $_POST['fname']);
	$lastName =  mysqli_real_escape_string($conn, $_POST['lname']);
	$adress =    mysqli_real_escape_string($conn, $_POST['adress']);
	$age =       mysqli_real_escape_string($conn, $_POST['age']);
	$username =  mysqli_real_escape_string($conn, $_POST['username']);
	$password =  mysqli_real_escape_string($conn, $_POST['password']);
	$email =     mysqli_real_escape_string($conn, $_POST['Email']);
	$gender =    mysqli_real_escape_string($conn, $_POST['gender']);

	if(emptyInputSignup($firstName, $lastName, $adress, $age, $username, $password, $email, $gender) !== false){
		header("location: ../Register.php?error=emptyinput");
		exit();
	}
	else if(invalidUid($username) !== false){
		header("location: ../Register.php?error=invalidUid");
		exit();
	}
	else if(invalidEmail($email) !== false){
		header("location: ../Register.php?error=invalidemail");
		exit();
	}

	else if(uidExists($conn, $username, $email) !== false){
		header("location: ../Register.php?error=usernametaken");
		exit();
	}
	else{
		creatUser($conn, $firstName, $lastName, $adress, $age, $username, $password, $email, $gender);
		header("location: ../Register.php");
		exit();
	}


