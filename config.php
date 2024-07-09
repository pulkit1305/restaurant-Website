<?php
$hostname = "localhost";
$username = "root";
$password = "";


// Connection to the server
$conn = new mysqli($hostname, $username, $password);
if ($conn == null) {
    echo "Connection Failed<br/>";
}
//creating db
$sql = "CREATE DATABASE IF NOT EXISTS `Masala Miles`";
if ($conn->query($sql) === true) {
    echo "Database Created Successfully";
} else {
    echo "Error Creating Database: " . $conn->error;
}
// Connection to the server
$database = "Masala Miles";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn == null) {
    echo "Connection Failed<br/>";
}
//creating table 
$sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        psw VARCHAR(100) NOT NULL,
        phone INT NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table Created Successfully";
} else {
    echo "Error Creating Table: " . $conn->error;
}