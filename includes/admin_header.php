<?php
session_start();

// Assuming you have a variable named `name` in your session
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Admin';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            /* Spread links evenly */
            align-items: center;
            background-color: transparent;
            /* Transparent background */
            padding: 10px 20px;
        }

        .navbar-brand img {
            /* Adjust image size as needed */
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            display: inline-block;
            /* Display links horizontally */
            margin-left: 20px;
            /* Spacing between links */
            position: relative;
            /* Required for 3D-like effects */
            transition: transform 0.3s ease-in-out;
            /* Smooth transition on hover */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Subtle bottom shadow for depth */
        }

        .nav-links a {
            color: #333;
            /* Dark gray text */
            text-decoration: none;
            padding: 10px 20px;
            /* Add some padding for better visuals */
            display: block;
            /* Makes link fill entire list item */
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            /* Subtle top gradient for depth */
            border-radius: 5px;
            /* Rounded corners */
        }

        .nav-links a:hover {
            transform: translateY(-3px);
            /* Slight upward movement on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Enhanced shadow on hover */
        }

        .admin-name {
            margin-left: auto;
            /* Align to the right */
            font-weight: bold;
            /* Make admin name stand out */
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a class="navbar-brand" href="home.php"><img src="./images/logo-no-background1.svg" alt="" style="width: 400px; height: 100px;"></a>
        <ul class="nav-links">
            <li><a href="restaurant.php">Admin Panel</a></li>
            <li><a href="partner_profile.php">Edit Profile</a></li>

            <li> <a href="logout.php">Log out</a></li>
        </ul>
        <span class="admin-name">Welcome, <?php echo $name; ?>!</span>

    </nav>
</body>

</html>