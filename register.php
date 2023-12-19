<?php

// require 'functions.php';
require 'database.php';

if (isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];

    $sql = mysqli_query($conn, "INSERT INTO tb_user VALUES('', '$name', '$email', '$password', '$telephone', '$address')");

    $sqlUserAccount = mysqli_query($conn, "INSERT INTO user values('', '$email', '$password', 'user')");
    if ($sql){
        echo "<script>
                alert('Registrasi Berhasil');
              </script>";
    } 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme3.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.php">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Halaman Register</h3>
                        <p>Register dengan menggunakan email dan No. Telephone</p>
                        <div class="page-links">
                            <a href="login.php">Login</a><a href="register3.php" class="active">Register</a>
                        </div>
                        <form action="" method="post">
                            <input class="form-control" type="text" name="name" placeholder="Nama" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="text" name="telephone" placeholder="Telephone" required>
                            <input class="form-control" type="text" name="address" placeholder="Alamat" required>
                            <div class="form-button">
                                <input id="submit" type="submit" class="ibtn" name="register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>