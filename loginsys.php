<?php
session_start();
$em=$_POST["email"];
$pass=$_POST["password"];
$con=mysqli_connect("127.0.0.1","root","","loginsysteam");
$req="select * from user where email='$em' and password='$pass'";
$res=mysqli_query($con,$req)or die("error");
$s= mysqli_num_rows($res);
mysqli_close($con);

?>
<html>
    <?php
    if($s==0){
    echo '<script>alert("faild on login");window.location.href = "login.php";</script>';
}
else{
    $_SESSION['nom']=$em;
    header('Location: home.php');
}
?>
</html>