<?php
// Start session
session_start();

$hostname = "localhost";
$username = "root";
$password = "";

$database = "Masala Miles";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn == null) {
    echo "Connection Failed<br/>";
}
$em = $_POST['partner_ka_email'];
$pw = $_POST['partner_ka_password'];

$sql = "SELECT * FROM patner WHERE email=? AND psw=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $em, $pw);
$stmt->execute();
$stmt->bind_result(
    $id,
    $pname,
    $email,
    $reason,
    $Psw,
    $phone,
    $Profile_Image,
    $Restaurant_Cuisine,
    $Restaurant_Name,
    $Restaurant_Photo,
    $Restaurant_Rating
);
$result = $stmt->fetch();

// echo "<br/>User ID User Name Email Password";
if ($result) {
    // echo "<br/>".$uid." ".$uname." ".$uemail." ".$upass."<br/>";
    // echo "<h1>Welcome, $em</h1>";
    $_SESSION['name'] = $pname;
    header('Location: restaurant.php');
} else {
    echo "Invalid Credentials";
    header('Location: index.php');
}
$stmt->close();
$conn->close();