<?php
require 'function.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $numrows = mysqli_num_rows($stmt);
    


    if ($numrows > 0) {
        $row = mysqli_fetch_array($stmt);
        $username = $row['username'];
        $role = $row['role'];
        $idUser = $row['id'];

        session_start(); // Start session

        $_SESSION['log'] = 'logged';
        $_SESSION['username'] = $username; // Set user ID in session
        $_SESSION['role'] = $role; // Set user role in session
        $_SESSION['idUser'] = $idUser; // Set user role in session

        if ($role == 'admin') {
            $_SESSION['role'] = 'Admin';
            header('location: admin');
        } else if ($role == 'user') {
            $_SESSION['role'] = 'User';
            header('location: user');
        } else if ($role == 'owner') {
            $_SESSION['role'] = 'Owner';
            header('location: owner');
        }
    } else {
        echo 'Username atau password salah.';
    }

    $stmt->close();
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
                    <img class="logo-size" src="img/honda.png" alt="">
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
                        <h3>Halaman Login</h3>
                        <p>Login dengan menggunakan email dan password yang sudah terdaftar</p>
                        <div class="page-links">
                            <a href="login.php" class="active">Login</a>
                            <a href="register.php">Register</a>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show with-icon" role="alert">
                            Please fill the following form with your information
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="">
                            <label for="username"><b>E-mail</b></label>
                            <input class="form-control" type="text" name="username" placeholder="E-mail" required>
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" name="login" class="ibtn">Login</button> <a href="forget3.html">Forget password?</a>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or login with</span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
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