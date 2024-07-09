<?php
session_start();

$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Admin';

?><header>
    <a href="#" class="logo"><img src="./images/logo-no-background1.svg" alt="" style="
width: 300px;
 
height: 100px;"></a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="/">home</a>
        <a href="#speciality">our's Restaurant</a>
        <a href="#popular">popular foods</a>

        <a href="#review">customer reviews</a>&nbsp;&nbsp;
        <!-- <span class="admin-name">Welcome, <?php echo $name; ?>!</span> -->
        <a href="#order"><button class="btn0">Order Now</button></a>

    </nav>
</header>