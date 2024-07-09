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
$sql = "CREATE TABLE IF NOT EXISTS Patner (
        id INT AUTO_INCREMENT PRIMARY KEY,
         pname VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        reason VARCHAR(1000) NOT NULL,
        psw VARCHAR(100) NOT NULL,
        phone INT NOT NULL,
        Profile_Image VARCHAR(100) NOT NULL,
        Restaurant_Name VARCHAR(100) NOT NULL,
        Restaurant_Cuisine VARCHAR(100) NOT NULL,
        Restaurant_Photo VARCHAR(100) NOT NULL,
        Restaurant_Rating VARCHAR(100) NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table Created Successfully";
} else {
    echo "Error Creating Table: " . $conn->error;
}



session_start();

$Name = $_POST['user_ka_name'];
$_SESSION['name'] = "fff";
$Email = $_POST['user_ka_email'];
$Password = $_POST['user_ka_password'];
$Phone = $_POST['user_ka_phone'];
$reason = $_POST['user_ka_reason'];

$rname = $_POST['restaurant_ka_name'];
$rrating = $_POST['restaurant_ka_rating'];
$rcuisine = $_POST['restaurant_ka_cuisine'];

if (isset($_POST['submit'])) {
    //                     value   key
    $file_name = $_FILES['user_ka_photo']['name']; //file's name
    $tempname = $_FILES['user_ka_photo']['tmp_name']; //file's path - source
    $resturentphoto_name = $_FILES['restaurant_ka_photo']['name'];
    $resturentphototempname = $_FILES['restaurant_ka_photo']['tmp_name'];


    $folder = 'images/' . $file_name; //destination
    $folder2 = 'images/' . $resturentphoto_name;
    $sql = "INSERT INTO Patner (pname, email, reason, psw, phone, Profile_Image,Restaurant_Name,
     Restaurant_Cuisine,Restaurant_Photo,Restaurant_Rating) VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssisssss",
        $Name,
        $Email,
        $reason,
        $Password,
        $Phone,
        $file_name,
        $rname,
        $rcuisine,
        $resturentphoto_name,
        $rrating
    );
    $stmt->execute();

    if (move_uploaded_file($tempname, $folder)) { //move_uploaded_file(source, destination) - copy and move file 
        echo "File Uploaded";
    }
    if (move_uploaded_file($resturentphototempname,  $folder2)) { //move_uploaded_file(source, destination) - copy and move file 
        echo "File Uploaded";
    }
}


// Redirect to index.php after registration
header('Location: index.php');
exit();