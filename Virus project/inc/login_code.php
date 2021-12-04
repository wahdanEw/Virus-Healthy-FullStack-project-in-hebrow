<?php 

if (isset($_POST)){
	$username =  $_POST['username'];
	$password =  $_POST['password'];
	
	require_once 'db.php';
	require_once 'functions.php';

	if(emptyInputLogin($username, $password) !== false){
		header("location: ../login.php?error=emptyinput");
		exit();
	}

	loginUser($conn, $username, $password);
}
else{
	header("location: ../login.php?loginfailed");
	exit();
}

