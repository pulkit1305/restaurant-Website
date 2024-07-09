<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masala Miles Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!--Bootstrap CDNs-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">

    </script>
    <style>
        .horizontal-list {
            display: flex;
            justify-content: center;
            /* This will center the list items horizontally */
            padding: 0;
            margin: 0;
        }

        .horizontal-list li {
            display: inline;
        }

        .horizontal-list a {
            margin-right: 10px;
            /* Add space between the buttons if needed */
        }

        ul {

            padding: 20px;
        }

        .btn-custom {

            width: 49%;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#createlog").hide();
            $("#login").show();
            $("#logIn").removeClass("btn-outline-danger");
            $("#logIn").addClass("btn-danger");
            $("#createLog").click(function() {
                $(this).removeClass("btn-outline-primary");
                $(this).addClass("btn-primary");
                $("#logIn").addClass("btn-outline-danger");
                $("#logIn").removeClass("btn-danger");

                $("#createlog").show(300);
                $("#login").hide(300);
            });
            $("#logIn").click(function() {
                $(this).removeClass("btn-outline-danger");
                $(this).addClass("btn-danger");
                $("#createLog").addClass("btn-outline-primary");
                $("#createLog").removeClass("btn-primary");
                $("#createlog").hide(300);
                $("#login").show(300);
            });
        });
    </script>
</head>

<body class="bg-nav" onload="myLoading()">
    <div id="loadingScreen"></div>
    <nav class="navbar navbar-dark bg-nav">
        <a class="navbar-brand" href="#"><img src="./images/logo-no-background1.svg" alt="" style="
width: 400px;
 
height: 100px;"></a>
    </nav>

    <div class="container">
        <div class="row mt-50">
            <div class="col-12">
                <div class="row">
                    <div class="col-8">
                        <h1 class=".text-dark display-4 text-center">
                            Welcome to the delicious world of Indian cuisines!
                        </h1>

                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-title">
                                <ul style="list-style-type: none">
                                    <li>
                                        <a id="logIn" class="btn btn-outline-danger rounded-pill btn-custom " href="#">User</a>
                                        <a id="createLog" class="btn btn-outline-primary rounded-pill btn-custom" href="#">Partner</a>
                                    </li>
                                </ul>
                            </div>

                            <div id="login" class="card-body">
                                <h1 style="text-align: center">User Log In</h1>
                                <!-- login user -->
                                <form class="form" action="login_validator.php" method="post">
                                    <div id="errorMsg"></div>
                                    <label>Email</label><br />
                                    <input type="email" class="form-control" name="user_ka_email" placeholder="Enter Email" required /><br />
                                    <label>Password</label><br />
                                    <input type="password" class="form-control" name="user_ka_password" placeholder="Min 6 charecter" required /><br />
                                    <input type="checkbox" class="" />Remember me<br /><br />

                                    <input type="submit" value="Log In" class="btn btn-primary btn-block rounded-pill" />
                                    <p class="text-center">
                                        Not a member?<a href="#" id="createuser" data-toggle="modal" data-target="#myModal">
                                            Sign Up</a>
                                    </p>
                                </form>
                            </div>
                            <div id="createlog" class="card-body">
                                <h1 style="text-align: center">Partner Log In</h1>
                                <form class="form" action="login_Pvalidator.php" method="post">
                                    <div id="errorPMsg"></div>
                                    <label>Email</label><br />
                                    <input type="email" class="form-control" name="partner_ka_email" placeholder="e.g. john@example.com" /><br />

                                    <label>Password</label><br />
                                    <input type="password" class="form-control" name="partner_ka_password" placeholder="Min 6 Charecter" /><br />
                                    <input type="checkbox" class="" />Remember me<br /><br />

                                    <input type="submit" value="Register" class="btn btn-primary btn-block" />
                                    <p class="text-center">
                                        Not a member?<a href="#" id="createpartner" data-toggle="modal" data-target="#myPModal">
                                            Sign Up</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog col-8">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Create User Account:</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <div id="regError"></div>
                    <!-- reg form -->
                    <form class="form" id="registrationForm" action="reg_validation.php" method="post">
                        <label>Name</label><br />
                        <input type="text" class="form-control" name="user_ka_name" /><br />

                        <label>Email</label><br />
                        <input type="email" class="form-control" name="user_ka_email" /><br />

                        <label>Password</label><br />
                        <input type="password" class="form-control" name="user_ka_password" /><br />

                        <label>Phone</label><br />
                        <input type="number" class="form-control" name="user_ka_phone" /><br /><br />

                        <input type="submit" value="Register here" class="btn btn-primary btn-block" />
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Partner Modal -->
    <div class="modal fade" id="myPModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Create Partner Account:</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>

                -----------------------------------------------------------------------
                <div style="position: relative" data-spy="scroll" data-target="#list-example" data-offset="0" class="modal-body">
                    <div id="regPError"></div>

                    <form class="form" enctype="multipart/form-data" action="reg_Pvalidation.php" method="post" enctype="multipart/form-data">
                        <h3 class="text-center">Personal Details</h3>
                        <label>Name</label><br />
                        <input type="text" class="form-control" name="user_ka_name" /><br />

                        <label>Email</label><br />
                        <input type="email" class="form-control" name="user_ka_email" /><br />

                        <label>Reason:</label><br />
                        <input type="text" class="form-control" name="user_ka_reason" /><br />

                        <label>Password</label><br />
                        <input type="password" class="form-control" name="user_ka_password" /><br />

                        <label>Phone</label><br />
                        <input type="number" class="form-control" name="user_ka_phone" /><br /><br />

                        <label>Profile Image</label><br />
                        <input type="file" class="form-control" name="user_ka_photo" /><br />
                        <hr />

                        <h3 class="text-center">Restaurant Details</h3>

                        <label>Restaurant Name</label><br />
                        <input type="text" class="form-control" name="restaurant_ka_name" /><br />

                        <label>Rating</label><br />
                        <input type="text" class="form-control" name="restaurant_ka_rating" /><br />

                        <label>Cuisine</label><br />
                        <input type="text" class="form-control" name="restaurant_ka_cuisine" /><br />

                        <label>Restaurant photo</label><br />
                        <input type="file" class="form-control" name="restaurant_ka_photo" /><br />

                        <input type="submit" name="submit" value="Register here" class="btn btn-primary btn-block" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var preloader = document.getElementById("loadingScreen");

        function myLoading() {
            preloader.style.display = "none";
        }
    </script>
</body>

</html>