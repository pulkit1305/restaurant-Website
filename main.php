<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
    .scrolling-container {
        display: flex;
        overflow-x: auto;
        padding: 10px;
        gap: 20px;
    }

    .scrolling-container .box {
        flex: 0 0 auto;
        width: 300px;
        /* Adjusted the width to make it smaller */
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .scrolling-container .box img {
        width: 100%;
        height: auto;
    }

    .scrolling-container .box .content {
        padding: 10px;
        text-align: center;
    }

    .scrolling-container .box .content h3 {
        margin: 10px 0;
        font-size: 20px;
        /* Adjusted the font size */
    }

    .scrolling-container .box .content p {
        margin: 5px 0;
        color: #666;
        font-size: 16px;
        /* Adjusted the font size */
    }

    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

    :root {
        --red: #ff3838;

    }

    * {
        font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        transition: all .2s linear;
    }

    *::selection {
        background: var(--red);
        color: #fff;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        scroll-padding-top: 6rem;
    }

    body {
        background: #f7f7f7;

    }

    section {
        padding: 2rem 9%;
    }

    .heading {
        text-align: center;
        font-size: 3.5rem;
        padding: 1rem;
        color: #666;
    }

    .heading span {
        color: var(--red);
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fff;
        padding: 2rem 9%;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
    }


    .btn {
        display: inline-block;
        padding: .8rem 3rem;
        border: .2rem solid var(--red);
        color: var(--red);
        cursor: pointer;
        font-size: 1.7rem;
        border-radius: .5rem;
        position: relative;
        overflow: hidden;
        z-index: 0;
        margin-top: 1rem;
    }

    .btn::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 0%;
        height: 100%;
        background: var(--red);
        transition: .3s linear;
        z-index: -1;
    }

    .btn:hover::before {
        width: 100%;
        left: 0;

    }

    .btn:hover {
        color: #fff;
    }

    .btn0 {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        color: #ffffff;
        background-color: #ff3838;
        border: 2px solid #ff3838;
        border-radius: 5px;
    }

    header .logo {
        font-size: 2.5rem;
        font-weight: bolder;
        color: #666;
    }

    header .logo i {
        padding-right: .5rem;
        color: var(--red);
    }

    header .navbar a {
        font-size: 2rem;
        margin-left: 2rem;
        color: #666;
    }

    header .navbar a:hover {
        color: var(--red);
    }

    #menu-bar {
        font-size: 3rem;
        cursor: pointer;
        color: #666;
        border: .1rem solid #666;
        border-radius: .3rem;
        padding: .5rem 1.5rem;
        display: none;
    }




    .home {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        min-height: 100vh;
        align-items: center;
        background: url(images/home-bg.jpg) no-repeat;
        background-size: cover;
        background-position: center;
    }

    .home .content {
        flex: 1 1 40rem;
        padding-top: 6.5rem;
    }

    .home .image {
        flex: 1 1 40rem;
    }

    .home .image img {
        width: 100%;
        animation: float 3s linear infinite;
    }

    .home .content h3 {
        font-size: 5rem;
        color: #333;
    }

    .home .content p {
        font-size: 1.7rem;
        color: #666;
        padding: 1rem 0;
    }

    .speciality .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .speciality .box-container .box {
        flex: 1 1 40rem;
        position: relative;
        overflow: hidden;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        border: .1rem solid rgba(0, 0, 0, .3);
        cursor: pointer;
        border-radius: .5rem;
    }

    .speciality .box-container .box .image {
        height: 100%;
        width: 100%;
        object-fit: cover;
        position: absolute;
        top: -100%;
        left: 0;
    }

    .speciality .box-container .box .content {
        text-align: center;
        background: #fff;
        padding: 2rem;
    }

    .speciality .box-container .box .content img {
        margin: 1.5rem 0;
    }

    .speciality .box-container .box .content h3 {
        font-size: 2.5rem;
        color: #333;
    }

    .speciality .box-container .box .content p {
        font-size: 1.6rem;
        color: #666;
        padding: 1rem 0;
    }

    .speciality .box-container .box:hover .image {
        top: 0;
    }

    .speciality .box-container .box:hover .content {
        transform: translateY(100%);
    }

    .popular .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .popular .box-container .box {
        padding: 2rem;
        background: #fff;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
        border: .1rem solid rgba(0, 0, 0, .3);
        border-radius: .5rem;
        text-align: center;
        flex: 1 1 40rem;
        position: relative;

    }

    .popular .box-container .box img {
        height: 25rem;
        object-fit: cover;
        width: 100%;
        border-radius: .5rem;
    }

    .popular .box-container .box .price {
        position: absolute;
        top: 3rem;
        left: 3rem;
        background: var(--red);
        color: #fff;
        font-size: 2rem;
        padding: .5rem 1rem;
        border-radius: .5rem;
    }

    .popular .box-container .box h3 {
        color: #333;
        font-size: 2.5rem;
        padding-top: 1rem;
    }

    .popular .box-container .box .stars i {
        color: gold;
        font-size: 1.7rem;
        padding: 1rem .1rem;
    }

    .steps {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        padding: 1rem;
    }

    .steps .box {
        flex: 1 1 25rem;
        padding: 1rem;
        text-align: center;

    }

    .steps .box img {
        border-radius: 50%;
        border: 1rem solid #fff;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
    }

    .steps .box h3 {
        font-size: 3rem;
        color: #333;
        padding: 1rem;
    }



    .review .box-container .box {
        text-align: center;
        padding: 2rem;
        border: 1rem solid #fff;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .3);
        border-radius: .5rem;
        flex: 1 1 30rem;
        background: #045372;
        margin-top: 6rem;

    }

    .review .box-container .box img {
        height: 12rem;
        width: 12rem;
        border-radius: 50%;
        border: 1rem solid #fff;
        margin-top: -8rem;
        object-fit: cover;
    }

    .review .box-container .box h3 {
        font-size: 2.5rem;
        color: #fff;
        padding: .5rem 0;
    }

    .review .box-container .box .stars i {
        font-size: 2rem;
        color: var(--red);
        padding: .5rem 0;
    }

    .review .box-container .box p {
        font-size: 1.7rem;
        color: #eee;
        padding: 1rem 0;
    }

    .order .row {
        padding: 2rem;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
        background: #fff;
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        border-radius: .5rem;
        width: 1000px;
        margin-left: 160px;
    }

    .order .row form {
        flex: 1 1 50rem;
        padding: 1rem;
    }

    .order .row form .inputBox {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .order .row form .inputBox input,
    .order .row form textarea {
        padding: 1rem;
        margin: 1rem 0;
        font-size: 1.7rem;
        color: #333;
        text-transform: none;
        border: .1rem solid rgba(0, 0, 0, .3);
        border-radius: .5rem;
        width: 100%;
    }

    .order .row form textarea {
        resize: none;
        height: 15rem;
    }

    .order .row form .btn0 {
        cursor: pointer;
        margin-left: 360px;
        margin-top: 20px;
        width: 240px;

    }

    /* footer */


    .footer {
        background-color: #f8f9fa;
        color: #333;
        padding: 50px 0;
        font-family: Arial, sans-serif;
    }

    .footer .credit {
        padding: 2.5rem 1rem;
        color: #000000;
        font-weight: normal;
        font-size: 2rem;
        text-align: center;
    }

    .footer .credit span {
        color: #0e21ce;
    }

    .container {
        display: flex;
        justify-content: space-around;
        max-width: 1200px;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .footer-content {
        flex: 1;
        padding: 0 20px;
        text-decoration: none;
    }

    .footer-content h3 {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .footer-content ul {
        list-style: none;
        padding: 0;
    }

    .footer-content ul li {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .footer-content ul li a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s ease;
    }

    .footer-content ul li a:hover {
        color: #ff3838;
    }

    .social-icons {
        display: flex;
        padding: 0;
        justify-content: space-between;
    }

    .social-icons li {
        margin-right: 10px;
        list-style: none;
    }

    .social-icons a {
        color: #333;
        font-size: 24px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: #ff3838;
    }

    #scroll-top {
        position: fixed;
        top: -120%;
        right: 2rem;
        padding: .5rem 1.5rem;
        font-size: 4rem;
        background: var(--red);
        color: #ffffff;
        border-radius: .5rem;
        transition: .5s linear;
        z-index: 1000;
    }

    #scroll-top.active {
        top: calc(100% - 12rem);
    }

    .loader-container {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10000;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
    }

    .loader-container.fade-out {
        top: -120%;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0rem);
        }

        50% {
            transform: translateY(3rem);
        }
    }
    </style>
</head>

<body>
    <?php
    session_start();
    ?>
    <section> <?php
                require_once 'header.php';
                ?></section>
    <br><br>


    <section class="home" id="home">
        <div class="content">

            <img src="./images/logo-no-background1.svg" alt="" style="
width: 500px;
 
height: 200px;">
            <p>Welcome to masala miles, where every meal is a culinary masterpiece delivered straight to your door.
                Explore a world of flavors with our diverse menu, curated from the finest ingredients and prepared by
                top chefs. Whether you're craving gourmet cuisine, comforting classics, or exotic dishes, SavorDelight
                promises a dining experience that's always fresh, delicious, and convenient. Order now and indulge in
                the delight of exceptional food, made just for you. Bon appétit!</p>
            <a href="/#order" class="btn">order now</a>
        </div>

        <div class="image">
            <!-- <img src="images/home-img.png" alt=""> -->
            <img src="images/food.jpg" alt="">
        </div>
    </section>

    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $database = "Masala Miles";
    $conn = new mysqli($hostname, $username, $password, $database);
    if ($conn == null) {
        echo "Connection Failed<br/>";
    }

    $sql = "SELECT * FROM restaurant ";
    $result = $conn->query($sql)
    ?>


    <section class="speciality" id="speciality">

        <h1 class="heading"> our's <span>Restaurant</span> </h1>

        <div class="scrolling-container">
            <?php
            // Fetch data from the database and loop through each restaurant
            while ($row = $result->fetch_assoc()) { ?>
            <div class="box">
                <a href="view-restaurant.php?id=<?= $row['id'] ?>&name=<?= $row['resname'] ?>">
                    <img class="image" src="./images/<?= $row['rphoto'] ?>" alt="">
                </a>
                <div class="content">
                    <h3><?= $row['resname'] ?></h3>
                    <p>Rating: <?= $row['rrating'] ?></p>
                    <p>Cuisine: <?= $row['rcuisine'] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>








    </section>

    <section class="popular" id="popular">
        <h1 class="heading">our <span>popular</span> foods</h1>
        <div class="box-container">
            <div class="box">
                <span class="price">₹150 - ₹450</span>
                <img src="images/b.jpg" alt="burger">
                <h3>tasty burger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/#order" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹500 - ₹2100</span>
                <img src="images/images.jpeg" alt="cakes">
                <h3>tasty cakes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/#order" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹50 - ₹400</span>
                <img src="images/sweet.jpeg" alt="sweets">
                <h3>tasty sweets</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/#order" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹30 - ₹600</span>
                <img src="images/p-4.jpg" alt="cupcakes">
                <h3>tasty cupcakes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/#order" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹40 - ₹120</span>
                <img src="images/s-img-4.jpg" alt="drinks">
                <h3>cold drinks</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/#order" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price">₹35 - ₹380</span>
                <img src="images/s-img-3.jpg" alt="ice-cream">
                <h3>tasty ice-creams</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="/#order" class="btn">order now</a>
            </div>
        </div>
    </section>

    <!--     <section class="steps">

        <div class="box">
            <img src="images/step-1.jpg" alt="">
            <h3>choose your favourite food</h3>
        </div>
        <div class="box">
            <img src="images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.jpg" alt="">
            <h3>easy payment methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>
    </section> -->


    <section class="review" id="review">

        <h1 class="heading">our customers <span>reviews</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic1.png" alt="">
                <h3>Priyanka sing </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>The Tasty Sweets are simply divine. Every bite of the cake was moist and delicious. A real
                    treat!"
                </p>

            </div>
            <div class="box">
                <img src="images/pic2.webp" alt="">
                <h3>Ravi Sharma </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>TastyBites breakfast is truly satisfying! They always hit the spot for me.</p>

            </div>
            <div class="box">
                <img src="images/pic3.jpg" alt="">
                <h3>Preeti Sharma </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p> It's the ultimate comfort food to start your day with. Highly recommend!</p>

            </div>
        </div>
    </section>

    <setion class="order" id="order">

        <h1 class="heading"><span>order</span> now </h1>

        <div class="row">
            <form action="mailto:vigneshgbecse@gmail.com">
                <div class="inputBox">
                    <input type="text" placeholder="Name"> <br>
                    <input type="email" placeholder="E-mail">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="Phone Number"> <br>
                    <input type="text" placeholder="Food Name">
                </div>
                <textarea placeholder="Address" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="order now" class="btn0">
            </form>
        </div>
    </setion>

    <section class="footer">

        <div class="container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <ul>
                    <li>Email:pulkitsharma1609@gmail.com</li>
                    <li>Phone: +91 8920345330</li>
                    <li>Address: </li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#speciality">our's Restaurant</a></li>
                    <li><a href="#popular">popular foods</a></li>
                    <li><a href="#review">customer reviews</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href=""><i class=" fab fa-youtube"></i></a></li>
                    <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href=""><i class="fab fa-github"></i></a></li>
                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>

                </ul>
            </div>
        </div>


        <h1 class="credit">
            created by <span><a href="https://vigneshgbe.neocities.org">Pulkit Sharma</a></span> | all rights are
            reserved
        </h1>
    </section>

    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>



</body>

</html>