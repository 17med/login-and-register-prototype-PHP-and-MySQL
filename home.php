<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>log</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<?php
session_start();
if(isset($_SESSION['nom'])==false){
    header("Location: login.php");
    
}

?>
<body style="background: rgb(241,247,252);">
    <section class="login-clean" style="background: rgb(241, 247, 252);">
        <form method="post">
            <h2 class="visually-hidden">Login Form</h2><strong class="text-center d-md-flex justify-content-md-center align-items-md-center" style="font-size: 26px;color: var(--bs-blue);border-color: var(--bs-blue);text-align: center;width: 100%;">home</strong>
            <div class="illustration"><i class="icon ion-android-contact" style="color: var(--bs-blue);"></i></div>
            <div class="mb-3"><input class="form-control" value="<?php echo $_SESSION["nom"]; ?>" type="email" name="email" placeholder="Email" readonly></div>
            <div class="mb-3"></div>
            <div class="mb-3"><button onclick="window.location.href ='logout.php'"  class="btn btn-primary d-block w-100" type="button" style="background: var(--bs-blue);color: var(--bs-white);">Log out</button></div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>