<?php

$select = mysqli_query($conn, "SELECT * FROM Users WHERE username = 'admin'");
if(mysqli_num_rows($select)) {
    echo '';
}else{
    $hashedPassword = password_hash('admin123', PASSWORD_DEFAULT);
    $sql4 = "INSERT INTO users(firstName,lastName,Adress,age,username,password,Email,gender) 
    VALUES ('admin', 'admin', 'admin', '99', 'admin', '$hashedPassword', 'admin@gmail.com', 'Male')";
    $conn->query($sql4);
}