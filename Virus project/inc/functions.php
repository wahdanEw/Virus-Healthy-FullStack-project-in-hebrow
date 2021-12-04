<?php

include './inc/db.php';

function emptyInputSignup($firstName, $lastName, $adress, $age, $username, $password, $email, $gender){
    $result;
    if(empty($firstName) || empty($lastName) || empty($adress) || empty($age) || empty($username) || empty($password) || empty($email) || empty($gender)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function pwdMatch($password, $pwdRepeat){
    $result;
    if(!$password !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../Register.php?error=stmtfailed");
		exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return false;
    }

    mysqli_stmt_close($stmt);
}

function creatUser($conn, $firstName, $lastName, $adress, $age, $username, $password, $email, $gender){
    $sql = "INSERT INTO users(firstName,lastName,Adress,age,username,password,Email,gender) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../Register.php?error=stmtfailed");
		exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $adress, $age, $username, $hashedPassword, $email, $gender);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Register.php?error=none");
    exit();
}

function emptyInputLogin($username, $password){
    $result;
    if(empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passwordHased = $uidExists ["password"];
    $checkPassword = password_verify($password, $passwordHased);

    if($checkPassword === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    if($checkPassword === true){
        session_start();
        $_SESSION["id"] =  $uidExists ["id"];
        $_SESSION["username"] =  $uidExists ["username"];
        header("location: ../index.php?loginsuccess");
        exit();
    }
}
