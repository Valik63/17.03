<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM cars WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Car Deleted Successfully!";
    header("Location:welcome-login.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Car does not exist";
}
?>