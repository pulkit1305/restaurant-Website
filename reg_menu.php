<?php
session_start();

$Rmenu = $_POST['menu_ka_name'];
$rprice = $_POST['menu_ka_price'];
$type = $_POST['mType'];


echo $Rmenu;
echo $rprice;
echo $type;

$resname = $_SESSION["username"];
$host = "localhost";
$user = "root";
$pass = "";
$db = "masala miles";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn == null) {
    echo "Unable To Connect<br/>";
} else echo "conn sucessfull";
//------------------------------------------------------------------
if (isset($_POST['submit'])) {

    $sql = "INSERT INTO menu(Rmenu, rprice, type,resname) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siss", $Rmenu, $rprice, $type, $resname);

    $stmt->execute();
}
header('location:restaurant.php');
$conn->close();
