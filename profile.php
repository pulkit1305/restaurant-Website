<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";

$database = "Masala Miles";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn == null) {
    echo "Connection Failed<br/>";
}
$name = $_SESSION['name'];
$em = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $em);
$stmt->execute();
$stmt->bind_result($id, $name, $email, $psw, $phone, $about);
$result = $stmt->fetch();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* Reset some default browser styles */
    body,
    h1,
    h2,
    p,
    ul {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .profile-container {
        background-color: #fff;
        width: 80%;
        max-width: 900px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .profile-header {
        background-color: #F08080;
        color: white;
        text-align: center;
        padding: 2rem;
    }

    .profile-header .profile-picture {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        border: 5px solid #fff;
    }

    .profile-header .profile-name {
        margin: 1rem 0 0.5rem;
        font-size: 2rem;
    }

    .profile-header .profile-title {
        font-size: 1.2rem;
        font-weight: 300;
    }

    .profile-details {
        padding: 2rem;
    }

    .profile-details h2 {
        margin-bottom: 1rem;
        font-size: 1.5rem;
        color: #333;
    }

    .profile-details p {
        margin-bottom: 1rem;
        line-height: 1.6;
        color: #666;
    }

    .profile-details ul {
        list-style-type: disc;
        padding-left: 1.5rem;
    }

    .profile-details ul li {
        margin-bottom: 0.5rem;
        color: #666;
    }
    </style>
</head>

<body>
    <div class="profile-container">
        <div class="profile-header">
            <img src="profile-picture.jpg" alt="Profile Picture" class="profile-picture">
            <h1 class="profile-name"> <?php echo $name; ?></h1>

        </div>
        <div class="profile-details">
            <h2>About Me</h2>
            <!-- <p>Hello! I'm John Doe, a web developer with a passion for creating dynamic and responsive web applications.
                I have experience in HTML, CSS, JavaScript, and various frameworks and libraries.</p> -->
            <h2>Contact Information</h2>
            <p>Email: <?php echo $email; ?></p>
            <p>Phone: <?php echo $phone; ?></p>


            <!-- <button type="button" id="myBtn" class="btn btn-primary">Edit</button> -->
            <button type="button" id="myBtn" class="btn btn-primary" data-id="<?php echo $id; ?>"
                data-name="<?php echo $name; ?>">Edit</button>

        </div>
    </div>
    <script>
    var btn = document.getElementById("myBtn");
    btn.addEventListener("click", function() {
        // Retrieve the ID from the data attribute
        var id = btn.getAttribute("data-id");
        var names = btn.getAttribute('data-name');
        // Redirect to the URL with the ID as a query parameter
        window.location.href = "edit_profile.php?id=" + id + "&name=" + names;
    });
    </script>
</body>

</html>