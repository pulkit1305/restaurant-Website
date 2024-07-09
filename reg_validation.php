<?php
// Start session
session_start();

require_once 'config.php';

$Name = $_POST['user_ka_name'];
$Email = $_POST['user_ka_email'];
$Password = $_POST['user_ka_password'];
$Phone = $_POST['user_ka_phone'];

// Insert user details in the database
$sql = "INSERT INTO users (name, email, psw, phone) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sssi", $Name, $Email, $Password, $Phone);
if ($stmt->execute()) {
    // Set session variable to indicate successful registration
    $_SESSION['registration_success'] = true;
} else {
    echo "Error inserting record: " . $stmt->error;
}

$stmt->close();
$conn->close();

// Redirect to index.php after registration
header('Location: index.php');
exit();
