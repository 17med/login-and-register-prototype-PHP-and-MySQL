<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","","loginsysteam");
if(isset($_SESSION["nom"])){
    header('Location: home.php');
}
else{
    header('Location: login.php');
}
mysqli_close($con);


?>