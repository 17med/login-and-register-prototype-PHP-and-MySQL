<?php
session_start();
function testexist($con,$em){
    $req="select * from user where email='$em'";
    $res=mysqli_query($con,$req);
    return mysqli_num_rows($res)>0;
}
function regi($con,$em,$pass){
    $req="insert into user values('$em','$pass');";
    
    $res=mysqli_query($con,$req);

}
$em=$_POST["email"];
$pass=$_POST["password"];

$con=mysqli_connect("127.0.0.1","root","","loginsysteam");
if(testexist($con,$em)){
    echo "<script>alert('user exist');window.location.href = 'register.php';</script>";

}
else{
    regi($con,$em,$pass);
    $_SESSION["nom"]=$em;
    echo "<script>alert('account created');window.location.href = 'home.php';</script>";
}

?>