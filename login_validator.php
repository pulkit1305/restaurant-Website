<?php
// Start session
session_start();

require_once 'config.php';

$em = $_POST['user_ka_email'];
$pw = $_POST['user_ka_password'];

$sql = "SELECT * FROM users WHERE email=? AND psw=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $em, $pw);
$stmt->execute();
$stmt->bind_result($id, $name, $email, $psw, $phone, $about);
$result = $stmt->fetch();

// echo "<br/>User ID User Name Email Password";
if ($result) {
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    // echo "<br/>".$uid." ".$uname." ".$uemail." ".$upass."<br/>";
    // echo "<h1>Welcome, $em</h1>";
    header('Location: main.php');
} else {
    echo "Invalid Credentials";
    header('Location: index.php');
}
$stmt->close();
$conn->close();