<?php

$firstName = $_POST['fname'];
$lastName =  $_POST['lname'];
$adress =    $_POST['adress'];
$age =       $_POST['age'];
$username =  $_POST['username'];
$password =  $_POST['password'];
$email =     $_POST['Email'];
$gender =    $_POST['gender'];

if ( isset($_POST['submit'])){

    $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastName =  mysqli_real_escape_string($conn, $_POST['lname']);
    $adress =    mysqli_real_escape_string($conn, $_POST['adress']);
    $age =       mysqli_real_escape_string($conn, $_POST['age']);
    $username =  mysqli_real_escape_string($conn, $_POST['username']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    $email =     mysqli_real_escape_string($conn, $_POST['Email']);
    $gender =    mysqli_real_escape_string($conn, $_POST['gender']);

    $sql = "INSERT INTO users(firstName,lastName,Adress,age,username,password,Email,gender) 
            	VALUES ('$firstName', '$lastName', '$adress', '$age', '$username', '$password',
             		'$email', '$gender')";
	if(empty($firstName)){
		echo 'הזן שם פרטי';
	}else if(empty($lastName)){
		echo 'הזן שם משפחה';
	}else if(empty($adress)){
		echo 'הזן מקום מגורים';
	}else if(empty($age)){
		echo 'הזן גיל';
	}else if(empty($username)){
		echo 'הזן שם משתמש';
	}else if(empty($password)){
		echo 'הזן סיסמה';
	}else if(empty($email)){
		echo 'הזן מייל';
	}else if(empty($gender)){
		echo 'הזן מין ';
	}else if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo 'הזן מייל תקין';
	}else{
		if(mysqli_query($conn, $sql)){
			header('Location: Register.php');
		}else{
			echo 'Error:' . mysqli_connect_error($conn);
		}
	}
}


?>