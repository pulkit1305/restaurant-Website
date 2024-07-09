<?php

$pid = $_GET['id'];
$resname = $_GET['name'];
$hostname = "localhost";
$username = "root";
$password = "";
$database = "masala miles";

$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
$query1 = "SELECT * FROM `restaurant` WHERE `id` = '$pid'";
$result = mysqli_query($conn, $query1);

if ($result) {
    $row = mysqli_fetch_array($result);
} else {
    die("Query failed: " . $conn->error);
}
$sql = "SELECT * FROM restaurant WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $pid);
$stmt->execute();
$stmt->bind_result($id, $resname, $rrating, $rcuisine, $rphoto);
$result = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6Hjty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #CD5C5C, peachpuff);
        }

        #loadingScreen {
            position: fixed;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #CD5C5C, peachpuff);
            z-index: 1001;
        }

        .header {
            background: #343a40;
            color: #fff;
            padding: 10px 0;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .restaurant-header {
            position: relative;
        }

        .restaurant-header img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .restaurant-name {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #ffe000;
            font-size: 3em;
            font-weight: bold;
        }

        .card {
            margin-bottom: 20px;
        }

        .fa-minus-circle {
            transition: transform 0.3s;
        }

        .fa-minus-circle:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body onload="myLoading()">
    <div id="loadingScreen"></div>

    <?php include "includes/header.php"; ?>

    <div class="container mt-5">
        <div class="restaurant-header">
            <img src="./images/<?php echo $rphoto; ?>" alt="<?php echo $resname; ?>">
            <h1 class="restaurant-name"><?php echo $resname; ?></h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row mt-4">
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <?php
                                    $conn = new mysqli($hostname, $username, $password, $database);
                                    if ($conn->connect_error) {
                                        die("Connection Failed: " . $conn->connect_error);
                                    }
                                    $sql = "SELECT * FROM menu WHERE resname like ?";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bind_param('s', $resname);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $counter = 0;

                                    while ($row = $result->fetch_assoc()) {
                                        $counter++;
                                        echo '
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-2 text-center">';
                                        if ($row['type'] == "Veg") {
                                            echo '<i class="fa fa-minus-circle fa-2x text-success"></i>';
                                        } else {
                                            echo '<i class="fa fa-minus-circle fa-2x text-danger"></i>';
                                        }
                                        echo '</div>
                                                <div class="col-7">
                                                    <h5><b id="item' . $counter . '">' . $row['Rmenu'] . '</b></h5>
                                                    <p class="text-muted">Rs.<span id="price' . $counter . '">' . $row['rprice'] . '</span></p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <form method="post" action="cart.php">
                                                        <input type="hidden" name="action" value="add">
                                                        <input type="hidden" name="item_id" value="' . $row['id'] . '">
                                                        <input type="hidden" name="item_name" value="' . $row['Rmenu'] . '">
                                                        <input type="hidden" name="item_price" value="' . $row['rprice'] . '">
                                                        <button type="submit" class="btn btn-success btn-sm">Add Item</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- Additional content like restaurant details or ratings can go here -->
                                <h4>Restaurant Details</h4>
                                <p>Cuisine: <?php echo $rcuisine; ?></p>
                                <p>Rating: <?php echo $rrating; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="form" action="order_val.php" method="post">
                        <label>Your Address</label><br>
                        <input type="text" class="form-control" name="user_ka_address"><br>
                        <input type="submit" id="orderSubmit" class="btn btn-primary btn-lg float-right" value="Submit">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var preloader = document.getElementById('loadingScreen');

        function myLoading() {
            preloader.style.display = 'none';
        }
    </script>
</body>

</html>