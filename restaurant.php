<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zomato Home</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="style.css" />

    <!--Bootstrap CDNs-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .card {
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-weight: bold;
        font-size: 1.5rem;
        color: #343a40;
    }

    .form-control {
        border-radius: 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .btn {
        border-radius: 50px;
        padding: 10px 20px;
    }

    #SubmitToggle ul {
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        list-style-type: none;
    }

    #SubmitToggle ul li {
        margin: 0 10px;
    }

    #Menu,
    #Restaurant {
        width: auto;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    #Menu:hover,
    #Restaurant:hover {
        transform: scale(1.05);
    }

    .container.mt-20 {
        margin-top: 20px;
    }

    #RestaurantCard,
    #MenuCard {
        width: 100%;
    }

    .text-center {
        text-align: center;
    }

    .bg-nav {
        background-color: #f8f9fa;
    }
    </style>
</head>

<body class="bg-nav" onload="myLoading()">
    <div id="loadingScreen"></div>

    <?php include "includes/admin_header.php"; ?>

    <!--  Customize nav bar   -->
    <div class="container mt-20">
        <div class="row" style="width: 100%">
            <div class="col-10 offset-1">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center">

                                <img src="<?php echo $_SESSION["PHOTO"] ?>" alt=""
                                    class="card-img-top rounded-circle mb-3" style="width: 100px; height: 100px" />
                                <h3 class="card-title"><?php echo $_SESSION["username"]; ?></h3>
                                <h4><?php echo $_SESSION["CUISINE"]; ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div id="SubmitToggle" class="card-title">
                                <ul class="container p-3 mb-5 rounded">
                                    <li>
                                        <a id="Menu" class="btn btn-outline-primary rounded" href="#">Menu</a>
                                    </li>
                                    <li>
                                        <a id="Restaurant" class="btn btn-outline-danger rounded"
                                            href="#">Restaurant</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="RestaurantCard" class="card-body">
                                <hr />
                                <form class="form" enctype="multipart/form-data" action="change_store.php"
                                    method="post">
                                    <h4 class="text-center">Change Restaurant Details</h4>
                                    <br />
                                    <div id="regResError"></div>
                                    <div class="form-group">
                                        <label>Restaurant Name</label>
                                        <input type="text" class="form-control" name="restaurant_ka_name" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Restaurant Rating</label>
                                        <input type="text" class="form-control" name="restaurant_ka_rating" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Restaurant Cuisine</label>
                                        <input type="text" class="form-control" name="restaurant_ka_cuisine" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Restaurant Photo</label>
                                        <input class="form-control-file" type="file" name="restaurant_ka_photo"
                                            required />
                                    </div>
                                    <input type="submit" id="submitStore" name="submit" value="Register here"
                                        class="btn btn-primary btn-block" />
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div id="MenuCard" class="card-body">
                                <form class="form" action="reg_menu.php" method="post">
                                    <h4 class="text-center">Create New Menu</h4>
                                    <div class="form-group">
                                        <label>Menu</label>
                                        <input type="text" class="form-control" name="menu_ka_name" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="menu_ka_price" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Menu Type</label>
                                        <br />
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mType"
                                                id="exampleRadios1" value="Non-Veg" />
                                            <label class="form-check-label" for="exampleRadios1">Non-Veg</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mType"
                                                id="exampleRadios2" value="Veg" required />
                                            <label class="form-check-label" for="exampleRadios2">Veg</label>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" value="Create Menu"
                                        class="btn btn-primary btn-lg" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Pre-Loader Script     -->
    <script>
    var preloader = document.getElementById("loadingScreen");

    function myLoading() {
        preloader.style.display = "none";
    }

    $(document).ready(function() {
        $("#RestaurantCard").hide();
        $("#MenuCard").show();
        $("#Menu").removeClass("btn-outline-primary");
        $("#Menu").addClass("btn-primary");

        $("#Restaurant").click(function() {
            $(this).removeClass("btn-outline-danger");
            $(this).addClass("btn-danger");
            $("#Menu").addClass("btn-outline-primary");
            $("#Menu").removeClass("btn-primary");

            $("#RestaurantCard").show(255);
            $("#MenuCard").hide(255);
        });

        $("#Menu").click(function() {
            $(this).removeClass("btn-outline-primary");
            $(this).addClass("btn-primary");
            $("#Restaurant").addClass("btn-outline-danger");
            $("#Restaurant").removeClass("btn-danger");

            $("#RestaurantCard").hide(255);
            $("#MenuCard").show(255);
        });
    });
    </script>
</body>

</html>