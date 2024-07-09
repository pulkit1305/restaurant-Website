<?php
session_start();

// Retrieve and sanitize form data using POST method
$usersname = trim($_POST['username']);
echo $usersname;
$email = trim($_POST['email']);
$bio = trim($_POST['about']);
$phone = trim($_POST['phone']);

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    // Sanitize the ID to prevent XSS or other injection attacks
    $ids = htmlspecialchars($_GET['id']);
} else {
    // Handle the case where 'id' is not set
    die("Error: No ID provided.");
}

// Debug: Output the username and ID (for development purposes only)
echo "Username: $usersname <br>";
echo "ID: $ids <br>";

require_once 'config.php';

// Update query with sanitized data
$query = "UPDATE `users` SET `name` = ?, `email` = ?, `about` = ?, `phone` = ? WHERE `id` = ?";

// Prepare the SQL statement
$stmt = $conn->prepare($query);
$stmt->bind_param("ssssi", $username, $email, $bio, $phone, $ids);
echo "Username: $usersname <br>";
// Execute the query
$result = $stmt->execute();

// Update session data
$_SESSION['about'] = $bio;
$_SESSION['phone'] = $phone;

if (!$result) {
    echo "Update failed.";
} else {
    // URL-encode the username to handle special characters
    $encodedUsername = urlencode($usersname);
    echo  $encodedUsername;
    // Redirect to the edit_profile.php with the ID and name
    header("Location: edit_profile.php?id={$ids}&name={$encodedUsername}");
    exit; // Ensure the script stops executing after the redirect
}