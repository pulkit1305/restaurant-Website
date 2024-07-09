<?php
$resname = $_POST['restaurant_ka_name'];
$rrating = $_POST['restaurant_ka_rating'];
$rcuisine = $_POST['restaurant_ka_cuisine'];
// $rphoto = $_POST['restaurant_ka_photo'];
session_start();
$_SESSION["username"] = $resname;
$_SESSION["CUISINE"] = $rcuisine;
// $Rmenu = $_POST['menu_ka_name'];
// $rprice = $_POST['menu_ka_price'];
// $type = $_POST['mType'];

echo $resname;
echo $rrating;
echo $rcuisine;
// echo $rphoto;
// echo $Rmenu;
// echo $rprice;
// echo $type;


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
    //                     value   key
    $file_name = $_FILES['restaurant_ka_photo']['name']; //file's name
    $tempname = $_FILES['restaurant_ka_photo']['tmp_name']; //file's path - source

    echo "<br/><br/>$file_name<br/>";
    // print_r($file_name); //show properties of a file/variables

    $folder = './images/' . $file_name; //destination
    $_SESSION["PHOTO"] = $folder;
    $sql = "INSERT INTO restaurant(resname, rrating, rcuisine, rphoto) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $resname, $rrating, $rcuisine, $file_name);
    $stmt->execute();

    if (move_uploaded_file($tempname, $folder)) { //move_uploaded_file(source, destination) - copy and move file 
        echo "File Uploaded";
    }
}
header('location:restaurant.php');
$conn->close();
