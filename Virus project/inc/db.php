<?php 

$localhost = 'localhost';
$dbusername = 'root';
$dbpass = 'root';
$dbname = 'covid';

$conn= NEW mysqli($localhost, $dbusername, $dbpass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
$database = "CREATE DATABASE $dbname";

$table1 = 'create table users(
    id INT NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(128) NOT NULL,
    lastName VARCHAR(128) NOT NULL,
    Adress VARCHAR(128) NOT NULL,
    age INT(50) NOT NULL,
    username VARCHAR(128) NOT NULL,
    password TEXT(100) NOT NULL,
    Email TEXT(40) NOT NULL,
    gender VARCHAR(50),
    PRIMARY KEY ( id )
    )';

$table2 = 'create table comments(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    date DATETIME NOT NULL,
    message TEXT NOT NULL,
    PRIMARY KEY ( id )
    )';

$table3 = 'create table cntvists(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    pagename VARCHAR(254) NOT NULL,
    times INT(254) NOT NULL,
    date DATETIME NOT NULL,
    PRIMARY KEY ( id )
    )';

$createDB = [$database, $table1, $table2, $table3];
$errors = [];

foreach($createDB as $k => $sql){
    $query = $conn->query($sql);
    $conn = mysqli_connect("$localhost","$dbusername","$dbpass","$dbname");
    if(!$conn)
        $errors[] = "Error - database connection: $k : failed ($conn->error)";
    else if(!$query)
        $errors[] = "Table $k : Creation failed ($conn->error)";
    else
        $errors[] = "Table $k : Creation done";
}

include_once './inc/admincreat.php';

?>